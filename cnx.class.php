<?php
include 'config.php';

class Cnx {
    private $cn;
    public function __construct(){
        $cnx = new mysqli(host, user, password, dbname);
        // Check connection
        if ($cnx->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else 
        {
            $this->cn = $cnx;
            return $cnx;}
    }
    public function query_liste($query){
        $result = $this->cn->query($query);
        return ($result->num_rows > 0)?$result->fetch_all():'aucun resultat';
    }
    public function query($query){
        return $this->cn->query($query);
    }
}