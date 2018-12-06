<?php
include '../include/_header.php';
include '../operate/session.php';
include '../include/sub_header.php';
?>

  <div class="page-content">
    <div class="row">
    <div class="col-md-2">
      <div class="sidebar content-box" style="display: block;">
              <ul class="nav">
                  <!-- Main menu -->
                  <li class="current"><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
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
                          <li><a href="std_vol.php">Student Volunteer</a></li>
                          <li><a href="#">Community Partner</a></li>
                      </ul>
                  </li>
              </ul>
           </div>
    </div>
    <div class="col-md-10">
      <form action="../operate/add_event.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="content-box-large">
            <div class="panel-heading">
            <div class="panel-title">Add Upcoming Events</div>

            <div class="panel-options">
              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
          </div>
            <div class="panel-body">
              <fieldset>
                <div class="form-group">
                  <label>Event Name</label>
                  <input class="form-control" name="first_name" placeholder="Event Name" type="text"  style="color:#000000;">
                </div>
                <div class="form-group">
                  <label>Event Date</label>
                    <p>
                      <div class="bfh-datepicker" data-format="y-m-d" data-date="today"></div>
                    </p>
                  </div>
                <div class="form-group">
                  <label>Event Description</label>
                  <div>
                    <textarea class="form-control" placeholder="Type description here..." rows="3"></textarea>
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary" name="Add_Rec" id="addRecord">
                    <i class="fa fa-save"></i>
                    Add Event
                  </button>
                </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Student Managers</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>
              </div>
              <div class="content-box-large box-with-header">

                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
              <br /><br />
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Bonner Scholars</div>

              <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
              </div>
              </div>
              <div class="content-box-large box-with-header">

                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
              <br /><br />
            </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="row">
        <div class="col-md-12 panel-warning">
          <div class="content-box-large">
          <div class="content-box-header panel-heading">
            <div class="panel-title ">ADD ANNOUNCEMENT</div>

          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
          </div>
          </div>
          <div class="panel-body">
            <textarea id="bootstrap-editor" class="form-control" placeholder="Type announcement here..." rows="3" style="width:100%;height:200px;"></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-primary" name="Add_Rec" id="addRecord">
              <i class="fa fa-save"></i>
              Add Announcement
            </button>
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

<?php include '../include/_footer.php'; ?>
