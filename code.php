<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_case']))
{
    $case_id = mysqli_real_escape_string($con,$_POST['delete_case']);

    $query = "DELETE FROM ci_forms WHERE id='$case_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: forms.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "not Deleted";
        header("Location: forms.php");
        exit(0);

    }


}

if(isset($_POST['update_case']))
{
    $case_id = mysqli_real_escape_string($con, $_POST['case_id']);
    $evidence = mysqli_real_escape_string($con, $_POST['evidence']);
    $appendix = mysqli_real_escape_string($con, $_POST['appendix']);
    $dcustody = mysqli_real_escape_string($con, $_POST['dcustody']);;
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE ci_forms SET evidence= '$evidence', appendix = '$appendix', dcustody = '$dcustody', 
                branch = '$branch', 
                description = '$description' WHERE id='$case_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: forms.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: forms.php");
        exit(0);
    }


}


if(isset($_POST['save_case']))
{
    $evidence = mysqli_real_escape_string($con, $_POST['evidence']);
    $appendix = mysqli_real_escape_string($con, $_POST['appendix']);
    $dcustody = mysqli_real_escape_string($con, $_POST['dcustody']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT INTO ci_forms (evidence,appendix,dcustody,branch,description) VALUES 
        ('$evidence','$appendix','$dcustody','$branch','$description')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: forms.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: forms.php");
        exit(0);
    }

}


?>