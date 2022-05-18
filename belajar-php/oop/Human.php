<?php

class Human {
    public $name;
    public $height;
    public $age;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}