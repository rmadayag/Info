<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] == 1)
  $twhere = "  ";
?>



<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 2): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box">
                <h3><?php echo $conn->query("SELECT * FROM department_list ")->num_rows; ?></h3>

                <p>Total Departments</p>
              </div>
              <div class="icon">
                <i class="fa fa-th-list" id="icon"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box1">
                <h3><?php echo $conn->query("SELECT * FROM designation_list")->num_rows; ?></h3>

                <p>Total Designations</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt" id="icon1"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box2">
                <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" id="icon2"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box3">
                <h3><?php echo $conn->query("SELECT * FROM employee_list")->num_rows; ?></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-friends" id="icon3"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner" id="box4">
                <h3><?php echo $conn->query("SELECT * FROM evaluator_list")->num_rows; ?></h3>

                <p>Total Supervisors</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret" id="icon4"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner" id="box5">
                <h3><?php echo $conn->query("SELECT * FROM task_list")->num_rows; ?></h3>

                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks" id="icon5"></i>
              </div>
            </div>
          </div>
      </div>

<?php else: ?>
   <div class="col-12">
              <div class="card">
            <div class="card-body">
              <h1>Welcome <h2><?php echo $_SESSION['login_name'] ?>!</h2></h1>
               <img src="./assets/images/sup.png" width="470" height="430" style="margin-top: -250px;">
            </div>
          </div>
      </div>

      
          
<?php endif; ?>

<style>
   #icon {
    color: #33cc33;
  }

  #icon1 {
    color: #ff66ff;
  }

  #icon2 {
    color: #ffcc00;
  }

  #icon3 {
    color: #6600ff;
  }

  #icon4 {
    color: #009999;
  }

  #icon5{
    color: #ff6600;
  }

  #box {
    background-color: rgba(51, 204, 51, 0.5);
  }

  #box1 {
    background-color: rgba(255, 102, 255, 0.5);
  }

  #box2 {
    background-color: rgba(255, 204, 0, 0.5);
  }

  #box3 {
    background-color: rgba(102, 0, 255, 0.5);
  }

  #box4 {
    background-color: rgba(0, 153, 153, 0.5);
  }

  #box5 {
    background-color: rgba(255, 102, 0, 0.5);
  }

h1 {
  display: block;
  font-size: 7em;
  color:  #1F75FE;
  font-weight: bold;
  margin-left: 500px;
  margin-top: 90px;
}
  h2 {
  display: block;
  font-size: 3em;
  background: -webkit-linear-gradient(#15315b, #c6004d);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;
  text-align: center;
  margin-top: -30px;
  margin-left: 500px;
}
</style>