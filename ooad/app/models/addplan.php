<?php


class addplan{

	private $username ;
	private $plan1 ;
	private $plan2 ;
	private $plan3 ;
	private $plan4 ;
	private $plan5 ;



	public function __construct()
	{   
		$this->username = Null;
		$this->plan1 = Null;
		$this->plan2 = Null;
		$this->plan3 = Null;
		$this->plan4 = Null;
		$this->plan5 = Null;    

	}

	public function setUserName ($val){
		$this->username = $val;
	}

	public function setPlan1 ($val){
		$this->plan1 = $val;
	}

	public function setPlan2 ($val){
		$this->plan2 = $val;
	}

	public function setPlan3 ($val){
		$this->plan3 = $val;
	}

	public function setPlan4 ($val){
		$this->plan4 = $val;
	}

	public function setPlan5 ($val){
		$this->plan5 = $val;
	}


	public function getUserName (){
		return $this->username;
	}

	public function getPlan1 (){
		return $this->plan1;
	}

	public function getPlan2 (){
		return $this->plan2;
	}

	public function getPlan3 (){
		return $this->plan3;
	}

	public function getPlan4 (){
		return $this->plan4;
	}

	public function getPlan5 (){
		return $this->plan5;
	}

}

?>