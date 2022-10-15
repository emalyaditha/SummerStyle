<?php session_start(); ?>

<!-- Head -->
<?php include "includes/db.php";?>
        <?php include "includes/admin_header.php";?>



<!-- Navigation -->
 
        <?php include "includes/admin_nav.php";?>
           
<!-- Heading -->
<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to Admin 
                
                <small> <?php echo $_SESSION['username'] ?> </small>
            </h1>
            <h1>Update Womans Stock</h1>

<br>

<?php 
        if(isset($_GET['edit'])){
        $the_fshop_id = $_GET['edit'];
        }
           $query = "select * from fshop where id = $the_fshop_id ";
           $select_update_fshop = mysqli_query($connection,$query);

           while($row = mysqli_fetch_assoc($select_update_fshop)) {
               $fshop_id = $row['id'];
               $fshop_Cname = $row['clothes_name'];
               $fshop_Cprice= $row['price'];
               $fshop_qty = $row['qty'];
               $fshop_date= $row['date'];
               $fshop_Cabout = $row['about'];
               $fshop_Cimg= $row['img'];
           }

        if(isset($_POST['update_stock'])){
            $fshop_Cname = $_POST['clothes_name'];
            $fshop_Cprice= $_POST['price'];
            $fshop_qty = $_POST['qty'];
            $fshop_date= $_POST['date'];
            $fshop_Cabout = $_POST['about'];
            
            $fshop_Cimgs= $_FILES['img']['name'];
            $fshop_Cimgs_temp= $_FILES['img']['tmp_name'];

            move_uploaded_file($fshop_Cimgs_temp, "../img/$fshop_Cimgs");
            


          $query = "UPDATE fshop set ";
          $query .="clothes_name  = '{$fshop_Cname}', ";
          $query .="price = '{$fshop_Cprice}', ";
          $query .="qty = '{$fshop_qty}', ";
          $query .="date = '{$fshop_date}', ";
          $query .="about   = '{$fshop_Cabout}', ";
          $query .="img= '{$fshop_Cimgs}' ";
          $query .="where id  = {$the_fshop_id} ";

        $update_stock = mysqli_query($connection,$query);

        if(!$update_stock){
            die("QUERY FAILED" . mysqli_error($connection));
        }
        }
?>
<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="c_name">Clothes Name</label>
         <input value="<?php echo $fshop_Cname; ?>" type="text" class="form-control" name="clothes_name">
     </div>
     <div class="form-group">
        <label for="price">Price</label>
         <input value="<?php echo $fshop_Cprice; ?>" type="text" class="form-control" name="price">
     </div>
     <div class="form-group">
        <label for="qty">Quantity</label>
         <input value="<?php echo $fshop_qty; ?>" type="text" class="form-control" name="qty">
     </div>
     <div class="form-group">
        <label for="date">Date</label>
         <input value="<?php echo $fshop_date; ?>" type="text" class="form-control" name="date">
     </div>
     <div class="form-group">
        <label for="image">Image</label>
        <img width="50" src="../img/<?php echo $fshop_Cimg; ?>" alt="" name ="img">
         <input  type="file" name="img">
     </div>
     <div class="form-group">
        <label for="about">Description</label>
         <input value="<?php echo $fshop_Cabout; ?>" class="form-control" name="about" id="" cols="30" rows="10">
     </div>  
     </div>
     <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_stock" value="Update">
      </div>

</div>
</form>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>