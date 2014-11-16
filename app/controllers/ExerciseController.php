<?php
class ExerciseController extends BaseController{

	public function exercise(){

		$temp = exerciseDBs::all();

		return  View::make('exercise')->with('id',$temp);
		
	}

	public function profile(){
		
		$temp = User::all();

		return  View::make('Profile')->with('id2',$temp);

	}

	public function viewcomment(){
		
		$temp = createcomment::all();

		return  View::make('viewcomment')->with('id3',$temp);

	}

	public function viewplan(){
		
		$temp = createplan::all();

		return  View::make('viewplan')->with('id4',$temp);

	}

}