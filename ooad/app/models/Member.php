<?php


class Member{
	private $id ;
	private $username ;
	private $password ;
	private $phone ;
	private $facebook ;


	public function __construct()
	{
		$this->id = Null;   ;   
		$this->username = Null;
		$this->password = Null;    
		$this->phone = Null; 
		$this->facebook = Null; 
	}


	public function setId ($val){
		$this->id = $val;
	}

	public function setUserName ($val){
		$this->username = $val;
	}

	public function setPassword ($val){
		$this->password = $val;
	}

	public function setPhone ($val){
		$this->phone = $val;
	}

	public function setFacebook ($val){
		$this->facebook = $val;
	}


	public function getId (){
		return $this->id;
	}

	public function getUserName (){
		return $this->username;
	}

	public function getPassword (){
		return $this->password;
	}

	public function getPhone (){
		return $this->phone;
	}

	public function getFacebook (){
		return $this->facebook;
	}

}

?>