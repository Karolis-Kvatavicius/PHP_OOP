<?php
class Programmer extends SoftwareCompany {
    private $name;
    protected $skills;

    function __construct() {
        parent::__construct();
        $this->name = $this->generateName();
        $this->skills = array_rand(array_flip($this->programmingLanguages), 2);
    }

    function get_skills() {
        return $this->skills;
    }
    
    function printInfo() {
        $this->printInfoCompany();
        $this->printInfoSoftwareCompany();
        print 'Programmer\'s Name: '.$this->name.' <br>Programmer\'s skills: '.implode(', ', $this->skills).'<br><br>';
    }

    function addSkill($skill) {
        if($this->get_employees() == 0 && $this->get_turnover() == 0) {
            echo  'Company '.$this->get_name().' is bankrupt.<br><br>';
            return;
        }
        if(in_array($skill, $this->get_programmingLanguages()) == false) {
            $this->programmingLanguages[] = $skill;
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