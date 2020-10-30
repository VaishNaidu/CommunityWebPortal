<?php
include('connect_db.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"select Name,Memid from members where Email='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['Name'];
$loggedin_id=$row['Memid'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: ETZUSERPORTAL.php");
}
?>