<?php
//CRUD
require_once dirname(__DIR__).'/init.php';
/* echo dirname(dirname(__DIR__));
echo "\n";
echo dirname(__DIR__).'/config.php';
echo "\n";

echo __DIR__;
echo "\n";
echo dirname(__DIR__);
echo "\n"; */

class User {
    public $name = '';
    public $username ='';
    public $email = '';
    public $password = '';

    function add() {
        $connection = $init->connect();
        if($connection) {
            //INSERT INTO 
            //mysql_query() VALUES()
        }
    
    }

    function get(){

    }

    function update(){

    }

    function delete(){

    }
}

new User();