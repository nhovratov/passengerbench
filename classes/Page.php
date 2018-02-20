<?php

/**
 * Description of Page
 *
 * @author bjoern.bass@esfl.de
 */
class Page
{
    public $templateDir;

    public function __construct($templateDir = "")
    {
        defined('BASEURL') or define('BASEURL', $this->getBaseUrl());
        if (empty($templateDir)) {
            defined('TEMPLATEPATH') or define('TEMPLATEPATH',
                BASEPATH . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
        } else {
            $this->templateDir = $templateDir;
        }
    }

    /**
     * See http://stackoverflow.com/questions/2820723/how-to-get-base-url-with-php
     * @return string Returns the path of the calling file with trailing slash.
     *
     */
    public function getBaseUrl()
    {
        $config = getConfig();
        if (key_exists('baseurl', $config)) {
            return $config["baseurl"];
        }

        return dirname(sprintf(
                    "%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                    $_SERVER['SERVER_NAME'])
            ) . $_SERVER['REQUEST_URI'];
    }

    /** parseTemplate
     * Reads the HTML-Template and exchanges the placeholders (in this case [[*NAME]])
     * with the associated values from the array.
     *
     * @param string $templateFilename Name of the Templatefile that will be read
     * @param assoc-array $pageDataArray Associative array which holds the values that will be replaced
     * @return string The string, which will be returned. It can be echoed out.
     */
    public function parseTemplate($templateFilename, $pageDataArray)
    {
        // Either pass in a template name or plain html string
        if (preg_match_all("/.html$/", $templateFilename)) {
            $output = file_get_contents($templateFilename);
        } else {
            $output = $templateFilename;
        }

        foreach ($pageDataArray as $placeholder => $value) {
            if (empty($value)) {
                $value = 'No value was given for the variable $pageDataArray [\'' . $placeholder . '\']';
            }

            // For Each implementation in template [[*/foo]] is recognized as a loop
            if (is_array($value)) {
                $parts = [];
                $marker = "\[\[\*\/" . $placeholder . "\]\]";
                $pattern = "@";
                $pattern .= "(.*)$marker(.*)$marker(.*)";
                $pattern .= "@s"; // dot matches new line
                preg_match($pattern, $output, $matches);
                $parts[] = $matches[1];
                $parts[] = $matches[2];
                $parts[] = $matches[3];
                $foreachContent = "";
                foreach ($value as $data) {
                    $foreachContent .= $this->parseTemplate($parts[1], $data);
                }
                return $parts[0] . $foreachContent . $parts[2];
            }
            // Standard marker replacement
            $output = str_replace('[[*' . $placeholder . ']]', $value, $output);
        }
        return $output;
    }

    /** debug
     * Prints an entire HTML-error-page using "die()" for debugging purposes
     * @param String $string A string to show in an errorpage.
     * @param string $templateFilename
     */
    function debug($string, $templateFilename = "templates/index.html")
    {
        $params = array(
            'baseUrl' => BASEURL,
            'title' => 'Fehlerseite',
            'header' => '',
            'status' => '<span class="glyphicon glyphicon-warning-sign"></span> Fehlerseite aufgerufen',
            'content' => '<pre style="background-color: #ccc">' . print_r($string, true) . '</pre>',
            'footer' => '',
        );
        die($this->parseTemplate($templateFilename, $params));
    }

}
