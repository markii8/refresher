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
    <link rel="stylesheet" href="style.css">

  <?php
session_start();
require 'dbcon.php';

?>
<div>
  <div class="showcase">
    <div class="navbar-top">
        <!--Header left-->
        <ul class="left">
            <li><a href="http://127.0.0.1:3000/index.html">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Reviews</a></li>
        </ul>
        <!--Header right-->

        <ul class="right">
            <li><a href="#"><i class="fa fa-user"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>
  </div>
  <div class="row-image">
    <main class="grid-container">
      <article class="featured">
        <img src="./Images/front12.png" alt="featured img">                
      </article>
    </main>
  </div>

</div>

  <div class="container mt-4">

    <?php include('message.php');?>
    
    <div class="row">
      <div class="col-md-16">
        <div class="card">
          <div class="card-header" >
            <h4>Client Details
              <a href="case-create.php"><button href="case-create.php" button type="button" id="button-add" class="btn btn-info btn-sm">New Client</button></a>   
              <a href="export.php"><button button type="button" id="button-export" class="btn btn-success btn-sm">Export <i class = "fa-solid fa-file-export"></i></button></a>                    
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">  
              <thead>
                <tr>
                  <th>Event</th>
                  <th>Client Name</th>
                  <th>Type of Event</th>                  
                  <th>Date</th>
                  <th>Location</th>
                  <th>Additional Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query = "SELECT * FROM ci_forms";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      foreach($query_run as $ci_forms)
                      {
                        
                        ?>
                        <tr>
                          <td><?= $ci_forms['id'];?></td>
                          <td><?= $ci_forms['evidence'];?></td>
                          <td><?= $ci_forms['appendix'];?></td>
                          <td><?= $ci_forms['dcustody'];?></td>
                          <td><?= $ci_forms['branch'];?></td>
                          <td><?= $ci_forms['description'];?></td> 
                          <td>
                            <!--<a href="case-view.php.?id=<?= $ci_forms['id'] ?>" class="btn btn-info btn-sm">View</a>-->
                            <a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
                            <form action="code.php" method="POST" class="d-inline">
                              <button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
                              <p id="demo"></p>
                            </form>
                          </td>                       
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