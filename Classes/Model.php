<?php
class Model
{
    public $pdo;

    public function __construct(){
    }
    
    //connect pdo to database if wasn't done yet and return pdo
    public function getPdo(){
        if($this->pdo == NULL){
        
            /*$yaml = yaml_parse_file("/config.yml"); //essaie infructueu d'utiliser yaml, très long à installer sur xampp
            var_dump($yaml);*/
            
            $this->pdo = new PDO('mysql:dbname=frameworkipedis;host=localhost', 'root', 'root'); // à récupere dans YAML
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;  
    }
    
    //return data from  send to database
    public function query($statement){
        $res = $this->pdo->query($statement);
        $datas = $res->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
    
    //from connexion form, create object player, save in database and return player
    public function connectionForm($name, $gender){
        $currentTime = date("Y-m-d H:i:s");
        $player = new Player($name, $gender, $currentTime); //player creation
        //register player in database
        $this->getPdo();
        $count = $this->pdo->exec('INSERT INTO player(Name, Gender, ConnexionTime) values ("'.$name.'", "'.$gender.'", "'.$currentTime.'")');
        if($count == 0){
            return NULL;
        }
        else{
            //$datas = $this->query('SELECT MAX(id) FROM player');
            //var_dump($datas[0]->id);
            return $player->firstMessage();
        }
    }    
}

?>