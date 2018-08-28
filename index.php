<?php
include 'company_classes/Company.php';
include 'company_classes/SoftwareCompany.php';
include 'company_classes/ConstructionCompany.php';
include 'company_classes/Programmer.php';
include 'company_classes/Builder.php';

echo '<pre>';
$programmer = new Programmer();
$builder = new Builder();
 
$programmer->printInfo();
$programmer->addSkill('Rusty');
$programmer->addSkill('PHP');
$programmer->addSkill('Pascal');
$programmer->addSkill('Go');
$programmer->addSkill('JAVA');
$programmer->addSkill('Phyton');
$programmer->printInfo();
$programmer->bankrupt();
$programmer->addSkill('PHP');
$programmer->printInfo();
print '<hr>';
$builder->printInfo();
$builder->addSkill('Truck Driver');
$builder->printInfo();
$builder->bankrupt();
$builder->addSkill('Tank Driver');
$builder->printInfo();
