<?php
/**
 * Created by PhpStorm.
 * User: NIKITA
 * Date: 28.09.2017
 * Time: 11:55
 */
class PropertyMapper
{
    /** @var DBConnection */
    public $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }
    /**
     * Simple representation of an ORM (Object Relation Mapping)
     * Given a specific class and id this method looks for a table called like the class in lowercase e.g. Cat -> cat
     * Then all column values are mapped to a new instance as its properties.
     * Tablecolumns must be named in snakecase and class properties in lowerCamelCase e.g. head_size -> headSize
     * In case a column is prefixed with "id_" it is assumed it's a foreign key. This means it's a composition
     * and it is resolved by calling this method recursively.
     *
     * @param $classname
     * @param $id
     * @return mixed
     */
    public function mapProperties($classname, $id)
    {
        $obj = new $classname();
        $table = strtolower($classname);
        $result = $this->db->executeQuery("SELECT * FROM $table WHERE id_$table = $id")->fetch_assoc();
        foreach ($result as $key => $value) {
            if (is_null($value)) {
                continue;
            }
            $setter = "set" . $this::underscoredToUpperCamelCase($key);
            $prefix = substr($key, 0, 3);
            if ($prefix === "id_") {
                $tablename = substr($key, 3);
                if ($tablename === $table) {
                    $obj->$setter($value);
                    continue;
                } else {
                    $childclass = ucfirst($tablename);
                    $setter = "set" . $this::underscoredToUpperCamelCase($tablename);
                    $obj->$setter($this->mapProperties($childclass, $value));
                    continue;
                }
            }
            $obj->$setter($value);
        }
        return $obj;
    }
    /**
     * Returns a given string with underscores as UpperCamelCase.
     * Example: Converts blog_example to BlogExample
     *
     * @param string $string String to be converted to camel case
     * @return string UpperCamelCasedWord
     */
    public static function underscoredToUpperCamelCase($string)
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower($string))));
    }
}
