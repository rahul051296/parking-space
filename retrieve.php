<?php
 $mydb = new mysqli('localhost','rahul','rahul','parking');
//$mydb = new mysqli("https://mysql.hostinger.in/","u225547267_nrs","34erdfcv","u225547267_nrs");
$sql = "SELECT * FROM CarEntry ORDER BY Slot;";

$result = $mydb->query($sql);
$data = array();
while($row = $result->fetch_assoc()){
	$data[$row['Slot']] = $row['Value'];
}
header('Content-Type:application/json');
echo json_encode($data);
?>