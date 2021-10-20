<?php

$conn = mysqli_connect("localhost", "root", "", "asg2 webprog");
$sql1 = "select * from user";

mysqli_query($conn,$sql1);
$data = mysqli_query($conn,$sql1);
while($row = mysqli_fetch_array($data)){
    echo $row['ID'];
    echo " ";
    echo $row['Name'];
    echo " ";
    echo $row['Email'];
    echo " ";
    echo $row['Address'];
    echo " ";
    echo"<br>";
}

mysqli_close($conn);

?>