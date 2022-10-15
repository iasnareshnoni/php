<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo " not connect successful";
}
else {
    echo "not Connected";
}

mysqli_select_db($con,'userdata');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "insert into userinfodata (name, email, mobile)
values('$name', '$email', '$mobile')";

mysqli_query($con, $query);

echo "$query";

header('location:index.php');


?>