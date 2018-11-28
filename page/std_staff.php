<?php
include '../include/_header.php';
include '../operate/session.php';
include '../include/sub_header.php';
include '../config/open_connect.php';
?>

  <div class="page-content">
    <div class="row">
    <div class="col-md-2">
      <div class="sidebar content-box" style="display: block;">
              <ul class="nav">
                  <!-- Main menu -->
                  <li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  <li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                  <!-- <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li> -->
                  <!-- <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                  <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                  <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                  <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li> -->
                  <li class="submenu">
                       <a href="#">
                          <i class="glyphicon glyphicon-list"></i> Involvement
                          <span class="caret pull-right"></span>
                       </a>
                       <!-- Sub menu -->
                       <ul>
                          <li class="current"><a href="#">Student Labor Staff</a></li>
                          <li><a href="signup.html">Bonner Scholar</a></li>
                          <li><a href="staff.php">Staff</a></li>
                          <li><a href="signup.html">Service Learning Student</a></li>
                          <li><a href="signup.html">Faculty</a></li>
                          <li><a href="signup.html">Student Volunteer</a></li>
                          <li><a href="signup.html">Community Partner</a></li>
                      </ul>
                  </li>
              </ul>
           </div>
           <div style="margin-top:5px; margin-bottom:30px;">
               <button type="button" class="btn btn-lg btn-block btn-primary" id="stdLabStaffButton">Add Student</button>
             </div>

    </div>

    <!-- <div class="col-md-10" id="success_stripe">
      <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your entry has been successfully added.
      </div>
    </div> -->

    <div class="col-md-10">
      <form action="../operate/add_std_lab_staff.php" method="post" id="addForm">
      <div class="content-box-large">
        <div class="panel-heading">
              <div class="panel-title">ADD STUDENT LABOR STAFF</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>

          </div>
        <div class="panel-body">
          <fieldset>
            <div class="form-group">
              <label>First Name</label>
              <input class="form-control" name="first_name" placeholder="First Name" type="text"  style="color:#000000;">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" name="last_name" placeholder="Last Name" type="text" style="color:#000000;">
            </div>
            <div class="form-group">
              <label>Labor Position</label>
              <p>
              <select class="selectpicker" name="lab_pos">
                <option disabled selected value style="display:none"> -- select an option -- </option>
                <option>Primary</option>
                <option>Secondary</option>
              </select>
              </div>
              </p>
              <div class="form-group">
                <label>Role</label>
                <p>
                <select class="selectpicker" name="role">
                  <option disabled selected value style="display:none"> -- select an option -- </option>
                  <option>Program Manager</option>
                  <option>Team Member</option>
                  <option>Leadership</option>
                </select>
                </div>
                </p>
            </div>
          </fieldset>
          <div>
            <button type="submit" class="btn btn-primary" name="Add_Rec" id="addRecord">
              <i class="fa fa-save"></i>
              Add Student
            </button>
          </div>
        </div>
        </form>
      </div>

      <div class="col-md-10" style="float: right;">
        <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title">Student Labor Staff</div>

          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
          </div>
        </div>
          <div class="panel-body">
<?php
$sql_query = "SELECT * FROM std_lab_staff";
// $result = $link->query($sql);
?>
            <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Labor Position</th>
                      <th>Role</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  if ($result = mysqli_query($link, $sql_query )) {
                        while ($theRow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                          echo "<tr><td>".$theRow['First_Name'].
                          "</td><td>".$theRow['Last_Name'].
                          "</td><td>".$theRow['Labor_Pos'].
                          "</td><td>".$theRow['Role'].
                          "</td><td><a href='edit_std_staff.php?id=" . $theRow['Std_Staff_ID'] . "'>
                          <button class='btn btn-info btn-xs'>Edit</button></a></td>",
                          "<td><a href='del_std_staff.php?id=" . $theRow['Std_Staff_ID'] . "'
                          onClick=\"return confirm('Wait a minute! Sure about this?');\">
                          <button class='btn btn-danger btn-xs'>Delete</button></a></td></tr>\n";
                        }
                  }
                         else {
                            echo "No results found. Nothing to show!";
                        }
                  ?>
                  </tbody>
                </table>
          </div>
        </div>
      </div>

    </div>
  </div>

<script>
$("#stdLabStaffButton").click(function(){
        $("#addForm").toggle();
    });
</script>

<?php
include '../config/close_connect.php';
include '../include/_footer.php';
?>
