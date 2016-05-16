<?php

//class Middleware - design pattern Singleton : can be instantiate only once
class Middleware{
    
    private static $_instance = null; 
    
    private $messages = array(); //message pile
    
    private function __construct() {  
   }
 
   /**
    * create single instante if don't exist yet and return it
    * @param void
    * @return Singleton
    */
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new Middleware();  
     }
 
     return self::$_instance;
   }
   
   public function sendMessage($message){
        //$this->messages = $message; //add $message to the message pile
        View::MessageArea($message); //send message to the view to be display
    }
    
}

?>