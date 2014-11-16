<?php


class addcomment{

	private $username ;
	private $comment ;



	public function __construct()
	{   
		$this->username = Null;
		$this->comment = Null;    

	}

	public function setUserName ($val){
		$this->username = $val;
	}

	public function setComment ($val){
		$this->comment = $val;
	}


	public function getUserName (){
		return $this->username;
	}

	public function getComment (){
		return $this->comment;
	}

}

?>