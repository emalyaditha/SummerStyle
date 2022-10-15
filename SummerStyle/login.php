<?php  include "db.php"; ?>

<?php session_start(); ?>

<?php
if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];
$DB_username = "";

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
$password = md5($password);

$query = "select * from register where username ='{$username}' ";
$select_user_query = mysqli_query($connection, $query);
if(!$select_user_query){

    die("query failed". mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_user_query)) {

     $DB_username = $row['username'];
     $DB_email = $row['email'];
     $DB_password = $row['password'];
     $DB_user_role = $row['user_role'];

}if ($username === $DB_username && $password === $DB_password) {
    header("Location:admin/profile.php");

    $_SESSION['username'] = $DB_username;
    $_SESSION['email'] = $DB_email;
    $_SESSION['user_role'] = $DB_user_role;

}
else{
    $msg = "Login Failed";
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
    header("refresh:1; url=login.html");
}
}  

?>

