<?php

class person{
    var $firstName;
    var $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function fullName(){
        return $this->firstName.' '.$this->lastName;
    }
}

$person1 = new person('Juan','Salazar');
$person2 = new person('Cristian','Ramirez');

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";


?>