<?php 
session_start();


$info = (object)[];

//check if logged in
if(!isset($_SESSION['userid']))
{

	if(isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type != "login" )
	{
		
		$info->logged_in = false;
		echo json_encode($info);
		die;	
	}
	
}

require_once("classes/autoload.php");
$DB = new Database();

$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);

$Error ="";

//proccess the data
if(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "signup")
{
    //signup
    include("includes/signup_patient.php");
}elseif(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "login")
{
    //signup
    include("includes/login_patient.php");
}elseif(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "user_info")
{
    //signup
    include("includes/user_info_patient.php");
}elseif(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "signup1")
{
    //signup
    include("includes/signup_cabinet.php");
}elseif(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "login1")
{
    //signup
    include("includes/login_cabinet.php");
}elseif(isset($DATA_OBJ->data_type) &&  $DATA_OBJ->data_type == "user_info1")
{
    //signup
    include("includes/user_info_cabinet.php");
}
