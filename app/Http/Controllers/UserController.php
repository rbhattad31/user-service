<?php

namespace App\Http\Controllers;

use Log;
use App\Repository\UserRepository;
use function GuzzleHttp\json_encode;

class UserController extends Controller
{
	
	private $userRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index(){
    	echo json_encode($this->userRepo->getAll());
    }
    
    public function register(){
    	echo "Register";
    }
    
    public function login(){
    	Log::info("Login");
    	echo "Login";
    }
    
    public function forgotPassword(){
    	echo "Forgot Password";
    }
}
