<?php
namespace App\Repository;

use App\User;
class UserRepository{
	
	public function getAll(){
		$users = User::all();
		return $users;
	}
	
	
}