<?php
class Builder extends ConstructionCompany {
    private $name;
    protected $skills;
    
    function __construct() {
        parent::__construct();
        $this->name = $this->generateName();
        $this->skills = (array) array_rand(array_flip(['electrician', 'plumber', 'tractor', 'driver', 'engineer']), 1);
    }

    function get_skills() {
        return $this->skills;
    }

    function printInfo() {
        $this->printInfoCompany();
        $this->printInfoConstructionCompany();
        print 'Builder\'s Name: '.$this->name.' <br>Builder\'s skills: '.implode(', ', (array) $this->skills).'<br><br>';
    }

    function addSkill($skill) {
        if($this->get_employees() == 0 && $this->get_turnover() == 0) {
            echo  'Company '.$this->get_name().' is bankrupt.<br><br>';
            return;
        }
        if(in_array($skill, $this->skills) == false) {
            $this->skills[] = $skill;
        }
    }

    function bankrupt() {
        parent::bankrupt();
        $this->name = '';
        $this->skills = array();
          
    }
}