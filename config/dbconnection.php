<?php
class Dbconnection{
public function getConnection(){
    $con = new mysqli("localhost","root","","krishibazar");
    if(!$con){
        $con->error;
    }
}
}
$conObj = new Dbconnection;
$conObj->getConnection();

?>