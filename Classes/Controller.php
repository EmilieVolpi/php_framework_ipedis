<?php

require(dirname(__FILE__).'/Middleware.class.php');

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
    
    public function connectionForm(){
        if(!empty($_POST)){
            $gender = $_POST["gender"];
            $name = $_POST["name"];
            $return = $this->model->connectionForm($name, $gender);
            if($return == NULL){
                //error inserting data into database - error management to add
                echo("<script>console.log('error inserting data into database');</script>"); //write error in console
            }
            else{
                $message = $return;
                //call of Middleware for message processing
                $middleware = Middleware::getInstance();
                $middleware->sendMessage($message);
            }
        }
    }
}
?>