<?php include 'header_pages.php';
if(isset($_SESSION['emm']))
{
}
else
{
    echo "<script>
    window.location.href='index.php';
 </script>";
}
?>
<div id="toast-container" class="toast-bottom-right"><div class="toast toast-success" style="display: block;background-color: #0db02b"><div class="toast-message">Complete The Form First!!</div></div></div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


<?php include 'header.php';?>
<?php

$idd = $_GET['ID'];

$sql = "SELECT * FROM `user` WHERE user_id = $idd";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
 {

   while ($rowss = mysqli_fetch_assoc($result))
     
   { 
   


?>


<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Continue Process</h2>
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
    <!-- <section class="account-login-area"> -->
    
   <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="true"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" aria-expanded="true" ><span class="round-tab">3</span> <i>Step 3</i></a>
                                </li>

                            </ul>
                        </div>
        
                        <form role="form" class="login-box" method="post" enctype="multipart/form-data">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center">Step 1</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>User Name *</label> 
                                                <input class="form-control" disabled type="text" value="<?php echo $rowss['name'];?>"  > 
                                            </div>
                                            <div class="form-group">
                                                <label>First Name *</label> 
                                                <input class="form-control" type="text" value="" name="fname" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email  *</label> 
                                                <input class="form-control" disabled type="text" value="<?php echo $rowss['email'];?>"  placeholder=""> 
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name  *</label> 
                                                <input class="form-control" type="text" value="" name="lname" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Education *</label> 
                                                <select class="form-control" name="qua" id="">
                                                    <option disabled value="">~Select~</option>
                                                    <option value="Matriculation">Matriculation</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="high_school_diploma">High School Diploma</option>
    <option value="associate_degree">Associate's Degree</option>
    <option value="bachelor_degree">Bachelor's Degree</option>
    <option value="master_degree">Master's Degree</option>
    <option value="doctoral_degree">Doctoral Degree</option>
    <option value="professional_license">Professional License</option>
    <option value="certification">Certification</option>
    <option value="work_experience">Work Experience</option>
    <option value="communication_skills">Strong Communication Skills</option>
    <option value="leadership_skills">Leadership Skills</option>
    <option value="analytical_skills">Analytical Skills</option>
    <option value="problem_solving">Problem-Solving Abilities</option>
    <option value="technical_skills">Technical Skills</option>
    <option value="creativity">Creativity</option>
    <option value="teamwork">Teamwork</option>
    <option value="project_management">Project Management Skills</option>
    <option value="language_proficiency">Language Proficiency</option>
    <option value="physical_fitness">Physical Fitness</option>
    <option value="customer_service_experience">Customer Service Experience</option>
    <option value="sales_experience">Sales Experience</option>
    <option value="research_experience">Research Experience</option>
    <option value="data_analysis">Data Analysis Skills</option>
    <option value="programming_skills">Programming Skills</option>
    <option value="negotiation_skills">Negotiation Skills</option>
    <option value="time_management">Time Management</option>
    <option value="attention_to_detail">Attention to Detail</option>
    <option value="public_speaking">Public Speaking</option>
    <option value="adaptability">Adaptability</option>
    <option value="problem_identification">Problem Identification</option>
    <option value="team_leadership">Team Leadership</option>
    <option value="innovation">Innovation</option>
    <option value="financial_reporting">Financial Reporting</option>
    <option value="digital_marketing">Digital Marketing Skills</option>
    <option value="conflict_resolution">Conflict Resolution</option>
    <option value="presentation_skills">Presentation Skills</option>
    <option value="quality_assurance">Quality Assurance</option>
    <option value="project_coordination">Project Coordination</option>
    <option value="critical_thinking">Critical Thinking</option>
    <option value="networking_skills">Networking Skills</option>
    <option value="strategic_planning">Strategic Planning</option>
    <option value="customer_relationship_management">Customer Relationship Management (CRM)</option>
    <option value="health_and_safety_certification">Health and Safety Certification</option>
    <option value="creative_writing">Creative Writing</option>
    <option value="graphic_design">Graphic Design</option>
    <option value="knowledge_of_regulations">Knowledge of Industry Regulations</option>
    <option value="foreign_language_proficiency">Foreign Language Proficiency</option>
    <option value="teaching_experience">Teaching Experience</option>
    <option value="emotional_intelligence">Emotional Intelligence</option>
    <option value="strategic_thinking">Strategic Thinking</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Marital Status *</label> 
                                                <select class="form-control" name="status" id="">
                                                    <option disabled value="">~Select~</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="commit">Commited</option>
                                                    <option value="divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="text-center">Step 2</h4>
                                    <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Profession *</label> 
                                             <select class="form-control" name="prof" id="">
                                                    <option disabled value="">~Select~</option>
                                                    <option value="accountant">Accountant</option>
    <option value="architect">Architect</option>
    <option value="attorney">Attorney</option>
    <option value="baker">Baker</option>
    <option value="chef">Chef</option>
    <option value="civil-engineer">Civil Engineer</option>
    <option value="content-writer">Content Writer</option>
    <option value="data-analyst">Data Analyst</option>
    <option value="dentist">Dentist</option>
    <option value="doctor">Doctor</option>
    <option value="electrician">Electrician</option>
    <option value="financial-advisor">Financial Advisor</option>
    <option value="graphic-designer">Graphic Designer</option>
    <option value="hair-stylist">Hair Stylist</option>
    <option value="interior-designer">Interior Designer</option>
    <option value="journalist">Journalist</option>
    <option value="lawyer">Lawyer</option>
    <option value="marketing-manager">Marketing Manager</option>
    <option value="nurse">Nurse</option>
    <option value="photographer">Photographer</option>
    <option value="physical-therapist">Physical Therapist</option>
    <option value="plumber">Plumber</option>
    <option value="police-officer">Police Officer</option>
    <option value="project-manager">Project Manager</option>
    <option value="real-estate-agent">Real Estate Agent</option>
    <option value="registered-nurse">Registered Nurse</option>
    <option value="sales-representative">Sales Representative</option>
    <option value="software-developer">Software Developer</option>
    <option value="teacher">Teacher</option>
    <option value="veterinarian">Veterinarian</option>
    <option value="web-designer">Web Designer</option>
    <option value="account-manager">Account Manager</option>
    <option value="artist">Artist</option>
    <option value="barista">Barista</option>
    <option value="carpenter">Carpenter</option>
    <option value="copywriter">Copywriter</option>
    <option value="event-planner">Event Planner</option>
    <option value="fitness-trainer">Fitness Trainer</option>
    <option value="human-resources-manager">Human Resources Manager</option>
    <option value="makeup-artist">Makeup Artist</option>
    <option value="musician">Musician</option>
    <option value="personal-trainer">Personal Trainer</option>
    <option value="pharmacist">Pharmacist</option>
    <option value="product-manager">Product Manager</option>
    <option value="social-media-manager">Social Media Manager</option>
    <option value="speech-therapist">Speech Therapist</option>
    <option value="travel-agent">Travel Agent</option>
    <option value="ux-ui-designer">UX/UI Designer</option>
    <option value="video-editor">Video Editor</option>
    <option value="wedding-planner">Wedding Planner</option>
                                                </select> 
                                        </div>
                                    </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Career Level *</label> 
                                            <select class="form-control" name="level" id="">
                                                    <option disabled value="">~Select~</option>
                                                    <option value="expert">Expert</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="regular">Regular</option>
                                                    <option value="basic">Basic</option>
                                                </select>
                                        </div>
                                    </div>
                                         <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Experience Years *</label> 
                                            <select class="form-control" name="exp" id="">
                                                    <option disabled value="">~Select~</option>
                                                    <option value="single">Less then 6 Month</option>
                                                    <option value="married">< 1 year</option>
                                                    <option value="commit">< 2 year</option>
                                                    <option value="divorced">< 3 year</option>
                                                    <option value="divorced">more then 4 year</option>
                                                </select> 
                                        </div>
                                    </div>
                                    
                                    
                           
                                    
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address *</label> 
                                           <textarea name="add" id="" class="form-control" style="height: 10px;" rows="10"></textarea>
                                        </div>
                                    </div>
                                     
                                    </div>  
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="text-center">Step 3</h4>
                                     <div class="row">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City *</label> 
                                            <select class="form-control" name="city" id="">
                                            <option value="karachi">Karachi</option>
    <option value="lahore">Lahore</option>
    <option value="islamabad">Islamabad</option>
    <option value="rawalpindi">Rawalpindi</option>
    <option value="faisalabad">Faisalabad</option>
    <option value="multan">Multan</option>
    <option value="peshawar">Peshawar</option>
    <option value="quetta">Quetta</option>
    <option value="gujranwala">Gujranwala</option>
    <option value="sialkot">Sialkot</option>
    <option value="bahawalpur">Bahawalpur</option>
    <option value="abbottabad">Abbottabad</option>
    <option value="sargodha">Sargodha</option>
    <option value="sukkur">Sukkur</option>
    <option value="jhang">Jhang</option>
    <option value="sheikhupura">Sheikhupura</option>
    <option value="rahim-yar-khan">Rahim Yar Khan</option>
    <option value="gujrat">Gujrat</option>
    <option value="kasur">Kasur</option>
    <option value="mardan">Mardan</option>
    <option value="larkana">Larkana</option>
    <option value="sahiwal">Sahiwal</option>
    <option value="okara">Okara</option>
    <option value="wah-cantt">Wah Cantt</option>
    <option value="dera-ghazi-khan">Dera Ghazi Khan</option>
    <option value="mirpur-khas">Mirpur Khas</option>
    <option value="nawabshah">Nawabshah</option>
    <option value="mingora">Mingora</option>
    <option value="bannu">Bannu</option>
    <option value="kamoke">Kamoke</option>
    <option value="hafizabad">Hafizabad</option>
    <option value="kohat">Kohat</option>
    <option value="jacobabad">Jacobabad</option>
    <option value="mirpur">Mirpur</option>
    <option value="saddiqabad">Saddiqabad</option>
    <option value="gujranwala">Gujranwala</option>
    <option value="jhelum">Jhelum</option>
    <option value="dera-ismail-khan">Dera Ismail Khan</option>
    <option value="bhakkar">Bhakkar</option>
    <option value="chakwal">Chakwal</option>
    <option value="khairpur">Khairpur</option>
    <option value="haripur">Haripur</option>
    <option value="matiari">Matiari</option>
    <option value="nowshera">Nowshera</option>
    <option value="jalalpur-jattan">Jalalpur Jattan</option>
    <option value="dera-murad-jamali">Dera Murad Jamali</option>
                                                </select> 
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Postal Code *</label> 
                                            <input class="form-control" type="num" value="" name="postal" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth *</label> 
                                            <input class="form-control" type="date" value="" name="dob" placeholder=""> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Personal Information</label>  
                                            <textarea name="personal" class="form-control" id="" style="height: 10px;" rows="10"></textarea> 
                                        </div>
   </div>
                                  
                                       </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" name="btn" class="default-btn next-step">Finish</button></li>
                                    </ul>
                                </div>


                                <?php

                             if(isset($_POST["btn"]))
                             {
                                 $fname=$_POST["fname"];
                                 $lname = $_POST["lname"];
                                 $education = $_POST["qua"];
                                 $martial_status = $_POST["status"];
                                 $profession = $_POST["prof"];
                                 $level = $_POST["level"];
                                 $experience = $_POST["exp"];
                                 $address = $_POST["add"];
                                 $city = $_POST["city"];
                                 $postal = $_POST["postal"];
                                 $dob = $_POST["dob"];
                                 $personal = $_POST["personal"];
                                
                                $sql_update = "UPDATE `user`
                                SET
                                    `first_name` = $fname,
                                    `last_name` = $lname,
                                    `address` = $address,
                                    `city` = $city,
                                    `postal_code` = $postal,
                                    `profession` = $profession,
                                    `martial_status` = $martial_status,
                                    `career_level` = $level,
                                    `experience_years` = $experience,
                                    `education` = $education,
                                    `date_of_birth` = $dob,
                                    `personal_biodata` = $personal,
                                    `is_update` = 1,
                                     WHERE user_id = $idd";
                                
                                if( mysqli_query($con,$sql_update)){

                                    echo "<script>
                                       alert('registration successful!!');
                                       window.location.href='index.php';
                                      </script>";
                              
                                       }


                             }

                             ?>
                                  
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
  <?php }}?>

    <script>// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});


</script>

<style>@import url('https://fonts.googleapis.com/css?family=Roboto');

body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}

/*------------------------*/
input:focus,
button:focus,
.form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-control:disabled, .form-control[readonly]{
	background-color: #fff;
}
/*----------step-wizard------------*/
.d-flex{
	display: flex;
}
.justify-content-center{
	justify-content: center;
}
.align-items-center{
	align-items: center;
}

/*---------signup-step-------------*/
.bg-color{
	background-color: #333;
}
.signup-step-container{
	padding: 150px 0px;
	padding-bottom: 60px;
}




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
            position: relative;
    margin-bottom: 50px;
    text-align: right;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 50%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 15px;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
        background: #0db02b;
    color: #fff;
    border-color: #0db02b;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
	color: #0db02b;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
}



.wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
}
.wizard .nav-tabs > li a i{
	position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 20px;
}


.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}
.next-step{
	background-color: #0db02b;
    color: #fff;
}
.skip-btn{
	background-color: #cec12d;
}
.step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.term-check{
	font-size: 14px;
	font-weight: 400;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
}
.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.footer-link{
	margin-top: 30px;
}

.list-content{
	margin-bottom: 10px;
}
.list-content a{
	padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
	transform: rotate(180deg);
}
.list-content a i{
	text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
	padding: 10px;
}
.signup-logo-header .logo_area{
	width: 200px;
}
.signup-logo-header .nav > li{
	padding: 0;
}
.signup-logo-header .header-flex{
	display: flex;
	justify-content: center;
	align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}
/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}






@media (max-width: 767px){
	.sign-content h3{
		font-size: 40px;
	}
	.wizard .nav-tabs > li a i{
		display: none;
	}
	.signup-logo-header .navbar-toggle{
		margin: 0;
		margin-top: 8px;
	}
	.signup-logo-header .logo_area{
		margin-top: 0;
	}
	.signup-logo-header .header-flex{
		display: block;
	}
}
</style>