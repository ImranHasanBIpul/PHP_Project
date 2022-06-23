<?php
    require "../controller/db_config.php";

       $banner_id = $_GET['service_id'];
       $updateQry = "UPDATE services SET active_status =0 WHERE id='{$service_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Deleted";
       }else{
        $message = "Delete Unsuccessful";
       }

       header("location: ../banner/services.php? msg={$message}");