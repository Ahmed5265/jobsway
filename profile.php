<?php include 'header_pages.php';
  
    
    if(isset($_SESSION['id']) && isset($_SESSION['emm']))
    {
   
     
    } else{

      echo "<script>
       window.location.href='index.php';
    </script>";
    }

?>

<?php include 'header.php';?>

<?php

$idd = $_SESSION['id'];

$sql = "SELECT * FROM `user` WHERE user_id = $idd";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
 {

   while ($rowss = mysqli_fetch_assoc($result))
     
   { 
   


?>

   
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Profile Details</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Profile Details</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Team Details Area Wrapper ==-->
    <section class="team-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="team-details-wrap">
              <div class="team-details-info">
                <!-- <div class="thumb">
                  <img src="assets/img/team/details1.jpg" width="130" height="130" alt="Image-HasTech">
                </div> -->
                <div class="content ">
                  <h4 class="title"><?php echo $rowss['name'];?>(<?php echo $rowss['first_name'];?> <?php echo $rowss['last_name'];?>)</h4>
                  <h5 class="sub-title"><?php echo $rowss['profession'];?></h5>
                  <h6 ><?php echo $rowss['email'];?></h6>
                  <ul class="info-list">
                    <li><i class="icofont-location-pin"></i> <?php echo $rowss['city'];?> ,Pakistan</li>
                    <li><i class="icofont-phone"></i>+92 <?php echo $rowss['contact'];?></li>
                  </ul>
                </div>
              </div>
              <!-- <div class="team-details-btn">
                <button type="button" class="btn-theme">Download Resume</button>
              </div> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="team-details-item">
              <div class="content">
                <h4 class="title">Personal Detail</h4>
                <p class="desc"><?php echo $rowss['personal_biodata'];?></p>
              </div>
              <div class="candidate-details-wrap">
                <h4 class="content-title">Education</h4>
                <div class="candidate-details-content">
                  <div class="content-item">
                    <h4 class="title"><?php echo $rowss['education'];?> <span>//</span> <span>2015 - 2018</span></h4>
   
   
                  </div>
                </div>
              </div>
              <div class="candidate-details-wrap">
                <h4 class="content-title">Work & Experience</h4>
                <div class="candidate-details-content">
                  <div class="content-item">
                    <h4 class="title">Computer Operator <span>//</span> <span>2020 - 2023</span></h4>
                    <h5 class="sub-title">Sanguine Skincare Ltd.</h5>
                    <p class="desc">It is a long established fact that a reader will be distracted the readable content of a page when looking atits layout the point of using is that has moreo less normal a distribution letters content publishing packages web page editors.</p>
                  </div>
                </div>
              </div>
              <div class="content-list-wrap">
                <div class="content mb--0">
                  <h4 class="title">Professional Skills</h4>
                  <ul class="team-details-list mb--0">
                    <li><i class="icofont-check"></i> Web application Design</li>
                    <li><i class="icofont-check"></i> User Interface (UI) design</li>
                    <li><i class="icofont-check"></i> Mobile Application Design</li>
                    <li><i class="icofont-check"></i> Landing Page Design</li>
                    <li><i class="icofont-check"></i> Web Interface Design</li>
                    <li><i class="icofont-check"></i> Interaction Design</li>
                    <li><i class="icofont-check"></i> User Experience</li>
                    <li><i class="icofont-check"></i> Graphic Design</li>
                    <li><i class="icofont-check"></i> Branding & Identity</li>
                    <li><i class="icofont-check"></i> Project Planning</li>
                    <li><i class="icofont-check"></i> Prototyping</li>
                    <li><i class="icofont-check"></i> Problem Solving</li>
                  </ul>
                </div>
                <div class="content mb--0">
                  <h4 class="title">Software Skills</h4>
                  <ul class="team-details-list mb--0">
                    <li><i class="icofont-check"></i> Adobe Photoshop</li>
                    <li><i class="icofont-check"></i> Adobe Illustrator</li>
                    <li><i class="icofont-check"></i> Adobe XD</li>
                    <li><i class="icofont-check"></i> Figma</li>
                    <li><i class="icofont-check"></i> Sketch</li>
                    <li><i class="icofont-check"></i> InVision Studio</li>
                    <li><i class="icofont-check"></i> UXPin</li>
                    <li><i class="icofont-check"></i> MockFlow</li>
                    <li><i class="icofont-check"></i> Balsamiq</li>
                    <li><i class="icofont-check"></i> Microsoft Word</li>
                    <li><i class="icofont-check"></i> Microsoft Excel</li>
                    <li><i class="icofont-check"></i> Microsoft PowerPoint</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="team-sidebar">
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Information</h3>
                </div>
                <div class="summery-info">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="table-name">Category</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['profession'];?></td>
                      </tr>
                      <tr>
                        <td class="table-name">Offered Salary</td>
                        <td class="dotted">:</td>
                        <td>Rs.50000 / Monthly</td>
                      </tr>
                      <tr>
                        <td class="table-name">Experience</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['experience_years'];?></td>
                      </tr>
                      <tr>
                        <td class="table-name">Language</td>
                        <td class="dotted">:</td>
                        <td>English, Urdu</td>
                      </tr>
                      <tr>
                        <td class="table-name">Age</td>
                        <td class="dotted">:</td>
                        <td>22 Years</td>
                      </tr>
                      <tr>
                        <td class="table-name">Date Of Birth</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['date_of_birth'];?></td>
                      </tr>
                      <tr>
                        <td class="table-name">Status</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['martial_status'];?></td>
                      </tr>
                      <tr>
                        <td class="table-name">Gender</td>
                        <td class="dotted">:</td>
                        <td>Male</td>
                      </tr>
                      <tr>
                        <td class="table-name">Qualification</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['education'];?></td>
                      </tr>
                      <tr>
                        <td class="table-name">Level</td>
                        <td class="dotted">:</td>
                        <td><?php echo $rowss['career_level'];?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Share With</h3>
                </div>
                <div class="social-icons">
                  <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="icofont-facebook"></i></a>
                  <a href="https://twitter.com" target="_blank" rel="noopener"><i class="icofont-twitter"></i></a>
                  <a href="https://www.skype.com" target="_blank" rel="noopener"><i class="icofont-skype"></i></a>
                  <a href="https://www.pinterest.com" target="_blank" rel="noopener"><i class="icofont-pinterest"></i></a>
                  <a href="https://dribbble.com/" target="_blank" rel="noopener"><i class="icofont-dribbble"></i></a>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Details Area Wrapper ==-->
  </main>
  <?php }}?>
  <?php include'footer.php';?>