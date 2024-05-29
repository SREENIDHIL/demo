<!DOCTYPE html>
<html>
  <head>  
<link rel="stylesheet" href="../1.css">
<!-- <link rel="import" href="sidebar.html"> -->
<link href="https://fonts.google.com/icons?icon.style=Sharp&icon.set=Material+Icons+Sharp">
<div class="row float-right">
  <div class="col-md-1 userlogin">
      <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-md " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#696747;">
              AP19110010272                            </button>
          <form action="dropdown.php" method="POST">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <span class="material-icons-sharp">arrow_drop_down</span>
                  <button class="dropdown-item" type="submit" id="dropmen" name="dropmen" value="changepsw">Settings</button>
                  <button class="dropdown-item" type="submit" id="dropmen" name="dropmen" value="getout">Logout</button>

              </div>
          </form>
      </div>
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

    <div class="att">
        <table id="sch" class="attendence">

            <tbody>
                <tr class="sche" style="background-color: #696747;">
                    <th>Date</th>
                    <th> Test No</th>
                </tr>
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
  <!-- <script>
    $(function() {
        function groupTable($rows, startIndex, total) {
            if (total === 0) {
                return;
            }
            var i, currentIndex = startIndex,
                count = 1,
                lst = [];
            var tds = $rows.find('td:eq(' + currentIndex + ')');
            var ctrl = $(tds[0]);
            lst.push($rows[0]);
            for (i = 1; i <= tds.length; i++) {
                if (ctrl.text() == $(tds[i]).text()) {
                    count++;
                    $(tds[i]).addClass('deleted');
                    lst.push($rows[i]);
                } else {
                    if (count > 1) {
                        ctrl.attr('rowspan', count);
                        groupTable($(lst), startIndex + 1, total - 1)
                    }
                    count = 1;
                    lst = [];
                    ctrl = $(tds[i]);
                    lst.push($rows[i]);
                }
            }
        }

        groupTable($('table tr:has(td)'), 0, 3);
        $('table .deleted').remove();
    });
</script> -->
</body>
  </html>