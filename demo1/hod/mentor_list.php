<?php
require_once '../connect.php';

?>
<?php
	session_start();
	if(!ISSET($_SESSION['Username'])){
		header("location:hlogin.html");
	}
  $result = mysqli_query($con, "SELECT * FROM admin");
?>

<!DOCTYPE html>
<html>
  <head>  
<link rel="stylesheet" href="../1.css">
<link rel="import" href="../sidebar.html">
   <div class="dropdown">
    <button class="dropbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true">AP20110010804</button>
    <div class="drop-down-content">
      <a></a>
    </div>
   </div>
   <div class="image">
    <img src="../3.png" alt="responsive image">
  </div>
</head>
<body>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li><a href="./home.php" >Home</a></li>
      <li><a href="./mentor_list.php">Mentor's List</a></li>
      <li><a href="./mentor_mapping.php">Mentor Mapping</a></li>
      <li><a href="./mentor_feedback.php">Mentor Feedback</a></li>
      <li><a href="./student_details.php">Student Details</a></li>
    </ul>
  </div>
  <div id="s_table" class="panel panel-default">
				<div class=" panel-heading">	
					<div id="table_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="table_length"><label id="show">Show <select name="table_length" aria-controls="table" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="table_filter" class="dataTables_filter"><label id="sear" >Search:<input type="search" class="" placeholder="" aria-controls="table"></label></div>
            <table id="table" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="table_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Stream: activate to sort column descending" style="width: 300.6px;">Stream</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 300.6px;">Name</th>
							</thead>
							<tbody>
  
                
            <?php
            $sql = " SELECT * FROM admin ";
            $result = $con->query($sql);
            $con->close();
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['Username'];?></td>

            </tr>
            <?php
                }
            ?>
 
       
            </tbody>
						</table>
            <div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 10 of 1,643 entries</div>
            <div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><a class="paginate_button previous disabled" aria-controls="table" data-dt-idx="0" tabindex="0" id="table_previous">Previous</a><span><a class="paginate_button current" aria-controls="table" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="table" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="table" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="table" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="table" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="table" data-dt-idx="6" tabindex="0">165</a></span><a class="paginate_button next" aria-controls="table" data-dt-idx="7" tabindex="0" id="table_next">Next</a></div></div>
	        </div>
        </div>
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
  <script>
    $(document).ready(function () {
    $('#example').DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
    });
});
</script>
</body>
  </html>