<?php
class User{
    private $name;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $name, $email, $password){
        $this->$username = $username;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
}
?>