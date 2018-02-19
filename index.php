<?php

class User{
	private $id = 9; 
	public $username;
	private $email; 
	private $password; 

	public function __construct($username,$password){
		$this->username = $username;
		$this->password = $password;
		echo "Constuctor called \n";
	}

	public function register(){
		echo 'User Registered';
	}

	public function login(){
		
		$this->auth_user(); 
	}

	public function auth_user(){
		echo $this->username . ' is authenticated' .  "With ID of ". $this->id . "\n";
	}

	public function __destruct(){
		echo "Destructor called\n";
	}

	
}

$User = new User("Conor","1234"); 

//$User->register();

//$User->login();

echo $User->username . "\n";
echo $User->login() . "\n";


