<?php
include("data_class.php");

$deletebookid=$_POST['deletebookid'];


$obj=new data();
$obj->setconnection();
$obj->deletebook($deletebookid);