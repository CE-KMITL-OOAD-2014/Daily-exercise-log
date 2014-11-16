<?php

class MemberInterface {


// control Member
  public function saveRepository($Member){
        $temp = User::where('username','=',$Member->getusername())->get();
        if(count($temp)==0){
           $temp = new User;
           $temp->id = $Member->getid();
           $temp->username = $Member->getusername();
           $temp->password = $Member->getpassword();     
           $temp->phone = $Member->getphone();  
           $temp->facebook = $Member->getfacebook();  


           $temp->save();
          return $temp;
            
        }else{
           echo "Username already exists!";
        }
    }



}