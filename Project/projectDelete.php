<?php
    require "../controller/db_config.php";

       $banner_id = $_GET['banner_id'];
       $updateQry = "UPDATE banners SET active_status =0 WHERE id='{$banner_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Deleted";
       }else{
        $message = "Delete Unsuccessful";
       }

       header("location: ../banner/bannar.php? msg={$message}");