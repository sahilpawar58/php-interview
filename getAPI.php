<?php

$conn = mysqli_connect("localhost","root","","saffire");

if(!$conn){
    echo "errro";
}

$query = "select * from course";

$result = mysqli_query($conn,$query);

$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Convert data to JSON format
$json_data = json_encode($rows);

// Output JSON data
echo $json_data;

?>
