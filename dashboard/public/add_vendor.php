<?php include 'db-config.php'?>


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
             </div>

                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Vendor</h4>
                    <p class="card-description"> Add Vendor </p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Loaction</label>
                        <select class="form-control" name="loc" id="" >
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
                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact no</label>
                        <input type="num" value="92" maxlength="12" class="form-control" name="contact"  placeholder="Contact no" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Since</label>
                        <input type="month" class="form-control" name="since"  placeholder="Since" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" name="desc" id="exampleTextarea1" rows="4" placeholder="Description" required></textarea>
                      </div>
                      <button type="submit" name="btn" class="btn btn-primary mr-2">Submit</button>
                     
                    </form>
                  </div>
                  </div>
                  </div>
                

                  
<?php
if(isset($_POST["btn"]))
{



    $name = $_POST["name"];
    $email = $_POST["email"];
    $since = $_POST["since"];
    $location = $_POST["loc"];
    $contact = $_POST["contact"];
    $description = $_POST["desc"];





    $sql = "insert into company(company_id,name,email,contact,since,location,description,Verified_by_admin,company_created_date_time) VALUES ('','$name','$email','$contact','$since','$location','$description','','')";

    
    if( mysqli_query($con,$sql)){

      echo "<script>
         alert('new vendor add successfully!!');
         window.location.href='?page=add_vendor.php';
        </script>";

         }
}
?>
           