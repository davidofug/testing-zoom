<?php

require_once dirname(__DIR__).'/config.php';
//$this: Is a php keyword that helps you to access the methods and properties of a class.
//A variable in the class is called a property
//A function in a class is called a method.

class Init {
    private $db; //Property
    private $server;
    private $uname;
    private $pwd; //Not accessible outside the class
    protected $variable = 'Something'; //Not accessible outside the class

    //Constructor
    function __construct($database, $server, $uname, $pwd) {
        $this->db = $database;
        $this->server = $server;
        $this->uname = $uname;
        $this->pwd = $pwd;
        
    }

    public function connect(){
        return $this->uname.'@'.$this->server.':'.$this->pwd; 
    }
}
$init = new Init(DB_NAME, SERVER, USER, PASSWORD);
/* $init = new Init(DB_NAME, SERVER, USER, PASSWORD); //Instantiating: Is the process of creating an object from a class
echo $init->connect();
echo "\n"; */