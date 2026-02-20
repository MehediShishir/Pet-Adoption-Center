<?php
$login = false;
$loginError = '';
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';
if(isset($_POST['sub'])){
   
  $userid = $_POST['userid'];
  $review = $_POST['review'];


  if($userid == "" || $review == "" ){
    header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
     
    die();

  }






  $sql4 = "select * from users where user_id = $userid;";
  $result4 = mysqli_query($conn,$sql4);
  $numRows2 = mysqli_num_rows($result4);

  if($numRows2 != 1 ){
      echo"Pet ID not found in the database";
      header('Location:\PET_ADOPTION/Dashboard/error.php?Error  ');
       
      die();

  } 

  $sql = "insert into review (user_id,Com) values('$userid','$review');";
  $result = mysqli_query($conn,$sql);
  if($result){
      echo "Review Written Successfully";
      header('Location:\PET_ADOPTION/Dashboard/userpanel.php?Successfull  ');
  }else{
      die(mysqli_error($conn));
  }
  
}
?>