<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
  ob_start();
  // if(!isset($_SESSION['system'])){

    $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
    foreach($system as $k => $v){
      $_SESSION['system'][$k] = $v;
    }
  // }
  ob_end_flush();
?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fascinate">
<body class="hold-transition login-page bg-blue" id="login_bg">
  <div id="container_login">
  <h2 class="title"><b>INFOYEES MANAGEMENT SYSTEM</b></h2>
<div class="login-box">
  <div class="login-logo">
    <a href="#" class="text-white"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" id="login-card-form" style="left: 41px">
    <div class="card-body login-card-body" id="login-card-form">
      <form action="" id="login-form">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" required placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group mb-3">
          <label for="">Login As</label>
          <select name="login" id="" class="custom-select custom-select-sm">
            <option value="0">Employee</option>
            <option value="1">Supervisor</option>
            <option value="2">Admin</option>
          </select>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          </div>
          <!-- /.col -->
        
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
  $(document).ready(function(){
    $('#login-form').submit(function(e){
    e.preventDefault()
    start_load()
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'ajax.php?action=login',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
        end_load();

      },
      success:function(resp){
        if(resp == 1){
          location.href ='index.php?page=home';
        }else{
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          end_load();
        }
      }
    })
  })
  })
</script>
<?php include 'footer.php' ?>

</body>
</html>

<style>
  #login_bg {
    background-image: url(./assets/images/bg.jpg);
    background-repeat: no-repeat;
    background-size: 1600px 800px;
    background-position: center;
  }

  .title {
    font-family: Anton;
    font-size: 37px;
  background: -webkit-linear-gradient(#15315b, #c6004d);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  }

  #login-card-form {
    border-radius: 20px;
    border: solid;
  }

  button {
    background: linear-gradient(#15315b, #c6004d);
  }

  button:hover {
    padding-right: 10px;
    background: linear-gradient(#c6004d, #15315b);

  }

  #container_login {
    float: right;
    background-color: rgba(0,0,0,0.5);
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 50px;
    padding-bottom: 50px;
    border: solid white 2px;
    border-radius: 20px;
  }

</style>