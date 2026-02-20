<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';


if(isset($_POST['sub'])){
   
    $pet_name = $_POST['pet_name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $pet_type = $_POST['pet_type'];
    $pet_provider = $_POST['provider_id'];
    if($pet_provider == "" || $pet_name == "" || $breed == "" || $age == "" || $pet_type == ""){
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
    
    $sql4 = "select * from users where user_id = $pet_provider;";
    $result4 = mysqli_query($conn,$sql4);
    $numRows2 = mysqli_num_rows($result4);

    if($numRows2 != 1 ){
        echo"Pet ID not found in the database";
        header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
         
        die();

    }
    

    $sql = "insert into pets (pet_name,breed,age,pet_type,pet_provider_id) values('$pet_name','$breed','$age','$pet_type',$pet_provider);";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
        header('Location:\PET_ADOPTION/Dashboard/userpanel.php?Successfull  ');
    }else{
        die(mysqli_error($conn));
    }
    
}

?>