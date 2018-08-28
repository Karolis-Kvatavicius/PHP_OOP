<?php
class SoftwareCompany extends Company {
    protected $programmingLanguages = array();

    function __construct() {
        parent::__construct();
        $this->programmingLanguages = $this->pickLanguages();
    }

    private function pickLanguages() {
        $langArray = array('PHP', 'Pascal', 'Go', 'C++', 'JAVA', 'Phyton');
        return array_rand(array_flip($langArray), 3);
    }

    protected function bankrupt() {
       parent::bankrupt();
       $this->programmingLanguages = array();
    }

    function get_programmingLanguages() {
        return $this->programmingLanguages;
    }

    protected function printInfoSoftwareCompany() {
        print 'Company codes in: '.implode(', ', $this->programmingLanguages).'<br>';
    }
}