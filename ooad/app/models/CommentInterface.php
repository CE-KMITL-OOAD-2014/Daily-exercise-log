<?php

class CommentInterface {


  public function saveRepository($Comment){
        $temp = createcomment::where('username','=',$Comment->getusername())->get();
        if(count($temp)==0){
           $temp = new createcomment;
           $temp->username = $Comment->getusername(); 
           $temp->comment = $Comment->getcomment();  

           $temp->save();

          return $temp;
            

        }else{
           echo "Try again";

        }
    }



}

?>