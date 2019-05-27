<?php 

 include_once 'connectdb.php';
 session_start();

if ( $_SESSION['role'] != "Admin" AND $_SESSION['role'] != "User" ) {
     
     header('location:index.php');
 }

if ($_SESSION['role'] == 'Admin' ) {
 include_once 'header.php';
    
    } else {
    
    include_once 'headeruser.php';
}


//when click on update password button, we get out values from user into variables

$matched = "<p collow='yellow'>hello</p>";

if (isset($_POST['btnupdate'])) {
    
    $oldpassword_txt = $_POST['txtoldpass'];
    $newpassword_txt = $_POST['txtnewpass'];
    $confpassword_txt = $_POST['txtconfpass'];
    
    //echo $oldpassword_txt . "-" . $newpassword_txt . "-" . $confpassword_txt;


//using or select query we get out database record according to useremail
    
    $email = $_SESSION['useremail'];
    $select = $pdo -> prepare("select * from tbl_user where useremail='$email'") ;
    
    $select -> execute();
    $row = $select -> fetch(PDO::FETCH_ASSOC);
    
    $useremail_db =  $row['useremail'];
    $userpassword_db = $row['password'];
    

//we compare user input and database values
    
    if ($oldpassword_txt == $userpassword_db) {
        
         if ($newpassword_txt == $confpassword_txt ){
             
             $update = $pdo -> prepare("update tbl_user set password=:pass where useremail=:email");
             
             $update -> bindParam(':pass', $confpassword_txt);
             $update -> bindParam(':email', $email);
             
             if($update->execute()) {
                 echo '
            
                    <script type="text/javascript">
                    jQuery(function validation() {
                    
                    swal({
                          title: "Good Job !!!! ",
                          text: "Your Password is Update Successfully",
                          icon: "success",
                          button: "Ok!",
                        });
                    
                    });
                    
                </script>
                        ';
             } else {
                 echo '
            
                    <script type="text/javascript">
                    jQuery(function validation() {
                    
                    swal({
                          title: "Error !! ",
                          text: "Querry Fail",
                          icon: "error",
                          button: "Ok!",
                        });
                    
                    });
                    
                </script>
                        ';
             }
             
         } else {
             
             echo '
            
                    <script type="text/javascript">
                    jQuery(function validation() {
                    
                    swal({
                          title: "Oopps !",
                          text: "Your new password and confirm password do not match.",
                          icon: "warning",
                          button: "Ok!",
                        });
                    
                    });
                    
                </script>
                        ';
         }
        
    } else {
        
        echo '
            
                    <script type="text/javascript">
                    jQuery(function validation() {
                    
                    swal({
                          title: "Warning ...... ! ",
                          text: "Your Password is Wrong Please Fill Right Password",
                          icon: "warning",
                          button: "Ok!",
                        });
                    
                    });
                    
                </script>
                        ';
    }
    

//if values mathched, then we run update query 
    
    }

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Admin Dashboard) -->
    <section class="content-header">
      <h1>
        Change Password
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change password form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Old Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtoldpass" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtnewpass" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtconfpass" required>
                </div>
                
                
              </div>
              <!-- /.box-body -->
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
              </div>
            </form>
            
            <?php echo $matched; ?>
            
            
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 

    include_once 'footer.php';

?>