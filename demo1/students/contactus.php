<!DOCTYPE html>
<html>
  <head>  
<link rel="stylesheet" href="../1.css">
<link rel="import" href="sidebar.html">
   <div class="dropdown">
    <button class="dropbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true">AP20110010804</button>
    <div class="drop-down-content">
      <a></a>
    </div>
   </div>
</head>
<body>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div class="image">
    <img src="../3.png" alt="responsive image">
  </div>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li><a href="./home.php">Home</a></li>
      <li><a href="./attendence.php" >Attendence</a></li>
      <li><a href="./practice_menu.php" >Practice Menu</a></li>
      <li><a href="./test_result.php" >Test Result</a></li>
      <li><a href="./test_schedule.php" >Test Schedule</a></li>
      <li><a href="./revision_material.php">Revision Material</a></li>
      <li><a href="./companies_corner.php">Companies Corner</a></li>
      <li><a href="./alumini_feedback.php" >AlumniQP/Feedback</a></li>
      <li><a href="https://cr-cstests.srmap.edu.in/login" >Practice Test</a></li>
      <li><a href="./mentor_details.php" >Mentor Details</a></li>
      <li><a href="./contact_us.php" >Contact Us</a></li>
    </ul>
  </div>
 <div class="contact-box">
  <h3>Corporate Relations & Career Services</h3>
  <a  id="mail" href="mailto:crcs.hemldesk@srmap.edu.in">crcs.hemldesk@srmap.edu.in</a>
 </div>
  <script>
    
    var menuList = document.getElementById("menuList");
    menuList.style.maxHeight = "800px";

    function togglemenu() {
        if (menuList.style.maxHeight == "0px") {
            menuList.style.maxHeight = "800px";
        } else {
            menuList.style.maxHeight = "0px";
        }
    }
    
  </script>
</body>
  </html>