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
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            
           $query = "select * from feedback";
           $select_fshop = mysqli_query($connection,$query);

           while($row = mysqli_fetch_assoc($select_fshop)) {
               $id = $row['id'];
               $name = $row['name'];
               $email= $row['email'];
               $message = $row['msg'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$email</td>";
                echo "<td>$message</td>";;
                echo "<td><a href='comments.php?delete={$id}'>Delete</a></td>";
                
                echo "</tr>";
           }
   
            ?>            
        </tbody>
        </table>

        <?php 
        
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $query = "delete from feedback where id = {$id}";
            $delete_query = mysqli_query($connection, $query);
        }
        ?>
        </div>
    </div>
</div>
</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>


          </div>
        </div>
    </div>
    </div>
    </html>
