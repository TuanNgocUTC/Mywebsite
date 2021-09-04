<?php

isset($_POST['username'])?$user=$_POST['username']:$user='';
isset($_POST['password'])?$pass=$_POST['password']:$pass='';
// $connect=
$sql="SELECT * FROM `user` WHERE `username`="
// $query=mysqli_query($connect,$sql);

?>