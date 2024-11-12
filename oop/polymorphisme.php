<?php
class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


}

class BackEnd extends Programmer {

}

class FrontEnd extends Programmer {

}

class Company {
    var Programmer $programmer;

    
}

$company = new Company();
$company->programmer = new Programmer("Reza");
$company->programmer = new BackEnd("Reza"); 
$company->programmer = new FrontEnd("Reza");

function sayHello(Programmer $programmer){
    echo "hello {$programmer->name} <br>";
}

sayHello(new Programmer("Reza"));
sayHello(new BackEnd("Reza"));
sayHello(new FrontEnd("Reza"));