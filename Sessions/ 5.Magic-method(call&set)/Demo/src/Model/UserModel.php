<?php

namespace App\Model;

use App\Model\Model;

class UserModel extends Model {

	protected $fillable = [
	  'firstName',
	  'lastName',
	  'email',
	  'password'
	];

	protected $table = 'users';

	
}