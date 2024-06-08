<?php
include("data_class.php");

$delteuser=$_POST['useriddelete'];


$obj=new data();
$obj->setconnection();
$obj->delteuserdata($delteuser);