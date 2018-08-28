<?php
class Company {
    private $name;
    protected $employees;
    protected $turnover;
    
    function __construct() {
        $this->name = $this->generateName();
        $this->employees = rand(3, 100);
        $this->turnover = rand(10000, 10000000);
    }

    function get_name() {
        return $this->name;
    }

    function get_employees() {
        return $this->employees;
    }

    function get_turnover() {
        return $this->turnover;
    }

    public function generateName() {

        $nameLength = rand(5, 12);
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomName = '';
    
        for ($i = 0; $i < $nameLength; $i++) {
            $randomName .= $characters[rand(0, $charactersLength - 1)];
        }  
        return ucfirst($randomName);
    }

    protected function printInfoCompany() {
        echo 'Company\'s name: '.$this->name.' <br>Company\'s employees: '.$this->employees.' <br>Company\'s turnover: '.$this->turnover.'<br>';
    }

    protected function bankrupt() {
        print $this->name.' is bankrupt. '.$this->employees.' employees are now unemployed.<br><br>';
        $this->employees = 0;
        $this->turnover = 0; 
     }
}