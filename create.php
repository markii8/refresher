<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
  </head>
<body>

    <?php include('message.php'); ?>
    
    <div class="row" style = "font-family:'Courier New', Courier, monospace">
        <div class="col-md-12">
            <div class="table">
                <div class="card-header">
                    <h4>Client Details</h4>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Client Name</label>
                                <input type="text" name="evidence" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                                <label>Type of Event</label>
                                <input type="text" name="appendix" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                <input class="form-control" name="dcustody" placeholder="MM/DD/YYYY" class="form-control" required/> 
                            </div> 
                            <div class="mb-3">
                                <label>Location</label>
                                <input type="text" name="branch" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                                <label>Additional Description: [kindly be discreet and certain]</label>
                                <input type="text" name="description" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                            <button type="submit" name="save_case" class="btn btn-primary">Save </button>
                            <a href="http://127.0.0.1:3000/index.html" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

        <script>
            $(document).ready(function(){
                var date_input=$('input[name="dcustody"]');
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
</body>
</html>