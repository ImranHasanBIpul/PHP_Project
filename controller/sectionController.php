<?php
    require 'db_config.php';

    // $upload_status = false;
    // if (isset($_FILES["image"])) {
    //     $imgArry = $_FILES["image"];
    //     $fileName = $imgArry["name"];
    //     $tmpFileName = $imgArry["tmp_name"];

    //     $nameEx = explode('.', $fileName);
    //     $file_extension = strtolower(end($nameEx));
    //     $valid_ext = array('jpg', 'png', 'jpeg');

    //     $random_file_name = time().'.'.$file_extension;

    //     if (in_array($file_extension, $valid_ext)) {
    //         move_uploaded_file($tmpFileName, '../uploads/bannerimg/'.$random_file_name);
    //         $upload_status = true;
    //     }else{
    //         $message = $file_extension. "is not supported";
    //     }
    // } else {
    //     $message = "file not found";
    // }
    
if (isset($_POST['save_section'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $page_no = $_POST['page_no'];

    if(empty($title) || empty($sub_title) || empty($details) || empty($page_no)){
        echo "All Field are required";
    }else{
       $insertQry = "INSERT INTO sections (title, sub_title, details, page_no) VALUES ('{$title}', '{$sub_title}', '{$details}','{$page_no}')";
       $isSubmit = mysqli_query($dbCon, $insertQry);

       if($isSubmit == true) {
       $message = "Successfull";
       }else{
        $message = "Unsuccessfull";
       }

       header("location: ../Section/sectionAdd.php?msg={$message}");

    }
}

//THis for bannar update page code

if (isset($_POST['update_section'])) {
    $banner_id = $_POST['section_id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $page_no = $_POST['page_no'];

    if(empty($title) || empty($sub_title) || empty($details) || empty($page_no)){
        echo "All Field are required";
    }else{

        $updateQry = "UPDATE sections SET title = '{$title}',  sub_title = '{$sub_title}', details = '{$details}', section = '{$page_no}' WHERE id='{$section_id}'"; 
       
       $isSubmit = mysqli_query($dbCon, $updateQry);

       if($isSubmit == true) {
       $message = "section Update Successfull";
       }else{
        $message = "Update Unsuccessfull";
       }

       header("location: ../Section/sectionUpdate.php?section_id={$section_id} & msg={$message}");

    }
}





