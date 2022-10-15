<!-- Head -->
<?php session_start(); ?>
<?php include "includes/db.php";?>
        <?php include "includes/admin_header.php";?>
        

<?php if(isset($_SESSION['username'])) {

     $username = $_SESSION['username'];

        $query = "select * from register where username = '{$username}'";
        $select_profile = mysqli_query($connection,$query);

        while($row = mysqli_fetch_array($select_profile)){
            
            $id = $row['ID'];
            $username = $row['username'];
            $email= $row['email'];
            $password = $row['password'];
            $phone_number= $row['phoneNumber'];
            $user_role = $row['user_role'];
            $address= $row['address'];

        }
}
?>
<?php 

        if(isset($_POST['update_profile'])){
            $username = $_POST['username'];
            $email= $_POST['email'];
            $password = $_POST['password'];
            $phoneNumber = $_POST['phone_Number'];
            $user_role= $_POST['user_role'];
            $address= $_POST['address'];


          $query = "UPDATE register set ";
          $query .="username  = '{$username}', ";
          $query .="email = '{$email}', ";
          $query .="password = '{$password}', ";
          $query .="phoneNumber = '{$phoneNumber}', ";
          $query .="user_role   = '{$user_role}', ";
          $query .="address= '{$address}' ";
          $query .="where username  = '{$username}' ";

        $update_profile = mysqli_query($connection,$query);

        // confirmQuery($update_stock);
        if(!$update_profile){
            die("QUERY FAILED" . mysqli_error($connection));
        }
        }



?>

<!-- Navigation -->
 
        <?php include "includes/admin_nav.php";?>
        
        
    
<!-- Heading -->
<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to Your Profile 
                
                <small> <?php echo $_SESSION['username'] ?> </small>
            </h1>

            <form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="id">ID</label>
         <input value="<?php echo $id; ?>" type="text" class="form-control" name="id">
     </div>
     <div class="form-group">
        <label for="username">Username</label>
         <input value="<?php echo $username; ?>" type="text" class="form-control" name="username">
     </div>
     <div class="form-group">
        <label for="email">Email</label>
         <input value="<?php echo $email; ?>" type="text" class="form-control" name="email"></label>
     </div>
     <div class="form-group">
        <label for="password">Password</label>
         <input value="<?php echo $password; ?>" type="password" class="form-control" name="password">
     </div>
     <div class="form-group">
        <label for="phone_number">Phone Number</label>
         <input value="<?php echo $phone_number; ?>" type="number" class="form-control" name="phone_Number">
     </div>
     <div class="form-group">
        <label for="user_role">Role</label>
         <input value="<?php echo $user_role; ?>" class="form-control" name="user_role" id="" cols="30" rows="10">
     </div>  
     <div class="form-group">
        <label for="address">Address</label>
         <input value="<?php echo $address; ?>" class="form-control" name="address" id="" cols="30" rows="10">
     </div>
     </div>
     <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_profile" value="Update Profile">
      </div>

</div>
</form>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>