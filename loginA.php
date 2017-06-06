<?php

include 'dbh.php';
 

 $uid = $_POST['uid'];
 $pwd = $_POST['pwd'];
 
 $sql = "SELECT * FROM user WHERE uid ='$uid' and pwd= '$pwd' ";
 $result = mysqli_query($connect,$sql);

 if(!$row = mysqli_fetch_assoc($result)) {
	 echo "Your Password or Username is incorrect.";
 }else{
	 echo "You are logged in.";
 }	 









?>