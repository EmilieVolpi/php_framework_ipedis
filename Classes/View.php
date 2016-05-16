<?php
class View
{
    private $model;
    private $controller;
    
    public $surround = 'p'; //can be changed

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    //surrond $html by <p></p> ($surround) by default
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    
    //generic function to create input line
    public function input($type, $name, $value=''){
        $input = '<input type="'.$type.'" name="'.$name.'" value = "'.$value.'">';
        if($type=="checkbox" || $type=="radio"){
            $input = $input.' '.$value;
        }
        if($type=="text"){
            $input = $name.' : '.$input;
        }
        return $this->surround($input);
    }
    
    //function to create send button - can be generalised
    public function submit(){
        return '<button type="submit" class="btn btn-primary" data-toggle="button" id="send">Send</button>';
    }
    
    //inject $ message in the message area
    public function MessageArea($message){
        
        echo "<texarea>".$message."</textarea>";
        
        /* source code of manipulation od DOM doesn't work - to work again
        $doc = new DOMDocument();
        libxml_use_internal_errors(true); //to hide warnings
        $doc->strictErrorChecking = false;  
        $doc->validateOnParse = true;
        
        //creation message area
        $message_area = $doc->createElement("textarea", $message);
        $readonly_attribute = $doc->createAttribute("readonly");
        $message_area->appendChild($readonly_attribute);
        
        //injecting message area
        $doc->loadHTMLFile("index.php"); //file path has to be configurated
        $node = $doc->getElementById("message");
        //echo $node->nodeValue; //for testing
        //$node->appendChild($message_area);   
        $doc->saveHTML()
        //echo $doc->saveHTML();  //error : include dom in dom */
    }
}

?>