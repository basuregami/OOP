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
      use App/Model/User;

       class UserService {

           public $firstName;
           public $lastName;

          public static function registerUser(
            string $firtName,
            string $lastName,
            string $email;

          )
          {
              $data['first_name'] = $firName;
              $data['last_name'] = $lastName;
              $data['email'] = $email;
              $user = User::create($data);
              if(!$user) {
                throw new Exception('user registration service is down');
              }
              return $user;

          }
       }
```

---

### Magic Method

> Class

---

### Constructor

> A constructor in a class allows us to initizlize an object's with additonal properties upon creation of the object. The construct function start with two undersoces (\_\_)!. Example

```php
       class Test {
           public function function __construct(){

           }

       }
```

---

### Destructor

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

---

### Call

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

---

### Call Static

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

---

### Get

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

---

### Set

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

---

### ToString

> A destructor in a class refers to special type of function which will be called automatically whenever an object is deleted or goes out of scope.

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

## Traits

> Todo.

---
