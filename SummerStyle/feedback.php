<?php 

if(isset($_POST['submit']))  {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

   $query = "insert into feedback(name,email,msg) ";
   $query .="values ('$name', '$email','$msg')";

   $result = mysqli_query($connection, $query);

   if(!$result) {

       die('Query Failed' . mysqli_error($connection));

   }   
   else{
    $msg = "Feedback Send Faild";
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
    header("refresh:1; url= git.php");
} 
}
?>