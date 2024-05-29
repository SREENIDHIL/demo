<!DOCTYPE html>
<html>
  <head>  
<link rel="stylesheet" href="../1.css">
<form action="login.php" method="POST">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <button class="dropdown-item" type="submit" id="dropmen" name="dropmen" value="changepsw">Settings</button>
      <button class="dropdown-item" type="submit" id="dropmen" name="dropmen" value="getout" >Logout</button>

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
      <li><a href="./mentor_list.php" >Mentor's List</a></li>
      <li><a href="./mentor_mapping.php" >Mentor Mapping</a></li>
      <li><a href="./mentor_feedback.php" >Mentor Feedback</a></li>
      <li><a href="./student_details.php" >Student Details</a></li>
    </ul>
  </div>
  <div class="announcement">
      <h2>Announcement</h2>
      <marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" style="font-size:15px;">
        Students should attend all the training program organised by the University, attendance will be viewed seriously.<br><br>
      The test schedule dates have been uploaded.
      <br>
      The test results have been uploaded.
      </marquee>
    
      <!-- <p id="scorehead"><strong> Your Skill Level</strong></p> -->
      <h2>Your Skill Result</h2>
        <ul class="list">
          <li>Above 90 Excellent</li>
          <li>Above 80 Very good</li>
          <li>Above 70 Good</li>
          <li>Above 60 Average</li>
        </ul>
  </div>
  <div class="atd">
    <h2><strong>Weekly Attendence </strong></h2>
    <table class="table">
        </thead>
        <tbody>
        </tbody>
        <p>NOTE:Students you may refer to the detailed attendance for further clarifications on above
    consolidated attendance, we have not considered Barclays attendance for computing weekly
    attendance. Also students are marked as “present” only if they have spent minimum of 80%
    time in the session.Students who have not met 80% in weekly attendance will not be allowed
    into placement process.</p>
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