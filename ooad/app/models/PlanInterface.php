<?php

class PlanInterface {


  public function saveRepository($Plan){
        $temp = createplan::where('username','=',$Plan->getusername())->get();
        if(count($temp)==0){
           $temp = new createplan;
           $temp->username = $Plan->getusername(); 
           $temp->plan1 = $Plan->getplan1(); 
           $temp->plan2 = $Plan->getplan2();
           $temp->plan3 = $Plan->getplan3();
           $temp->plan4 = $Plan->getplan4();
           $temp->plan5 = $Plan->getplan5(); 

           $temp->save();

          return $temp;
            

        }else{
           echo "Try again";

        }
    }



}

?>