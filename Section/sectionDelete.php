<?php
    require "../controller/db_config.php";

       $section_id = $_GET['section_id'];
       $updateQry = "UPDATE sections SET active_status =0 WHERE id='{$section_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Deleted";
       }else{
        $message = "Delete Unsuccessful";
       }

       header("location: ../Section/section.php? msg={$message}");