<?php

require __DIR__.'/../vendor/autoload.php';

use App\Controller\UserController;


$data = [
	'first_name'  => 'John',
	'last_name' => 'Legend',
	'email' => 'johnlegend@example.com',
	'password' => '********'
];

$userObj = new UserController();
echo $userObj->createUser($data);


$data = [
	'first_name'  => 'John',
	'last_name' => 'Legend',
	'email' => 'johnlegend@example.com',
	'password' => '********'
];