<?php

$con=mysqli_connect('localhost','root');

if($con){
   echo "connection successful";
}else{
 echo "no connection";
}

mysqli_select_db($con, 'form');

$Name=$_POST['name'];
$Email=$_POST['email'];
$Message=$_POST['message'];

$query = "insert form(Name,Email,Message)
values ('$Name','$Email', '$Message') ";

echo "$query";

mysqli_query($con, $query);

?>