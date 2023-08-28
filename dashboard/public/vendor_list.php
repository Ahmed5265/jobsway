<?php

$query = "select * from company";
$result = mysqli_query($con,$query);



?>


<div class="main-panel">

          <div class="content-wrapper">
          <a href="home.php?page=add_vendor.php" class="btn btn-primary">Add Vendor</a>
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
                
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Vendor List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          
                        <th> Id </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Location </th>
                          <th> contact no </th>
                          <th> Since </th>
                          <th> Description </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                        <tr>
                         
                          <td><?php echo $row["company_id"]?> </td>
                          <td> <?php echo $row["name"]?> </td>
                          <td> <?php echo $row["email"]?> </td>
                          <td> <?php echo $row["location"]?> </td>
                          <td> <?php echo $row["contact"]?> </td>
                          <td> <?php echo $row["since"]?> </td>
                          <td> <?php echo $row["description"]?> </td>
                         
                        </tr>
                        <?php
                                }
                                
                                ?>
                       
                         
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </nav>
              

             