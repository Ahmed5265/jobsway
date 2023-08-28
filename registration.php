<?php include'header_pages.php';?>
<?php include'header.php';?>


<!--wrapper start-->
<div class="wrapper">

<!-- Main -->

<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Register Page</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.html">Home</a></li>
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
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Register Now</h4>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i> Job Seeker</button>
                  </li>
                  
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">
                    <form method="post">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="UserName" required>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="number" name="contact" placeholder="Phone" required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="password"  id="password" placeholder="Password" required onkeyup='check();'>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="password" name="pass" id="confirm_password" placeholder="Confirm Password" required onkeyup='check();'> 
                            
                            <span id='message'></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <div class="remember-forgot-info">
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="remember-forgot-info">
                              <div class="remember">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                
                                <label class="form-check-label" for="defaultCheck1">Accept our terms and conditions and privacy policy.</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" name="btn" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                
                </div>
                <div class="login-register-form-info">
                  <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>


<!-- main -->


<script>
//   var check = function() {
//   if (document.getElementById('password').value ==
//     document.getElementById('confirm_password').value) {
//     document.getElementById('message').style.color = 'green';
//     document.getElementById('message').innerHTML = 'Password Matched';
//   } else {
//     document.getElementById('message').style.color = 'red';
//     document.getElementById('message').innerHTML = 'Password Not Matched';
//   }
// }

// function myFunction() {
//   var x = document.getElementById("password");
//   var y = document.getElementById("confirm_password");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
//   if (y.type === "password") {
//     y.type = "text";
//   } else {
//     y.type = "password";
//   }
// }
</script>


<?php
if(isset($_POST["btn"]))
{



    $nmm = $_POST["name"];
    $emm = $_POST["email"];
    $cnn = $_POST["contact"];
    $pas = $_POST["pass"];





    $sql = "insert into user(user_id,name,email,contact,password) VALUES ('','$nmm','$emm','$cnn','$pas')";

    
    if( mysqli_query($con,$sql)){

      echo "<script>
         alert('registration successful!!');
         window.location.href='login.php';
        </script>";

         }
}
?>

<?php include 'footer.php';?>