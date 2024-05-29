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
      <li><a href="home.php" >Home</a></li>
      <li><a href="mentors_list.php">Mentor's List</a></li>
      <li><a href="mentor_mapping.php">Mentor Mapping</a></li>
      <li><a href="mentor_feedback.php">Mentor Feedback</a></li>
      <li><a href="student_details.php">Student Details</a></li>
    </ul>
  </div>

    <div class="att">
                        

        <ul class="nav" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <a class="nav-link  active show" id="Techincal-tab" data-toggle="tab" href="#Techincal" role="tab" aria-controls="Techincal" aria-selected="true">Techincal</a>
            </li>
            <li class="nav-item " role="presentation">
                <a class="nav-link " id="Domain-tab" data-toggle="tab" href="#Domain" role="tab" aria-controls="Domain" aria-selected="false">Domain</a>
            </li>
            <li class="nav-item " role="presentation">
                <a class="nav-link " id="Aptitude-tab" data-toggle="tab" href="#Aptitude" role="tab" aria-controls="Aptitude" aria-selected="false">Aptitude</a>
            </li>
        </ul>
        <table class="attendence">

            <tbody>
                <tr class="text-center text-light" style="background-color: #696747;">
                    <th>Week</th>
                    <th>Weekly Attendence</th>
                    <th>Date</th>
                    <th>Attendence</th>
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