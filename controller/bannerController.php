<?php
    require 'db_config.php';

    // if (isset($_FILES["image"])) {
    //     echo "<pre>";
    //     print_r ($_FILES["image"]);
        
    //     echo "</pre>";
    // } else {
    //    echo "not found";
    // }
    $upload_status = false;
    if (isset($_FILES["image"])) {
        $imgArry = $_FILES["image"];
        $fileName = $imgArry["name"];
        $tmpFileName = $imgArry["tmp_name"];

        $nameEx = explode('.', $fileName);
        $file_extension = strtolower(end($nameEx));
        $valid_ext = array('jpg', 'png', 'jpeg');

        $random_file_name = time().'.'.$file_extension;

        if (in_array($file_extension, $valid_ext)) {
            move_uploaded_file($tmpFileName, '../uploads/bannerimg/'.$random_file_name);
            $upload_status = true;
        }else{
            $message = $file_extension. "is not supported";
        }
    } else {
        $message = "file not found";
    }
    
if (isset($_POST['save_banner'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];

    if(empty($title) || empty($sub_title) || empty($details) || $upload_status == false){
        echo "All Field are required";
    }else{
       $insertQry = "INSERT INTO banners (title, sub_title, details, image) VALUES ('{$title}', '{$sub_title}', '{$details}', '{$random_file_name}')";
       $isSubmit = mysqli_query($dbCon, $insertQry);

       if($isSubmit == true) {
       $message = "Successfull";
       }else{
        $message = "Unsuccessfull";
       }

       header("location: ../banner/bannarAdd.php?msg={$message}");

    }
}

//THis for bannar update page code

if (isset($_POST['update_banner'])) {
    $banner_id = $_POST['banner_id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];

    if(empty($title) || empty($sub_title) || empty($details)){
        echo "All Field are required";
    }else{

        $updateQry = "UPDATE banners SET title = '{$title}',  sub_title = '{$sub_title}', details = '{$details}' WHERE id='{$banner_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Banner Update Successfull";
       }else{
        $message = "Update Unsuccessfull";
       }

       header("location: ../banner/bannarUpdate.php?banner_id={$banner_id} & msg={$message}");

    }
}



//THis for services page code

if (isset($_POST['save_service'])) {
    $service_name = $_POST['service_name'];
    $icon_name = $_POST['icon_name'];
    $service_details = $_POST['service_details'];

    if(empty($service_name) || empty($icon_name) || empty($service_details)){
        echo "All Field are required";
    }else{
       $insertQry = "INSERT INTO banners (service_name, icon_name, service_details) VALUES ('{$service_name}', '{$icon_name}', '{$service_details}')";
       $isSubmit = mysqli_query($dbCon, $insertQry);

       if($isSubmit == true) {
       $message = "Successfull";
       }else{
        $message = "Unsuccessfull";
       }

       header("location: ../services/servicesAdd.php?msg={$message}");

    }
}

//THis for servces update page code

if (isset($_POST['update_service'])) {
    $banner_id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
    $icon_name = $_POST['icon_name'];
    $service_details = $_POST['service_details'];

    if(empty($service_name) || empty($icon_name) || empty($service_details)){
        echo "All Field are required";
    }else{

        $updateQry = "UPDATE services SET title = '{$service_name}',  sub_title = '{$icon_name}', details = '{$service_details}' WHERE id='{$service_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "Banner Update Successfull";
       }else{
        $message = "Update Unsuccessfull";
       }

       header("location: ../banner/servicesUpdate.php?service_id={$service_id} & msg={$message}");

    }
}



