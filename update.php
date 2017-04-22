<?php
$inputError = FALSE;
// Vefification
$A = returnCorrectedValue($_REQUEST["A"]);
$B = returnCorrectedValue($_REQUEST["B"]);
$C = returnCorrectedValue($_REQUEST["C"]);
$D = returnCorrectedValue($_REQUEST["D"]);
$slots = array('A','B','C','D');
$value = array($A,$B,$C,$D);

# if($inputError==FALSE){
# 	echo $A,$B,$C,$D;
# }

if($GLOBALS['inputError']==FALSE){
	# Opening connection to the database
	 $mydb = new mysqli('localhost','rahul','rahul','parking');
//	$mydb = new mysqli("http://mysql.hostinger.in/","u225547267_nrs","34erdfcv","u225547267_NRS");
	# Updating the values in the database
	for($i=0;$i<4;$i++){
		$sql = "UPDATE parking.CarEntry SET Value=$value[$i] WHERE Slot='$slots[$i]';";
		if($mydb->query($sql) == FALSE){
			echo "Updation failed";
		}
	}

	# Closing the database connection
	$mydb->close();
}

# Function for verifying the values passed
function returnCorrectedValue($x){
	if($x!=1 && $x !=0){
		echo "Error input";
		$GLOBALS['inputError'] = TRUE;
	} else{
		return ($x);
	}
}

?>