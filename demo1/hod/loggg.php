<?php

// $username = $_POST ["username"];
// $password = $_POST ["password"];

// $credentials = array("sree:1234", "sree.eg:1234");

// foreach ($credentials as $credential){
//     $cred_user = explode(":", $credential)[0];
//     $cred_pass = explode(":", $credential)[1];

//     if ($username == $cred_user && $password == $cred_pass){
//         header('Location: ./home.php');
//         exit();
//     }
// }
// header('Location: log.php');
        // if (isset($_POST['submit']))
        //     { 
         $dbconn = mysqli_connect('localhost','root','','db_issm');    
        //include("config.php");
        session_start();
        $username=$_POST['Username'];
        $password = $_POST["Password"];
        $_SESSION['Username']=$username; 
        $query = mysqli_query( $dbconn, "SELECT * FROM hod WHERE Username='$username' and Password='$password'");
         if (mysqli_num_rows($query) != 0)
        // {
        //  echo "location.href='./home.php' ";   
        //   }
        //   else
        //   {
        // echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        // }
        {
            header('location:home.php');
          }
          else{
            header('location:forgot_password.php'); 
          }
        // }
?>
