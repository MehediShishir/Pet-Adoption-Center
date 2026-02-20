<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';


if(isset($_POST['sub'])){
    $username = trim(mysqli_real_escape_string($conn,$_POST['username']));
    $password = trim(mysqli_real_escape_string($conn,$_POST['password']));
    $user_type = trim(mysqli_real_escape_string($conn,$_POST['user_type']));
    $email = trim(mysqli_real_escape_string($conn,$_POST['email']));
    $phone_number = trim(mysqli_real_escape_string($conn,$_POST['phone_number']));

    if(empty($username) || empty($password) || empty($user_type) || empty($email) || empty($phone_number)){
        header('Location:\PET_ADOPTION/login_and_signup/signup.php? Please fill the space ');
        exit();
    }

	elseif (preg_match('/[0-9]/',$username)) {
		header('Location:\PET_ADOPTION/login_and_signup/signup.php? Please fill the space ');
		exit();
	}
    else{
        $statement = mysqli_stmt_init($conn);
        $check_database = "SELECT * from users Where username = ? OR email = ? ";
        if(!mysqli_stmt_prepare($statement, $check_database)){
            header('Location:\PET_ADOPTION/login_and_signup/signup.php? Error with the database ');
            exit();
        }
        else{
            //checking if signup user is existing
            mysqli_stmt_bind_param($statement,'ss',$username,$email);
            mysqli_stmt_execute($statement);
            $check_data = mysqli_stmt_get_result($statement);
            if($row_data = mysqli_fetch_assoc($check_data)){
                header('Location:\PET_ADOPTION/login_and_signup/signup.php? USERNAME OR EMAIL EXISTS ');
                exit();
            }else{
                //inserting into database
                $insert_into_database = "INSERT INTO USERS(username,password,user_type,email,phone_number) VALUES(?,?,?,?,?)";

                //checking if database has no error
                if(!mysqli_stmt_prepare($statement, $insert_into_database)){
                    header('Location:\PET_ADOPTION/login_and_signup/signup.php? Error with the INSERTING DATA ');
                    exit();
                }
                else{

					mysqli_stmt_bind_param($statement,'sssss',$username,$password ,$user_type,$email,$phone_number);
					mysqli_stmt_execute($statement);

					// take the user to login page

					header('Location:\PET_ADOPTION/Login_and_signup/login.php?WELCOME  ');
					exit();
                }

            }
        }
    }
}



?>