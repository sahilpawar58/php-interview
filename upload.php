<?php


$username = $_POST['username'];
$password = $_POST['password'];
$courseid = $_POST['courseid'];

$conn = mysqli_connect("localhost","root","","saffire");

if(!$conn){
    echo "erroorrr";
}

$query = "Insert into student (username,passwords,courseid) values ('$username','$password','$courseid')";

if(mysqli_query($conn,$query)){
    echo "Done";
}else{
    echo "brrr.";
}

mysqli_close($conn);

?>