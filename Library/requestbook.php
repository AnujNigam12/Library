<?php

include("data_class.php");

$userid=$_POST['userid'];
$bookid=$_POST['bookid'];





$obj=new data();
$obj->setconnection();
$obj->requestbook($userid,$bookid);

?>