<?php

class DB{

    private $connect;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "petAPI";

    function connect(){
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        mysqli_set_charset($this->connect, "utf8");
            if(mysqli_connect_errno() === 0){
                return $this->connect;
            }
            return false;
    }

}

?>