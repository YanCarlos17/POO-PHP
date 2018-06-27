<?php

class person{
    var $firstName;
    var $lastName;

    function fullName(){
        return $this->firstName.' '.$this->lastName;
    }
}

$person1 = new person;
$person1->firstName='Pedro';
$person1->lastName='Peréz';

$person2 = new person;
$person2->firstName='Pablo';
$person2->lastName='Ramirez'; 

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";


?>