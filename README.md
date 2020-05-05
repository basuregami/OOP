# Understanding Object Oriented Programming

The main goal of this project is to show the various concept of object oriented programming using the php langague and providing some hands on example.

---

## Requirement

> It is recommend to have some basic foundation knowlede of programming before starting to take this course. List of things to understand before looking to this repository are as follows:

- Variables
- Data types
- Functions
- Operators
- loops and itertaions

---

## Contents

- [Class](#class)
  - [Access Modifiers](##access-modifiers)
  - [Static Method And Properties](#static-method-and-properties)
  - [Magic Methods](##magic-method)
    - [Constructor](##constructor)
    - [Destructor](##destructor)
    - [call](##call)
    - [call static](##call-static)
    - [Get](##get)
    - [Set](##set)
    - [ToString](##tostring)
- [Inheritance](#inheritance)
- [Polymorphism](#polymorphism)
  - [Overloading](#overloading)
  - [Overriding](#overreding)
- [Constants](#constants)
- [Abstract Classes](#abstract-classes)
- [Interface](#interface)
- [Traits](#traits)

---

## Class

> Class in Object-oriented programming, is like a template(blueprint) definition of the methods and variables for creating Object. Therefore, an Object is an specific instance of a class which contains the real values instead of a variables.

Example

```php
       class User {

           public $firstName;
           public $lastName;

           public function setFirstName($name)
           {
             $this->name = $name;
           }

           public function getFirstName()
           {
             return $this->name;
           }

           public function setLastName($lastName)
           {
             $this->lastName = $lastName;
           }

           public function getLastName()
           {
             return $this->lastName;
           }

       }
```

---

## Access Modifiers

> Access modifiers (access specifiers) are the keywords in object-oriented languages that let us, to set different level of access level to the properties and methods in a class. Access Levevls help us to ensure the features (methods and properties) of an object is only access by those part of the program that we have allowed to use the feature. They enforce encapsulation and separation of the implementation logic from the other part of program.

> **Public**: This is default access modifier set to the class method and properties. Public method and property can be access from everywhere.

> **Protected**: The method and property with the protected access modifier can only be accessed within the class itself and by the classes derivied from that class.

> **Private**: The method and property with the private access modifer can only be accessed within the class only.

```php
       class User {

           public $name;
           protected $occupation;
           private $age;
       }

       $user1 = new User();
       $user1->name = 'John flex';
       $user1->occupation = 'developer'; // error
       $user1->age = 'male'; //error
```

---

## Static Method And Properties

> And method and property in a class declare static with the use of 'static' keyword can be accessed without creating the object of the class. Static functions and properties are associated with the class itself, not with the instance of the class.

Example

```php
  class HelloWorld {

    public static $message;

    public static function getMessage()
    {
      return 'This is the personalized message set by you. '. self::$message . ' ' ;
    }
  }

  HelloWorld::$message = 'Hi! This is my first use of the static proeprty in the class.';
  $messageWithMyText = HelloWorld::getMessage();

  echo $messageWithMyText;
```

---

### Magic Method

> Magic method are tje special type of function in a class they get excuted automatically upon the creation of the object.
> Magic method always begins with 2 underscores(\_\_).
> List of magic method supported by PHP.

- \_\_construct()
- \_\_destruct()
- \_\_call($methodName, $arguments)
- \_\_callStatic($methodName, $arguments)
- \_\_get(\$property)
- \_\_set($property, $value)
- \_\_isset(\$content)
- \_\_unset(\$content)
- \_\_sleep()\*\*\*\*
- \_\_wakeup()
- \_\_toString()
- \_\_invoke()
- \_\_set_state(\$array)
- \_\_clone()\*\*\*\*
- \_\_debuginfo()

### Constructor

> A constructor is a magic method in a class which get calls automatically upon the createion of the object. It helps us to initalized the class with some additional properties defined by us.
> Any number of arguments can be defined here that will should be passed while creating the object.

```php
       class Sample {
           public function function __construct(){
             echo "I get call while creating object of this call";
             echo '<br/>';
             echo "you can pass be any number of parameter if you want";
           }

       }

       $obj = new sample();
```

---

### Destructor

> A destructor in a class refers to special type of function which will be called automatically whenever
> an object is deleted or goes out of scope.

```php
    class sample {

      public function __construct() {
        echo "Constructor initialised"." ";
      }

      public function someUserDefinedFunction() {
        echo "User defined function "." ";
      }

      public function __destruct() {
         echo "after user definition, object gets destroyed automatically"." ";
      }
  }

  $obj= new sample();
   $obj->user_def();

  //check object is destroyed or not
  echo is_object($obj)."";

  // Here the __destruct() function is automatically call at the end of the program

```

---

### Call

> A call is a magic method in a class which get calls automatically when an undefined or inaccessible
> method is called. This function takes two argument where first arguments represent the name of
> function that is being called and second arugument represent the parameter passed to the function.

```php
  class Sample {

    public function someUserDefinedFunction()
    {
      return "I'm user defined function";
    }

    public function __call($methodName, $arguments)
    {
      echo "$methodName function is not defined on the Sample class";
    }
  }

  $obj = new Sample();
  $obj->someUserDefinedFunction();

  $obj->notAvaiableFunction(); // when this method is called, call magic method get invoked.
```

---

### Call Static

> A call static is a magic method in a class which get calls automatically when an undefined or
> inaccessible method is called statically.This function takes two argument where first arguments
> represent the name of function that is being called and second arugument represent the parameter
> passed to the function.

```php
  class Sample {

    public function someUserDefinedFunction()
    {
      return "I'm user defined function";
    }

    public function __callSatic($methodName, $arguments)
    {
      echo "$methodName function is not defined on the Sample class";
    }
  }


  Sample::notAvaiableFunction(); // when this method is called, callstatic magic method get invoked.
```

---

### Get

> A get method is a magic method in a class which get automatically invoke when accessing the undefined
> or unaccessable property in a class. This method is used for getting dynamically class properties value;

```php

  class Test {

    private $name = 'john';

    public function __get($propertyName)
    {
      if($propertyName == 'name') {
        return $this->name;
      }
      return "$propertyName property is not defined";
    }
  }

$obj = new Test();

echo $obj->name; // if we remove __get method error will be thrown since we can't access the private property from class.

```

---

### Set

> A set method is a magic method which get invokes when we putting values for any undefined or unaccessible property in a class.
> This method is used to dynamically putting values for class proprties.

```php

  class Test {

    private $name = 'john';

    public function __set($propertyName, $value)
    {
      if($propertyName == 'name') {
        return $this->name;
      }
      $this->$propertyName = $value;
    }
  }

$obj = new Test();

echo $obj->name = 'lucy';
echo $obj->email = 'lucifier@example.com';
```

---

### ToString

> This magic method will be invoked when we using echo method to print an object directly. This method is
> expected to return a string value using the instance of the class.

```php

  class Student {

    public $studentName;

    public $registrationNumber;

    public function __construct($studentName, $registrationNumber)
    {
      $this->studentName = $studentName;
      $this->registrationNumber = $registrationNumber;
    }

    public function __toString()
    {
      echo "This method get called when you echo the object of this class";
    }

  }

  $obj = new Student('John',123456);
  echo $obj;


```

---

## Inheritance

> Todo.

---

## Polymorphism

> Todo.

---

### Overloading

> Todo.

---

### Overriding

> Todo.

---

---

## Constants

> Todo

---

## Abstract Classes

> Todo

---

## Interface

> Todo

---

## Traits

> Todo.

---
