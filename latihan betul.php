<?php
<html>
<style>
	table.textbold td{
	font-weight:bold;
}
	</style>

class states
{
	function getstate()
	{
	return array(array("name"=>"Selangor","city"=>"Shah Alam","short"=>"SGR"),
				 array("name"=>"Johor","city"=>"Johor Bahru","short"=>"JHR"),
				 array("name"=>"Kedah","city"=>"Alor Setar","short"=>"KDH"));
	}
}

$states=new states();
foreach($states->getstate()as $state)
	$bold="";
	
	

{echo"<table border=1><tr><td width=100px>".$state['name']."</td><td width=100px>".$state['city']."</td><td width=100px>".$state['short']."</td></tr>";

}

?>
</html>