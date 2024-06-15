<?php


$conn = mysqli_connect("localhost","root","","saffire");

if(!$conn){
    echo "errro";
}

$sql = "select * from course";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo "error ";
    exit;
}

?>

<?php 

while($row = mysqli_fetch_assoc($result)){
?>
<p> <?php echo $row['courseId'] ?></p>
<p> <?php echo $row['course_name'] ?></p>

<?php
}
?>