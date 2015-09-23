<?php

namespace lib;

abstract class BaseObject
{
    protected $valuesMap = array();
    public $id;

    public function __construct($array = array())
    {
        if (!is_null($array)) {

            $this->valuesMap += array(
                'id' => 'id');

            foreach ($this->valuesMap as $propertyName => $fieldName) {
                if (isset($array[$fieldName])) {
                    $this->$propertyName = $array[$fieldName];
                }
            }
        }
    }

    /**
     * Returns formatted database array from object.
     * @return array
     */
    public function toDatabaseArray()
    {
        $databaseArray = array();

        foreach ($this->valuesMap as $propertyName => $fieldName) {
            $databaseArray[$fieldName] = $this->$propertyName;
        }

        return $databaseArray;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDatabaseNameFromProperty($propertyName)
    {
        return $this->valuesMap[$propertyName];
    }
}