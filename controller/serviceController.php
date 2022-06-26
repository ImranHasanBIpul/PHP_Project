<?php


//THis for services page code
if (isset($_POST['save_service'])) {

    $service_name = $_POST['service_name'];
    $icon_name = $_POST['icon_name'];
    $service_details = $_POST['service_details'];

    if(empty($service_name) || empty($icon_name) || empty($service_details)){
        echo "All Field are required";
    }else{
       $insertQry = "INSERT INTO services (service_name, icon_name, service_details) VALUES ('{$service_name}', '{$icon_name}', '{$service_details}')";
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
