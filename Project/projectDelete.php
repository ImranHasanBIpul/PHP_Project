<?php
    require "../controller/db_config.php";

       $project_id = $_GET['project_id'];
       $updateQry = "UPDATE projects SET active_status =0 WHERE id='{$project_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Deleted";
       }else{
        $message = "Delete Unsuccessful";
       }

       header("location: ../Project/project.php? msg={$message}");