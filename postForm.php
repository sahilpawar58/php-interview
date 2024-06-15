<?php

$conn = mysqli_connect("localhost","root","","saffire");

if(!$conn){
    echo "error";
    exit;
}

$json_data = file_get_contents('php://input');

// Decode the JSON data into a PHP associative array
$data = json_decode($json_data, true);

$name = $data['name'];
$username = $data['username'];
$password = $data['password'];
$courseid = $data['courseid'];

$sql = "Insert into student (name,username,passwords,courseid) values ('$name','$username','$password','$courseid')";

if(mysqli_query($conn,$sql)){
    echo "done";
    mysqli_close($conn);
    exit;
}

echo "errrrorr";

mysqli_close($conn);

