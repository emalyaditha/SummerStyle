<?php session_start(); ?>
<?php $the_mshop_id = 0 ?>
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
            <h1>Update Mens Stock</h1>

<br>

<?php 
        if(isset($_GET['edit'])){
        $the_mshop_id = $_GET['edit'];
            }
           $query = "select * from mshop where id = $the_mshop_id ";
           $select_update_mshop = mysqli_query($connection,$query);

           while($row = mysqli_fetch_assoc($select_update_mshop)) {
               $mshop_id = $row['id'];
               $mshop_Cname = $row['m_clothes_name'];
               $mshop_Cprice= $row['m_price'];
               $mshop_qty = $row['qty'];
               $mshop_date= $row['date'];
               $mshop_Cabout = $row['m_about'];
               $mshop_Cimg= $row['m_img'];
           }

        if(isset($_POST['update_stock'])){
            $mshop_Cname = $_POST['clothes_name'];
            $mshop_Cprice= $_POST['price'];
            $mshop_qty = $_POST['qty'];
            $mshop_date= $_POST['date'];
            $mshop_Cabout = $_POST['about'];
            $mshop_Cimgs= $_FILES['img']['name'];
            $mshop_Cimgs_temp= $_FILES['img']['tmp_name'];

            move_uploaded_file($mshop_Cimgs_temp, "../img/$mshop_Cimgs");
            


          $query = "UPDATE mshop set ";
          $query .="m_clothes_name  = '{$mshop_Cname}', ";
          $query .="m_price = '{$mshop_Cprice}', ";
          $query .="qty = '{$mshop_qty}', ";
          $query .="date = '{$mshop_date}', ";
          $query .="m_about   = '{$mshop_Cabout}', ";
          $query .="m_img= '{$mshop_Cimgs}' ";
          $query .="where id  = {$the_mshop_id} ";

        $update_stock = mysqli_query($connection,$query);

        // confirmQuery($update_stock);
        if(!$update_stock){
            die("QUERY FAILED" . mysqli_error($connection));
        }
        }



?>
<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="c_name">Clothes Name</label>
         <input value="<?php echo $mshop_Cname; ?>" type="text" class="form-control" name="clothes_name">
     </div>
     <div class="form-group">
        <label for="price">Price</label>
         <input value="<?php echo $mshop_Cprice; ?>" type="text" class="form-control" name="price">
     </div>
     <div class="form-group">
        <label for="qty">Quantity</label>
         <input value="<?php echo $mshop_qty; ?>" type="text" class="form-control" name="qty">
     </div>
     <div class="form-group">
        <label for="date">Date</label>
         <input value="<?php echo $mshop_date; ?>" type="text" class="form-control" name="date">
     </div>
     <div class="form-group">
        <label for="image">Image</label>
        <img width="50" src="../img/<?php echo $mshop_Cimg; ?>" alt="" name ="img">
         <input  type="file" name="img">
     </div>
     <div class="form-group">
        <label for="about">Description</label>
         <input value="<?php echo $mshop_Cabout; ?>" class="form-control" name="about" id="" cols="30" rows="10">
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