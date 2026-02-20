<?php
$login = false;
$loginError = '';
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';
if (isset($_POST['sub'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "username : $username - or password was";
  //echo $password;

  echo "  Not found in database";
  if ($username == "" or $password == "") {
    $loginError = "Please Enter username and password";
    header('Location:\PET_ADOPTION/login_and_signup/login.php? Error with the database ');
    exit();
  }

  $sql2 = "SELECT * FROM users WHERE username like '$username'; ";
  $result = mysqli_query($conn,$sql2);
  $numRows = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

  if ($numRows == 1) {
      if ($password == $data['password']) {
        $login = true;
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['userID'] = $data['user_id'];
        echo "successfull";
        header('Location:\PET_ADOPTION/Dashboard/userpanel.php? ');
        exit();
      } else{
        echo "<h1> USER DOESN'T Exists Or wrong Password</h1>";
}

}
}
?>