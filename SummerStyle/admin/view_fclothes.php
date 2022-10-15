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
            <h1>View Female Stock</h1>

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

           $query = "select * from fshop";
           $select_fshop = mysqli_query($connection,$query);

           while($row = mysqli_fetch_assoc($select_fshop)) {
               $fshop_id = $row['id'];
               $fshop_Cname = $row['clothes_name'];
               $fshop_Cprice= $row['price'];
               $fshop_qty = $row['qty'];
               $fshop_date= $row['date'];
               $fshop_Cabout = $row['about'];
               $fshop_Cimg= $row['img'];

                echo "<tr>";
                echo "<td>$fshop_id</td>";
                echo "<td>$fshop_Cname</td>";
                echo "<td>$fshop_Cprice</td>";
                echo "<td>$fshop_qty</td>";
                echo "<td>$fshop_date</td>";
                echo "<td>$fshop_Cabout</td>";
                echo "<td><img width='50' src='/Summer Style/img/$fshop_Cimg'></td>";
                echo "<td><a href='edit_fclothes.php?edit={$fshop_id}'>Update</a></td>";
                echo "<td><a href='view_fclothes.php?delete={$fshop_id}'>Delete</a></td>";
                
                echo "</tr>";
           }
   
            ?>            
        </tbody>
        </table>
        <?php 
        
        if(isset($_GET['delete'])){
            $fshop_id = $_GET['delete'];
            $query = "delete from fshop where id = {$fshop_id}";
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
        
