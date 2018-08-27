<?php
class Car {
    var $engine;
    var $acceleration;
    var $fuelType;

    function set_engine($type) {
        $this->engine = $type;
    }

    function set_acceleration($acceleration) {
        $this->acceleration = $acceleration;
    }

    function set_fuelType($fuelType) {
        $this->fuelType = $fuelType;
    }

    function get_engine() {
        return $this->engine;
    }

    function get_acceleration() {
        return $this->acceleration;
    }

    function get_fuelType() {
        return $this->fuelType;
    }
}