<?php
require("php_class/convert.php");
require("php_class/convertHelper.php");

//if(isset($_GET["id"]))
//{
	$id;
	$title = $_POST["title"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$agerange = $_POST["agerange"];
	$homeTelNum = $_POST["homeTelNum"];
	$officeTelNum = $_POST["officeTelNum"];
	$mobileTelNum = $_POST["mobileTelNum"];
	$email = $_POST["email"];
	$postcode = $_POST["postcode"];
	$address = $_POST["address"];
	$county = $_POST["county"];
	$city = $_POST["city"];
	$country = $_POST["country"];
	$altarCallResponse = $_POST["altarCallResponse"];
	$prayerPoints = $_POST["prayerPoints"];
	$regDate = $_POST["regDate"];
	
	$c1 = new Convert($title,$firstname,$lastname,$agerange,$homeTelNum,$officeTelNum,$mobileTelNum,$email,$postcode,$address,$county,$city,$country,$altarCallResponse,$prayerPoints,$regDate);
	
	$ch = new convertHelper();
	$result = $ch->insertConvert($c1);
	if($result)
	{
		echo "true";
	}else{echo "false";}
//}

//header("data_input.php");
?>