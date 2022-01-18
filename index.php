<?php
/**
* 
*      Definire classe Persona:
*          - ATTRIBUTI (private):
*              - nome
*              - cognome
*              - dataNascita (stringa)
*          - METODI:
*              - costruttore che accetta nome e cognome
*              - setter/getter per ogni variabile
*              - printFullPerson: che stampa "nome cognome: dataNascita"
*              - toString: che ritorna "nome cognome: dataNascita"
* 
* 
*      Definire classe Employee che eredita da Persona:
*          - ATTRIBUTI (private):
*              - stipendio
*              - dataAssunzione
*          - METODI:
*              - costruttore che accetta nome, cognome e stipendio
*              - setter/getter per variabili 
*              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
*              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
* 
*/

class Person {
    private $name;
    private $lastname;
    private $birthday;

    public function __construct($name, $lastname){
        $this->name = $name;
        $this->lastname = $lastname;
    }

    // setter

    public function setBirthday($birthday){
        $this->birthday = $birthday;
    }

    // getter
    
    public function getName(){
        return $this->name;
    }

    public function getLastname(){
        return $this->lastname;
    }


    public function getBirthday(){
        return $this->birthday;
    }

    // print functions

    public function printFullPerson() {
        return $this->getName() . " " . $this->getLastname() . ": " . $this->getBirthday();
    }

    public function __toString() {
        return $this->printFullPerson();
    }
}

class Employee extends Person{

    private $hiringDate;

    public function __construct($name, $lastname, $salary){
        parent::__construct($name, $lastname);            
        $this->salary = $salary;
    }

    // setter

    public function setHiringDate($hiringDate) {
        $this->hiringDate = $hiringDate;
    }

    // getter

    public function getSalary() {
        return $this->salary;
    }

    public function getHiringDate() {
        return $this->hiringDate;
    }

    // print functions

    public function printFullEmployee() {
        return $this->getName() . " " . $this->getLastname() . ": " . $this->getSalary() . "€ (" . $this->getHiringDate() . ")";
    }

    public function __toString() {
        return $this->printFullEmployee();
    }
}

echo "<br><br> --------- esercizio get/set -------------<br><br>";

echo " --- class person ---<br>";
$p1 = new Person("stefano", "carletti");
$p2 = new Person("giorgia", "franceschini");
$p1 -> setBirthday("1/1/01");
$p2 -> setBirthday("2/2/02");
echo $p1 . "<br>";
echo $p2 . "<br>";

echo "<br> --- class employee ---<br>";
$e1 = new Employee("michele", "salvemini", 75000);
$e2 = new Employee("erika", "busetto", 34000);
$e1 -> setHiringDate("1/1/01");
$e2 -> setHiringDate("2/2/02");
echo $e1 . "<br>";
echo $e2 . "<br>";
?>