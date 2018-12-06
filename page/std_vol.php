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
                          <li><a href="std_staff.php">Student Labor Staff</a></li>
                          <li><a href="#">Bonner Scholar</a></li>
                          <li><a href="staff.php">Staff</a></li>
                          <li><a href="#">Service Learning Student</a></li>
                          <li><a href="#">Faculty</a></li>
                          <li class="current"><a href="#">Student Volunteer</a></li>
                          <li><a href="#">Community Partner</a></li>
                      </ul>
                  </li>
              </ul>
           </div>
           <div style="margin-top:5px; margin-bottom:30px;">
               <button type="button" class="btn btn-lg btn-block btn-primary" id="staffButton">Add Volunteer</button>
             </div>
           <div style="margin-top:5px; margin-bottom:30px;">
               <button type="button" class="btn btn-lg btn-block btn-primary" id="timeButton">Record Time</button>
             </div>
    </div>

    <div class="col-md-10">
      <form action="../operate/add_std_vol.php" method="post" id="addForm">
      <div class="content-box-large">
        <div class="panel-heading">
              <div class="panel-title">ADD STUDENT VOLUNTEER</div>

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
              <label>Program</label>
              <p>
              <select class="selectpicker" name="prog">
                <?php
                $sql = "SELECT Prog_ID, Prog_Name FROM programs";
                if ($result = mysqli_query($link, $sql)) {
                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<option disabled selected value style='display:none'> -- select an option -- </option>";
                    echo "<option value='" . $row['Prog_ID'] . "'>".$row['Prog_Name']."</option>";
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
              <i class="fa fa-save"></i>
              Add Student Volunteer
            </button>
          </div>
        </div>
        </form>
      </div>

      <div class="col-md-10" style="float: right;">
      <div class="content-box-large">
        <div class="panel-heading">
        <div class="panel-title">Student Volunteers</div>
      </div>
        <div class="panel-body">
<?php
$sql_query = "SELECT * FROM std_vol";
// $result = $link->query($sql);
?>
          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
          <thead>
            <tr>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>VOLUNTEERED WITH</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result = mysqli_query($link, $sql_query )) {
                  while ($theRow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $sql_query_2 = "SELECT Prog_Name from programs WHERE Prog_ID =" .$theRow['Prog_ID']."";
                    $result_2 = mysqli_query($link, $sql_query_2);
                    $theRow_2 = mysqli_fetch_array($result_2, MYSQLI_ASSOC);
                    echo "<tr><td>".$theRow['First_Name'].
                    "</td><td>".$theRow['Last_Name'].
                    "</td><td>".$theRow_2['Prog_Name'].
                    "</td><td style='text-align: center;'><a href='edit_std_vol.php?id=" . $theRow['Std_Vol_ID'] . "'>
                    <span class='glyphicon glyphicon-pencil'></a></td>",
                    "<td style='text-align: center;'><a href='../operate/del_std_vol.php?id=" . $theRow['Std_Vol_ID'] . "'
                    onClick=\"return confirm('Wait a minute! Sure about this?');\">
                    <span class='glyphicon glyphicon-trash'></span></a></td></tr>\n";
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

<!-- <?php

?> -->

      <div class="col-md-10" style="float: right;">
        <form action="../operate/add_time.php" method="post" id="timeForm">
        <div class="content-box-large">
          <div class="panel-heading">
                <div class="panel-title">VOLUNTEER TIME SHEET</div>

                <div class="panel-options">
                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>

            </div>
          <div class="panel-body">
            <fieldset>
              <div class="form-group">
                <label>Volunteer First Name</label>
                <p>
                <select class="selectpicker" name="vol_first_name">
                  <?php
                  $sql_query = "SELECT Std_Vol_ID, First_Name FROM std_vol";
                  if ($result = mysqli_query($link, $sql_query )) {
                        while ($theRow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  echo "<option disabled selected value style='display:none'> -- select first name -- </option>";
                  echo "<option value='" . $theRow['Std_Vol_ID'] . "'>" . $theRow['First_Name'] . "</option>";
                    }
                      }
                  ?>
                </select>
                </div>
                </p>
                <div class="form-group">
                  <label>Volunteer Last Name</label>
                  <p>
                  <select class="selectpicker" name="vol_last_name">
                    <?php
                    $sql_query = "SELECT Std_Vol_ID, Last_Name FROM std_vol";
                    if ($result = mysqli_query($link, $sql_query )) {
                          while ($theRow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<option disabled selected value style='display:none'> -- select last name -- </option>";
                    echo "<option value='" . $theRow['Std_Vol_ID'] . "'>" . $theRow['Last_Name'] . "</option>";
                      }
                        }
                    ?>
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
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                      echo "<option disabled selected value style='display:none'> -- select program -- </option>";
                      echo "<option value='" . $row['Prog_ID'] . "'>".$row['Prog_Name']."</option>";
                      }
                  }
                  ?>
                </select>
                </div>
                </p>
                <div class="form-group">
                  <label>Volunteer Date</label>
                    <p>
                      <div class="bfh-datepicker" data-format="y-m-d" data-date="today"></div>
                    </p>
                  </div>
                <div class="form-group">
                  <label>Volunteer Time</label>
                    <p>
                      <div class="bfh-timepicker" data-mode="12h"></div>
                    </p>
                </div>
            </fieldset>
            </div>
              <button type="submit" class="btn btn-primary" name="Add_Rec" id="addRecord">
                <i class="fa fa-save"></i>
                Clock It
              </button>
            </div>
          </div>
          </form>
        </div>

    </div>
  </div>

</div>

<script>
$("#staffButton").click(function(){
        $("#addForm").toggle();
    });
$("#timeButton").click(function(){
        $("#timeForm").toggle();
    });
</script>

<?php
include '../config/close_connect.php';
include '../include/_footer.php';
?>
