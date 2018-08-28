<?php
class ConstructionCompany extends Company {
    protected $buildingObjects = array();

    function __construct()
    {
        parent::__construct();
        $this->buildingObjects = $this->buildObjects();
    }

    function buildObjects() {
        $objArray = array('Houses', 'Bridges', 'Offices', 'Roads', 'Gardens', 'Railroads', 'Canals', 'Aqueduct', 'Stadions');
        return array_rand(array_flip($objArray), 4);
    }

    protected function bankrupt() {
        parent::bankrupt();
        $this->buildingObjects = array();
     }

    function get_buildingObjects() {
        return $this->buildingObjects;
    }

    function set_buildingObjects($value) {
        $this->buildingObjects[] = $value;
    }

    protected function printInfoConstructionCompany() {
        print 'Company builds: '.implode(', ', $this->buildingObjects).'<br>';
    }
}