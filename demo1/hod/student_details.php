<?php
require_once '../connect.php';

?>
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
      <li><a href="./home.php" >Home</a></li>
      <li><a href="./mentor_list.php">Mentor's List</a></li>
      <li><a href="./mentor_mapping.php">Mentor Mapping</a></li>
      <li><a href="./mentor_feedback.php">Mentor Feedback</a></li>
      <li><a href="./student_details.php">Student Details</a></li>
    </ul>
  </div>
  <div class="table">
    <table>
        <tr>
        <th>Name</th>
        <th>Roll No</th>
       
        <th>Mentor</th>
    </tr>
    <tbody>
    <?php
            $sql = " SELECT * FROM registered_users ";
            $result = $con->query($sql);
            $con->close();
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Username'];?></td>
                <td><?php echo $rows['MentorName'];?></td>

            </tr>
            <?php
                }
            ?>
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