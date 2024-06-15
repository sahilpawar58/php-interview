<?php 

$conn = mysqli_connect("localhost","root","");

if(!$conn){
    echo "failed";
}

echo "successfull";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>
    <form method="post" action="upload.php">
    name<input id="name"> </input>
    username<input name="username" id="username"> </input>
    password<input name="password" id="password"> </input>
    courseId<select  type="select" name="courseid" id="courseid"> </select >
    <button type="submit">GO</button>
    </form>

    <script src='main.js'></script>
</body>
</html>