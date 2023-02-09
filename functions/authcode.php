<?php
include('../includes/config.php');
include('myfunctions.php');

if (isset($_POST['register_btn'])) 
{
   $name = mysqli_real_escape_string($conn,$_POST['name']);
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);
   $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
   //validimi 

  if (empty($password) OR empty($name) OR empty($email) OR strlen($password)<8){
      $_SESSION['message'] = "Fields cannot be empty";
      header('Location: ../registration.php');
   } 
    else {
        //Check if email already exists
        $check_email_query = "SELECT email FROM users WHERE email='$email'";
        $check_email_query = mysqli_query ($conn, $check_email_query);

        if (mysqli_num_rows($check_email_query) > 0) {
          $_SESSION['message'] = "Email already exists";
          header('Location: ../registration.php');
        }
        else {
            if ($password == $cpassword) {
            //Insert user data
            $insert_query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
            $insert_query_run = mysqli_query($conn, $insert_query);

            if($insert_query_run) {
              $_SESSION['message'] = "Registered Successfully";
              header('Location:../login.php');
            }
            else{
              $_SESSION['message'] = "Something went wrong";
              header('Location: ../registration.php');
            }
          }
          else {
            $_SESSION['message'] = "Password do not match";
            header('Location: ../registration.php');
          }
        }
  }
}
elseif (isset($_POST['login_btn'])) 
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) 
    {
       $_SESSION['auth'] = true;

       $userdata = mysqli_fetch_array($login_query_run);
       $userid = $userdata ['id'];
       $username = $userdata['name'];
       $useremail = $userdata['email'];
       $role_id = $userdata['role_id'];

       $_SESSION['auth_user'] = [
        'user_id' => $userid,
        'name' => $username,
        'email' => $useremail
     ];
      
     $_SESSION['role_id'] = $role_id;

     if ($role_id == 1) 
     {
      redirect('../admin/index.php', "Welcome to Dashboard");
     }
     else
     {
      redirect('../index.php', "Logged In Successfully");
     }
       
    }
    else
    {
      redirect('../login.php', "Invalid Credentials");
    }
  }
 ?>