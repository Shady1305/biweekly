<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Id_number = $_POST['Id_number'];

$Telephone = $_POST['Telephone'];
$Email = $_POST['Email'];

if(if(!empty($Firstname)&&!empty($Lastname)&&!empty($Id_number)&&!empty($Password)&&!empty($Email)))
echo " please fill in";
if (!preg_match("/^[A-Z]{1}+[A-Za-z]?/", $Fname))
	echo "Your name is invalid";

if (!preg_match("/^[A-Z]{1}+[A-Za-z]?/", $Lname))
	echo " <br> your last name is invalid";
	
if (!preg_match("/[0-9]{13}/", $Id_number))
	echo "  <br>Id number must be 13 digits";
	

	
if (!preg_match("/^0[0-9]{9}/", $Telephone))
	echo "  <br>telephone must be validated to ten digits";
	
	
if (!preg_match("/^[a-zA-Z0-9\-.]+@[a-zA-Z0-9\-]+.[a-zA-Z0-9\-.]+$/", Email))
	echo "Invalid email.try again";

?>