<?php
class Training{
	function getuser($username,$usertype){
		if($usertype=="user"){
		return "Welcome".$username.".Your User Type is User";
		}else{
		return "Welcome".$username.".Your User Type is Admin";
		}
	}
		function getCGPA($cgpa){
		$name="Mohd Syafiq";
		$course="Bachelor in Science Computer (Software Engineering)";
		$cgpa=2.0;
		if($cgpa==4.0){
			$grade="High Distinction";
			}else if($cgpa>=3.33&& $cgpa<=3.99){
			$grade="Distinction";
			}else if($cgpa>=2.67&& $cgpa<=3.32){
			$grade="Credit";
			}else if($cgpa>=2.00&& $cgpa<=2.66){
			$grade="Pass";
			}else if($cgpa>=1.99){
			$grade="Failed";
		}else{
		    $grade=null;
			}
		if($grade==null){
			echo"Please Enter the correct CGPA";
		}else{
			echo "Welcome ".$name.".<br />You have enroll ".$course.".<br /> Based on your CGPA(".$cgpa."),your grade is ".$grade;
		}
	}


function calculateGSTService($item1,$item2,$gst,$service){
	$grandtotal=(($item1+$item2)+($item1+$item2)*($gst+$service));
	return $grandtotal;
}
}
//create an object
$train=new Training();
//show object properties
echo $train->getuser("superadmin","user").'<br>';
echo $train->getCGPA(3.0).'<br>';
echo $train->calculateGSTService(1000.0,5000.00,0.06,0.10);
?>