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
                          <li><a href="signup.html">Staff</a></li>
                          <li><a href="signup.html">Service Learning Student</a></li>
                          <li><a href="signup.html">Faculty</a></li>
                          <li><a href="signup.html">Student Volunteer</a></li>
                          <li><a href="signup.html">Community Partner</a></li>
                      </ul>
                  </li>
              </ul>
           </div>
           <div style="margin-top:5px; margin-bottom:30px;">
               <button type="button" class="btn btn-lg btn-block btn-primary" id="showFormButton">Add Student</button>
             </div>
    </div>

    <div class="col-md-10">
      <form action="" id="addForm">
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
              <input class="form-control" placeholder="First Name" type="text">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input class="form-control" placeholder="Last Name" type="text">
            </div>
            <div class="form-group">
              <label>Select Role</label>
              <p>
              <!-- <div class="bfh-selectbox bfh-states" data-country="countries_states2"> -->
              <select class="selectpicker">
                <option disabled selected value style="display:none"> -- select an option -- </option>
                <option>Program Manager</option>
                <option>Team Member</option>
                <option>Leadership</option>
              </select>
              </div>
              </p>
            </div>
            <div class="form-group">
              <label>Password field</label>
              <input class="form-control" placeholder="Password" type="password" value="mypassword">
            </div>
            <div class="form-group">
              <label>Textarea</label>
              <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label>Readonly</label>
              <span class="form-control">Read only text</span>
            </div>
          </fieldset>
          <div>
            <div class="btn btn-primary">
              <i class="fa fa-save"></i>
              Submit
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

<script>
$("#showFormButton").click(function(){
        $("#addForm").toggle();
    });
</script>

<?php include '../include/_footer.php'; ?>
