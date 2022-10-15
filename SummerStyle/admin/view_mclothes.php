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
            <h1>View Mens Stock</h1>

            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Clothes Name</th>
                    <th>Price</th>
                    <th>Quntity</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 

$query = "select * from mshop";
$select_mshop = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_mshop)) {
    $mshop_id = $row['id'];
    $mshop_Cname = $row['m_clothes_name'];
    $mshop_Cprice= $row['m_price'];
    $mshop_qty = $row['qty'];
    $mshop_date= $row['date'];
    $mshop_Cabout = $row['m_about'];
    $mshop_Cimg= $row['m_img'];

     echo "<tr>";
     echo "<td>$mshop_id</td>";
     echo "<td>$mshop_Cname</td>";
     echo "<td>$mshop_Cprice</td>";
     echo "<td>$mshop_qty</td>";
     echo "<td>$mshop_date</td>";
     echo "<td>$mshop_Cabout</td>";
     echo "<td><img width='50' src='/Summer Style/img/$mshop_Cimg'></td>";
     echo "<td><a href='edit_mclothes.php?edit={$mshop_id}'>Update</a></td>";
     echo "<td><a href='view_mclothes.php?delete={$mshop_id}'>Delete</a></td>";
     
     echo "</tr>";
}

 ?>      
        </tbody>
        </table>

        <?php 
        
        if(isset($_GET['delete'])){
            $mshop_id = $_GET['delete'];
            $query = "delete from mshop where id = {$mshop_id}";
            $delete_query = mysqli_query($connection, $query);
        }
        ?>
        </div>
    </div>
    <!-- /.row -->
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
        </div>
        <!-- /.row -->

    </div>
    

</div>

     
        <!-- /#page-wrapper -->
        
