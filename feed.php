<?php

$conn = mysqli_connect("localhost","root","","saffire");

if(!$conn){
    echo "error";
}

$sql = "select * from posts";

$result = mysqli_query($conn,$sql);

$row = array();
while($rows = mysqli_fetch_assoc($result)){
    $row[] = $rows;
}

echo json_encode($row);

?>