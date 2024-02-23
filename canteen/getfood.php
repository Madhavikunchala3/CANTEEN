<?php
$conn = new mysqli("localhost","root","sdcweb","canteen");
$sql = "select *from foodie;";
$result = $conn->query($sql);
$dataArray = array();
while($row = $result->fetch_assoc()){
    $dataArray[] = $row;
}
header("Content-Type: application/json");
echo json_encode($dataArray);
?>