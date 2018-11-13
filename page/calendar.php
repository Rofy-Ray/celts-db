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
                <li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                <li class="current"><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                <!-- <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
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
                       <li><a href="signup.html">Bonner Scholar</a></li>
                       <li><a href="signup.html">Staff</a></li>
                       <li><a href="signup.html">Service Learning Student</a></li>
                       <li><a href="signup.html">Faculty</a></li>
                       <li><a href="signup.html">Student Volunteer</a></li>
                       <li><a href="signup.html">Community Partner</a></li>
                    </ul>
                </li>
            </ul>
         </div>
  </div>
  <div class="col-md-10">

        <div class="content-box-large">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2">
                <div id='external-events'>
                                  <h4>Draggable Events</h4>
                                  <div class='external-event'>Board Meeting</div>
                                  <div class='external-event'>Staff Meeting</div>
                                  <div class='external-event'>Labor Meeting</div>
                                  <div class='external-event'>Bonners Meeting</div>
                                  <div class='external-event'>Safety Drill</div>
                                  <div class='external-event'>My Event 6</div>
                                  <div class='external-event'>My Event 7</div>
                                  <div class='external-event'>My Event 8</div>
                                  <div class='external-event'>My Event 9</div>
                                  <div class='external-event'>My Event 10</div>
                                  <div class='external-event'>My Event 11</div>
                                  <div class='external-event'>My Event 12</div>
                                  <div class='external-event'>My Event 13</div>
                                  <div class='external-event'>My Event 14</div>
                                  <div class='external-event'>My Event 15</div>
                                  <p>
                                  <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                                  </p>
                                </div>
              </div>
              <div class="col-md-10">
                <div id='calendar'></div>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>
</div>

<?php include '../include/_footer.php'; ?>
