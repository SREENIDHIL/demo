<?php
include('db_conn.php');
session_start();
$username=$_SESSION['username'];

$ses_sql=mysqli_query($db,"SELECT username FROM registered_users WHERE username='$username' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location: login.php");
}
?>