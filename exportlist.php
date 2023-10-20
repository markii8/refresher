<?php
session_start();
require 'dbcon.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styleforindex.css">
  </head>
  <body>
          <div class="container mt-4">

            <?php include('message.php');?>
            
            <div class="row">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h4>Case Details
                      <a href="export.php" class="btn btn-success float-end">Export <i class = "fa-solid fa-file-export"></i></a>                                                             
                    </h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped">  
                      <thead>
                        <tr>
                          <th>Case</th>
                          <th>Evidence</th>
                          <th>Appendix</th>
                          <th>Date </th>
                          <th>Location</th>
                          <th>Additional Description</th>                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $result = $con->query("SELECT * FROM ci_forms");                           
                            if($result->num_rows > 0)
                            {
                              while($row =$result->fetch_assoc())
                              {
                                
                                ?>
                                <tr>
                                  <td><?php echo $row['id'];?></td>
                                  <td><?php echo $row['evidence'];?></td>
                                  <td><?php echo $row['appendix'];?></td>
                                  <td><?php echo $row['dcustody'];?></td>
                                  <td><?php echo $row['branch'];?></td>
                                  <td><?php echo $row['description'];?></td>
                                                             
                                </tr>
                                <?php

                              }

                            }
                            else
                            {
                              echo "<h5> No Record Found </h5>";                       
                            }
                        ?>
                        
                        </tbody>
                      </div>
                    </table>
                  </div>

                </div>
              </div>
          </div>
          
    <script>
  function myFunction() {
  var txt;
  if (confirm("Are you sure you want to Delete?")) {

  } 
  document.getElementById("demo").innerHTML = txt;
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>