<?php
$login = false;
$loginError = '';
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';
if (isset($_POST['sub'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "username : $username - ";
  //echo $password;

  echo "  Not found in database";
  if ($username == "" or $password == "") {
    $loginError = "Please Enter username and password";
    header('Location:\PET_ADOPTION/login_and_signup/login.php? Check your input ');
    exit();
  }

  $sql2 = "SELECT * FROM users WHERE username like '$username'; ";
  $result = mysqli_query($conn,$sql2);
  $numRows = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

  if ($numRows == 1) {
      if ($password == $data['password']) {
        $login = true;
        $sql3 = "DELETE FROM users where username = '$username'; ";
        $result3 = mysqli_query($conn,$sql3);
        echo "successfull";
        header('Location:\PET_ADOPTION/pet_page/homepage.php? Successfully Deleted');
        exit();
      } else{
        echo "<h1> USER DOESN'T Exists</h1>";
}

}
}
?>