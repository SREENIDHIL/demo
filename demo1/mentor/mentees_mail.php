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
      <li><a href="./student_progress.php" >Student Progress</a></li>
      <li><a href="./practice_report.php" >Practice Report</a></li>
      <li><a href="./attendence.php" >Attendence</a></li>
      <li><a href="./test_schedule.php" >Test Schedule</a></li>
      <li><a href="./mentor_feedback.php" >Mentor Feedback</a></li>
      <li><a href="./search.php" >Search</a></li>
      <li><a href="./mentees_mail.php" >Mentees Mail</a></li>
      <li><a href="./companies_corner.php" >Companies corner</a></li>
    </ul>
  </div>
  <div class="table" id="t2">
    <table>
        <tr>
        <th>Mentor Name</th>
        <th>Mentor Email Id</th>
        <th>Contact Number</th>
    </tr>
    <tbody>
        <td>Mentor</td>
        <td>Description</td>
        <td>Time</td>
    </tbody>
    </table> 
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