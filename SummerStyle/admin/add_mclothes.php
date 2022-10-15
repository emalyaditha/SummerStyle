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
            <h1>Add Mens Stock</h1>

            <br>


<?php

    if(isset($_POST['add_stock'])){

    $mc_name = $_POST['m_clothes_name'];
    $mprice = $_POST['m_price'];
    $m_qty = $_POST['qty'];
    $m_date = $_POST['date'];

    $m_img = $_FILES['m_img']['name'];
    $m_img_temp = $_FILES['m_img']['tmp_name'];

    $m_about = $_POST['m_about'];


        move_uploaded_file($m_img_temp, "../img/$m_img");

        $query = "insert into mshop(m_clothes_name, m_price, qty, date, m_img, m_about)";
        $query.= "VALUES('{$mc_name}','{$mprice}','{$m_qty}','{$m_date}','{$m_img}','{$m_about}' )";

        $add_mstock_query = mysqli_query($connection, $query);

        if(!$add_mstock_query){
            die("Query Failed ." . mysqli_error($connection));
        }
        else{
            $msg = "Male Clothes couldn't be Added ";
            echo "<script type='text/javascript'>alert('$msg');</script>"; 
            header("refresh:1; url=add_mclothes.php");
        }

    }
?>


            <form action="add_mclothes.php" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="c_name">Clothes Name</label>
         <input type="text" class="form-control" name="m_clothes_name">
     </div>
     <div class="form-group">
        <label for="price">Price</label>
         <input type="text" class="form-control" name="m_price">
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
         <input type="file" name="m_img">
     </div>
     <div class="form-group">
        <label for="about">Description</label>
         <input class="form-control" name="m_about" id="" cols="30" rows="10">
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

</div>
</div><!-- /.row -->

</div>
    

</div><!-- /#page-wrapper -->
</html>
