<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';


if(isset($_POST['sub'])){
   
    $pet_id = $_POST['pet_id'];
    $provider_id = $_POST['provider_id'];
    $pet_name = $_POST['pet_name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $pet_type = $_POST['pet_type'];
    if($pet_id == "" || $provider_id == "" || $pet_name == "" || $breed == "" || $age == "" || $pet_type == ""){
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
    
    

    $sql2 = "update pets set pet_name = '$pet_name', pet_type = '$pet_type', breed = '$breed', age = '$age' WHERE pet_id = '$pet_id';";

    $sql3 = "select * from pets where pet_id = $pet_id;";

    $sql = "insert into history (user_id, pet_id, activity) values ('$provider_id','$pet_id','update');";

    $result3 = mysqli_query($conn,$sql3);
    $numRows = mysqli_num_rows($result3);

    if($numRows != 1){
        echo"Pet ID not found in the database";
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
    $result2 = mysqli_query($conn,$sql2);
    $result = mysqli_query($conn,$sql);

    if($result2){
        echo "Data Update successfully";
    }else{
        die(mysqli_error($conn));
    }
    if($result){
        echo "!!";
        header('Location:\PET_ADOPTION/Dashboard/userpanel.php?Successfull  ');
    }else{
        die(mysqli_error($conn));
    }
    
    
}

?>