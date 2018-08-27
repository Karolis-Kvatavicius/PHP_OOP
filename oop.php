<?php
include 'person_lib.php';
include 'car_lib.php';
$stefan = new person();
$stefan->set_name('Stefan Mischook');
echo $stefan->get_name().'<br><br>';
$audi = new Car();
$audi->set_engine('V6');
$audi->set_fuelType('gasoline');
$audi->set_acceleration(200);
echo 'AUDI<br>Engine: '.$audi->get_engine().'<br>Fuel: '.$audi->get_fuelType().'<br>Acceleration: '.$audi->get_acceleration();