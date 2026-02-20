<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';


if(isset($_POST['sub'])){
   
    $pet_id = $_POST['pet_id'];
    $pet_seeeker_id = $_POST['pet_seeeker_id'];
    if($pet_id == "" || $pet_seeeker_id == ""){
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
    $sql3 = "select * from pets where pet_id = $pet_id;";
    $result3 = mysqli_query($conn,$sql3);
    $numRows = mysqli_num_rows($result3);

    $sql4 = "select * from users where user_id = $pet_seeeker_id;";
    $result4 = mysqli_query($conn,$sql4);
    $numRows2 = mysqli_num_rows($result4);

    if($numRows != 1 || $numRows2 != 1 ){
        echo"Pet ID not found in the database";
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
        
    $sql2 = "delete from pets WHERE pet_id = '$pet_id';";
    $sql = "insert into history (user_id, pet_id, activity) values ('$pet_seeeker_id','$pet_id','adopt');";
    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);
    if($result){
        echo "Adopted successfully";
        header('Location:\PET_ADOPTION/Dashboard/userpanel.php?Successfull  ');
    }else{
        die(mysqli_error($conn));

    }
    if($result2){
        echo "!!";
        header('Location:\PET_ADOPTION/Dashboard/userpanel.php?Successfull  ');
    }else{
        die(mysqli_error($conn));
    }
    
    
}

?>