<?php
	$states=array("Selangor","Johor","Kedah","Melaka","Perak","Perlis","Kelantan","Terengganu","Pulau Pinang","Pahang","Sabah","Sarawak","Kuala Lumpur","Labuan","Putrajaya");

	$ibunegeri=array("Shah Alam","Johor Baharu","Alor Star","Bandar Melaka","Ipoh","Kangar","Kota Bahru","Kuala Terengganu","Gorgetown","Kuantan","Kota Kinabalu","Kuching","Sarawak","Kuala Lumpur","Labuan","Putrajaya");

	$shtnme=array("SGR","JHR","KDH","KTN","MLK","NSN","PHG","PRK","PLS","PNG","SBH","SWK","TRG");

	$num=0;
		do{
			echo"<table border='1' cellspacing='0' cellpadding='0'>";
			echo"<tr><td width=100px>".$states[$num]."</td><td width=100px>".$ibunegeri[$num]."</td><td width=100px>".$shtnme[$num]."</td></tr>";
			$num++;
		}while($num<=14);
			echo "</table>";
		
?>