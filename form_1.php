<?php
	//Jaimy Koster GD1B
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];

	$g = (int)$firstName;
	$l = (int)$lastName/100;

	$res = "";


	$bmi = $g/($l*$l);

	$bmis = round($bmi,1);

	if($bmi <18.5){
		$res = "ondergewicht";
	}
	elseif($bmi >=18.5 && $bmi <24.9){
		$res = "Normaal";
	}
	elseif($bmi >=25 &&  $bmi<29.9){
		$res = "overgewicht";
	}
	elseif($bmi >=30 && $bmi <34.9){
		$res = "obesitas 1";
	}
	elseif($bmi >=35 && $bmi <39.9){
		$res = "obesitas 2";
	}
	elseif($bmi >=40){
		$res = "obesitas 3";
	}

//	switch ($bmi) {
//		case <18.5:
//		$res = "obesitas 1";
//			break;	
//		case >=18.5:
//		case <24.9:
//		$res = "obesitas 1";;
//			break;
//		case >=25:
//		case <29.9:
//		$res = "obesitas 1";
//			break;
//		case >=30:
//		case <34.9:
//		$res = "obesitas 1";;
//			break;
//		case >=35:
//		case <39.9:
//		$res = "obesitas 1";;
//			break;
//		case >=40:
//		$res = "obesitas 1";;
//			break;
//	}





	echo "<h2>Your BMI calulation:</h2><h3> ";
	echo "You submitted the following information<br><br>";
	echo "Your Weight: <strong> $firstName kg </strong><br>";
	echo "Your Height: <strong> $l m </strong><br>";
	echo "Your BMI = $bmis<br>";
	echo "$res";
	echo "</h3>";
?>
