<?php include 'header_pages.php';
  
    
    if(isset($_SESSION['id']) && isset($_SESSION['emm']))
    {
     $ir = $_SESSION['id'];
      if($_SESSION["check"] == 0){
        echo "<script>
        window.location.href='sign_process.php?ID=$ir';
     </script>";
      }
      else{

        echo "<script>
         window.location.href='index.php';
      </script>";
      }
    }

?>

<?php include 'header.php';?>

  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Login</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Pages</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Sign In</h4>
                </div>
                <form method="POST">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" name="eml" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" name="pass" type="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="remember-forgot-info">
                          <div class="remember">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Remember me</label>
                          </div>
                          <div class="forgot-password">
                            <a href="#/">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <button type="submit" name="btn" class="btn-theme">Sign In</button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="login-register-form-info">
                  <p>Don't you have an account? <a href="registration.html">Register</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>


<?php

  if(isset($_POST["btn"]))
{


   $email = $_POST["eml"];
   $Pass = $_POST["pass"];


   $sql = "SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$Pass."'";

   $result = mysqli_query($con,$sql);

   if(mysqli_num_rows($result) > 0)
    {

      while ($rowss = mysqli_fetch_assoc($result))
        
      { 
          $iidd = $rowss['user_id'];
          $email = $rowss['email'];
          $nm = $rowss['name'];
          $check = $rowss['is_update'];
      }
    
      $_SESSION["id"] = $iidd;
      $_SESSION["emm"] = $email;
      $_SESSION["nm"] = $nm;
      $_SESSION["check"] = $check;
        
        


if($check == 0){

  echo "<script>
   window.location.href='sign_process.php?ID=$iidd';
</script>"; 
}
else{
  echo "<script>
  alert('Login successfully');
   window.location.href='index.php';
</script>";
}

        
        

    }
    else{
        echo "<script>
        alert('Try Again!!');
    </script>"; 
    }

}

?>


  <?php include'footer.php';?>