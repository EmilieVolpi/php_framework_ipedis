<?php

class Player{
   
    private $name;
    private $gender;
    private $connexionTime;
    
    public function __construct($name, $gender, $connexionTime){
       $this->name = $name;
       $this->gender = $gender;
       $this->connexionTime = $connexionTime;
    }
    
    public function firstMessage(){
        $firstmessage = $this->connexionTime . " : ";
        if($this->gender == "male"){
            $firstmessage = $firstmessage. " Mister ".$this->name." is connected";
        }
        else{
            $firstmessage = $firstmessage. " Miss ".$this->name." is connected";
        }
        return $firstmessage;
    }
    
}

?>