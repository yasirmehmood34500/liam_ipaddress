<?php session_start();
if (isset($_POST['login_btn'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($email == "admin@gmail.com" && $password == "123"){
        $_SESSION['login_sess']=1;
        echo "<script>window.location='index.php'</script>";
    }else{
        echo "<script>window.location='login.php?mess=invalid'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "inc/css_link.php" ?>
    </head>
    <body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page  section-image" data-color="orange" >
           
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Admin Login</h3>
                                </div>
                                <div class="card-body ">
                                    <?php if (isset($_GET['mess'])) { ?>
                                        <p style="text-align: center;"><?php echo $_GET['mess'] ?></p>
                                    <?php } ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" placeholder="Enter email" required="" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" required="" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" name="login_btn" class="btn btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
   
</body>
<?php include "inc/js_link.php" ?>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
        setTimeout(function() {
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>


</html>
