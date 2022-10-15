<?php include "db.php";

if(isset($_POST['submit']))  {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $user_role = "User";
    $address = $_POST['address'];

    $username = mysqli_real_escape_string($connection, $username );
    $email = mysqli_real_escape_string($connection, $email );
    $password = mysqli_real_escape_string($connection, $password );
    $phoneNumber = mysqli_real_escape_string($connection, $phoneNumber );
    $address = mysqli_real_escape_string($connection, $address );

    $password = md5($password);


   $query = "insert into register(username,email,password,phoneNumber,user_role,address) ";
   $query .="values ('{$username}', '{$email}','{$password}','{$phoneNumber}','{$user_role}', '{$address}' )";

   $result = mysqli_query($connection, $query);

   if(!$result) {

       die('Query Failed' . mysqli_error($connection));

   }
   else{
    $msg = "Sign Up Error";
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
    header("refresh:1; url=SignUp.html");
} 
}

?>