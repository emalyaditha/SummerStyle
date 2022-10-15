<!-- Head -->
<?php session_start(); ?>
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
            <h1>Add to Womans Stock</h1>

<br>

<?php

    if(isset($_POST['add_stock'])){

    $Fc_name = $_POST['clothes_name'];
    $Fprice = $_POST['price'];
    $F_qty = $_POST['qty'];
    $F_date = $_POST['date'];

    $F_img = $_FILES['img']['name'];
    $F_img_temp = $_FILES['img']['tmp_name'];

    $F_about = $_POST['about'];


        move_uploaded_file($F_img_temp, "../img/$F_img");

        $query = "insert into fshop(clothes_name, price, qty, date, img, about)";
        $query.= "VALUES('{$Fc_name}','{$Fprice}','{$F_qty}','{$F_date}','{$F_img}','{$F_about}' )";

        $add_stock_query = mysqli_query($connection, $query);

        if(!$add_stock_query){
            die("Query Failed ." . mysqli_error($connection));
        }
        else{
            $msg = "Female Clothes couldn't be Added ";
            echo "<script type='text/javascript'>alert('$msg');</script>"; 
            header("refresh:1; url=add_fclothes.php");
        }

    }
?>


            <form action="add_fclothes.php" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="c_name">Clothes Name</label>
         <input type="text" class="form-control" name="clothes_name">
     </div>
     <div class="form-group">
        <label for="price">Price</label>
         <input type="text" class="form-control" name="price">
     </div>
     <div class="form-group">
        <label for="qty">Quantity</label>
         <input type="text" class="form-control" name="qty">
     </div>
     <div class="form-group">
        <label for="date">Date</label>
         <input type="text" class="form-control" name="date">
     </div>
     <div class="form-group">
        <label for="image">Image</label>
         <input type="file" name="img">
     </div>
     <div class="form-group">
        <label for="about">Description</label>
         <input class="form-control" name="about" id="" cols="30" rows="10">
     </div>  
     </div>
     <div class="form-group">
          <input class="btn btn-primary" type="submit" name="add_stock" value="Add Stock">
      </div>

</div>
</form>
        </div>
    </div><!-- /.row -->
</div>
</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
</div>
</div><!-- /.row -->

</div>
    

</div><!-- /#page-wrapper -->
        
