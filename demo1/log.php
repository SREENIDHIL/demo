<?php  
// if(isset($_POST["submit"])){  
  
// if(!empty($_POST['Username']) && !empty($_POST['Password'])) {  
//     $username=$_POST['Username'];  
//     $password=$_POST['Password'];  
  
//     $con=mysql_connect('localhost','root','') or die(mysql_error());  
//     mysql_select_db('db_issm') or die("cannot select DB");  
  
//     $query=mysql_query("SELECT * FROM registered_users WHERE Username='".$username."' AND Password='".$password."'");  
//     $numrows=mysql_num_rows($query);  
//     if($numrows!=0)  
//     {  
//     while($row=mysql_fetch_assoc($query))  
//     {  
//     $dbusername=$row['Username'];  
//     $dbpassword=$row['Password'];  
//     }  
  
//     if($username == $dbUsername && $password == $dbPassword)  
//     {  
//     session_start();  
//     $_SESSION['sess_user']=$username;  
  
//     /* Redirect browser */  
//     header("Location: home.php");  
//     }  
//     } else {  
//     echo "Invalid username or password!";  
//     }  
  
// } else {  
//     echo "All fields are required!";  
// }  
// } 

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'db_issm');
if(isset($_POST['Username']) and isset($_POST['Password']))
{
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $s = "SELECT * from registered_users where Username = '$username' && Password = md5('$password')";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if($num != 1){
    header('location:home.php');
  }
  else{
    header('location:forgot_password.php'); 
  }
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width , initial-scale=1.0">
        <title>CR&CS Portal</title>
        <link rel="stylesheet" href="style.css">
    <script src="login.js"></script>
    <script>document.addEventListener('contextmenu', event=>event.preventDefault());</script>
    </head>
    <body>
        <img src="3.png" class="img-fluid" alt="Responsive image">
        <div class="container-fluid">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Corporate Relations & Career Services</h2>
                    </div>
                    <div class="panel-body">
                        <form action="./students/home.php" id=panel-body method="submit" name="form" onsubmit="return validated()">
                            <div class="form-group" >
                                <label for="username"><b>Application Number/ Registration Number</b></label><br>
                                <input type="text" class="form-control" id="Username"  name="Username" placeholder="Enter Application Number/Registration Number" required><br><br>
                            </div>
                            <div class="form-group" >
                                <label for="exampleInputPassword1"><b>Password</b></label><br>
                                <input type="password" class="form-control"  id="Password" name="Password" placeholder="Password"><br><br>
                            </div>
                            <div class="text-center" >
                                <button type="submit" class="button1" name="login" id="login" value="submit">Submit</button><br><br>
                            </div>
                            <div class="text-center" style="margin-left:200px;" >
                                <button type="submit" class="button"  id="forgot" name="forgot" value="resetpsd">Forgot Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
