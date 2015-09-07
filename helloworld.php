<?php
	$first_name = "Martin";
	$last_name = "Põldäär";

	//trükib välja
	echo $first_name." ".$last_name;
?>

<br>

<?php

	$age = 22;
	//if( loogikatehe ){ tõene } else { väär }
	if($age < 18) {
		echo "alaealine";
	} else {
		echo "täisealine";
	
	}

?>

<br>

<?php
	
	for($i = 0; $i < $age; $i = $i + 1) {
		echo "palju, ";
		
		//see, mida korratakse {    } vahel
	}
	
	echo "õnne";
	
	
?>
<br>

<?php

	//kuupäev

	echo date("l j M Y");


?>