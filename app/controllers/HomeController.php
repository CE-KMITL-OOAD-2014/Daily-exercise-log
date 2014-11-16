<?php
class HomeController extends BaseController{

	public function logIn()
	{
		$credential = Input::only('username', 'password'); 
		if (Auth::attempt($credential)) {
			return Redirect::intended('index2');
		}
		return Redirect::to('/');
	}


	public function logOut()
	{
		Auth::logout();
		return Redirect::to('/') ;	
	}

	public function register(){
		$Member = new Member;
		$MemberRepo = new MemberInterface;
		$Member->setusername(Input::get('username'));
		$Member->setpassword(Hash::make(Input::get('password')));
		$Member->setphone(Input::get('phone'));
		$Member->setfacebook(Input::get('facebook'));
		$MemberRepo->saveRepository($Member);
		return Redirect::to('/');
	}

	public function comment(){
		$Comment = new addcomment;
		$CommentRepo = new CommentInterface;
		$Comment->setusername(Input::get('username'));
		$Comment->setcomment(Input::get('comment'));
		$CommentRepo->saveRepository($Comment);
		return Redirect::to('index2');
	}

	public function plan(){
		// var_dump(Input::all());
		// exit();
		$Plan = new addplan;
		$PlanRepo = new PlanInterface;
		$Plan->setusername(Input::get('username'));
		$Plan->setplan1(Input::get('plan1'));
		$Plan->setplan2(Input::get('plan2'));
		$Plan->setplan3(Input::get('plan3'));
		$Plan->setplan4(Input::get('plan4'));
		$Plan->setplan5(Input::get('plan5'));
		$PlanRepo->saveRepository($Plan);
		return Redirect::to('profile');
	}

}

?>