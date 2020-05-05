<?php

class Employee {
    
    public $name;
    public $emai;
    public $department;
    public $designation;

    public function __construct($name,$email, $department, $designation){
        $this->name = $name;
        $this->email = $emai;
        $this->department =$department;
        $this->designation = $designation;
    }

    public function getEmployeeProfile($emai)
    {
        echo "Name: $this->name";
        echo '<br/>';
        echo "Email: $this->eamil";
        echo '<br/>';
        echo "Department: $this->department";
        echo '<br/>';
    }

    public function __destruct()
    {
        echo "Destorying the instance of $this->email employee object of Employee class";
    }
}


$emp = new Employee("Dwight Graham", "dwightgraham@example.com", "Service", "Manager");

//ater the object is created the destruct magic method is automatically called