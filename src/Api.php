<?php
namespace Test;

class Api
{
    private $array = [];

    public function __construct()
    {
        $this->array = ['Demo:'];
    }

    /**
     * @param $conf_name
     *
     * @return mixed
     */
    public function getArray($conf_name)
    {
        return $this->array[$conf_name];
    }

    /**
     * @param array ...$Array
     *
     * @return bool
     */
    public function setArray(...$Array)
    {
        $this->array += $Array;

        return true;
    }

    public function getArrayAll()
    {
        return $this->array;
    }
}