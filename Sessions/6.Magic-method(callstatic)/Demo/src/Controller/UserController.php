<?php

namespace App\Controller;

use App\Model\UserModel;

class UserController {

	public function createUser(array $request)
	{

		$user = new UserModel();
		$user->firstName = $request['first_name'];
		$user->lastName = $request['last_name'];
		$user->email = $request['email'];
		$user->password = $request['password'];

		if($user->save()) 
		{
			return 'User successfully registered';
		} 

		return 'Unable to create user';
	}

	public function registerUser(array $request)
	{
		$user = UserModel::create($request);
		if($user) {
			return 'User successfully registered';

		}
		return 'Unable to create user';

	}

}