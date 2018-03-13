<?php

/**
 * @author Boas Lehrke
 * Date: 28.09.2017
 *
 * HowTo: Create a new PageController.
 *        Call "renderView()" with an action as parameter and echo the result.
 */
class PageController
{
	/**
	 * @var Page
	 */
    private $page = null;
	/**
	 * @var PropertyMapper
	 */
    private $propertyMapper = null;
	/**
	 * @var String
	 */
    private $layout;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->page = new Page();
        $this->propertyMapper = new PropertyMapper();
        $this->layout = TEMPLATEPATH . "index.html";
    }

    /**
     * Does a specific action, predefined by the action-parameter.
     * Returns the parsed site
     * @param String $action
     * @return array
     */
    public function initializeAction($action)
    {
        $content = "";
        $pageContent = [];
        switch ($action) {
            default:
                $title = "Startseite";
                $action = "startpage";
                $variables = [];
                $stationsJs = '';
                $stations = DBConnection::getInstance()->executeQuery("SELECT * FROM station")->fetch_all(MYSQLI_ASSOC);
                foreach ($stations as $station) {
                    $stationsJs .= "addMarker(layer_markers, $station[longitude], $station[latitude], '$station[name]');\n";
                }
                $variables['stationsJs'] = $stationsJs;
        }
        $content .= $this->page->parseTemplate(TEMPLATEPATH . "$action.html", $variables);
        return [
            'title' => $title,
            'content' => $content
        ];
    }

	/**
	 *	Renders the view by the given action
	 *
	 * @param String $action
	 * @return String
	 */
    public function renderView($action)
    {
        $settings = [
            'baseUrl' => BASEURL,
            'year' => date('Y')
        ];
        $actionVariables = $this->initializeAction($action);
        $settings = array_merge($settings, $actionVariables);
        return $this->page->parseTemplate($this->layout, $settings);
    }
}
