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
                          <li class="current"><a href="#">Laor Student Staff</a></li>
                          <li><a href="#">Bonner Scholar</a></li>
                          <li><a href="#">Staff</a></li>
                          <li><a href="#">Service Learning Student</a></li>
                          <li><a href="#">Faculty</a></li>
                          <li><a href="std_vol.php">Student Volunteer</a></li>
                          <li><a href="#">Community Partner</a></li>
                      </ul>
                  </li>
              </ul>
           </div>
           <div style="margin-top:5px; margin-bottom:30px;">
               <button type="button" class="btn btn-lg btn-block btn-primary" id="showFormButton">Add Student</button>
             </div>
    </div>

<?php
$id = $_GET['id'];
$sql_query = "SELECT * FROM std_lab_staff where Std_Staff_ID = $id";

if ($result = mysqli_query($link, $sql_query )) {
      while ($theRow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>

    <div class="col-md-10">
      <form action="../operate/update_std_lab_staff.php" method="post">
      <div class="content-box-large">
        <div class="panel-heading">
              <div class="panel-title">UPDATE LABOR STUDENT STAFF</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>

          </div>
        <div class="panel-body">
          <fieldset>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <label>First Name</label>
              <input class="form-control" name="first_name" placeholder="First Name" type="text"  style="color:#000000;"
              value="<?php echo $theRow["First_Name"];?>">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" name="last_name" placeholder="Last Name" type="text" style="color:#000000;"
              value="<?php echo $theRow["Last_Name"];?>">
            </div>
            <div class="form-group">
              <label>Labor Position</label>
              <p>
              <select class="selectpicker" name="lab_pos">
                <option disabled <?php if ($theRow["Labor_Pos"] == '') echo "selected";?> value style="display:none"> -- select an option -- </option>
                <option <?php if ($theRow["Labor_Pos"] == 'Primary') echo "selected";?>>Primary</option>
                <option <?php if ($theRow["Labor_Pos"] == 'Secondary') echo "selected";?>>Secondary</option>
              </select>
              </div>
              </p>
              <div class="form-group">
                <label>Role</label>
                <p>
                <select class="selectpicker" name="role">
                  <option disabled "<?php if ($theRow["Role"] == '') echo "selected";?>" value style="display:none"> -- select an option -- </option>
                  <option <?php if ($theRow["Role"] == 'Program Manager') echo "selected";?>>Program Manager</option>
                  <option <?php if ($theRow["Role"] == 'Team Member') echo "selected";?>>Team Member</option>
                  <option <?php if ($theRow["Role"] == 'Leadership') echo "selected";?>>Leadership</option>
                </select>
                </div>
                </p>
                <div class="form-group">
                  <label>Program</label>
                  <p>
                  <select class="selectpicker" name="prog">
                    <?php
                    $sql = "SELECT Prog_ID, Prog_Name FROM programs";
                    if ($result = mysqli_query($link, $sql)) {
                        echo "<option disabled selected value style='display:none'> -- select an option -- </option>\n";
                      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<option value='" . $row['Prog_ID'] . "' ";
                        if ($theRow['Prog_ID'] == $row['Prog_ID']) echo "selected";
                        echo ">".$row['Prog_Name']."</option>\n";
                        }
                    }
                    ?>
                  </select>
                  </div>
                  </p>
            </div>
          </fieldset>
          <div>
            <button type="submit" class="btn btn-primary" name="Add_Rec" id="addRecord">
              <i class="glyphicon glyphicon-refresh"></i>
              Update Record
            </button>
          </div>
        </div>
<?php
}
       }
?>
        </form>
      </div>

    </div>
  </div>

<script>
$("#showFormButton").click(function(){
        $("#addForm").toggle();
    });
</script>

<?php
include '../config/close_connect.php';
include '../include/_footer.php';
?>
