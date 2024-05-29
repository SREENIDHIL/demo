<?php
require_once '../connect.php';

?>
<!DOCTYPE html>
<html>
  <head>  
<link rel="stylesheet" href="../1.css">
<link rel="import" href="sidebar.html">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
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
<div>
        <p id="ser">Search</p>
</div>
    
    <div>
       
        <div>
            <input type="text" class="input" id="1" placeholder="Select mentorname">  
            <input type="text" class="inpt" id="2" placeholder="Select feedback type">    
            <input type="text" class="inpu" id="3" placeholder="Select about type">
        </div>
    </div>
    <div class="export">
        <button  id="btn1" type="submit" value="Submit">Submit</button>
        <button  id="btn2" type="export" value="Export">Export</button><br><br>
    </div>

<div class="table">
<table>
    <tr>
    <th>Mentor</th>
    <th>Roll No</th>
    <th>Contacted Person</th>
    <th>Feedback About</th>
    <th>Description</th>
    <th>Time</th>
</tr>
<tbody>
    <td>Mentor</td>
    <td>Roll No</td>
    <td>Contacted Person</td>
    <td>Feedback About</td>
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