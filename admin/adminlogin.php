<?php
session_start();
include('../partials/connect.php');
include('adminpartials/head.php');

if(isset($_POST['login'])){





$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from admins Where email='$email' AND password='$password'";
$results=$connect->query($sql);



$num=mysqli_num_rows($results);
if($num > 0) {
  $row=$results->fetch_assoc();
  $_SESSION['email']=$row['email'];
$_SESSION['password']=$row['password'];

if($email==$row['email'] AND $password==$row['password']){
  header('location: adminindex.php');
}
}
// }
else{
  header('location: adminlogin.php');
}






}



?>
<div class="row">

<div class="col-sm-4">
</div>

<div class="col-sm-4">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="login">Log in</button>
              </div>
              <!-- /.box-footer -->
            </form>

</div>

<div class="col-sm-4">
</div>







	</div>