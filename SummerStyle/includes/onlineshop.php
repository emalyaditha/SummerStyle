
<hr class="new1">
<section id="Womans clothing">
    <div class="container">   
      <br>
      <br>
      <br>
      <br>
    <h1>Womans Clothing</h1>  
    <div class="row">
    <?php
            $query = "select * from fshop";
            $select_all_fshop_query = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_all_fshop_query)){

        $clothes_name = $row['clothes_name'];
        $price = $row['price'];
        $about = $row['about'];
        $img = $row['img'];
?>

    <div class="col-md-3 shop-pic text-center">
    <div class="img-box">

     
    </div> 
    
    <img src="img/<?php echo $img; ?>"class="img-responsive">
        <h2><?php echo $clothes_name ?></h2>
        <h3><?php echo $price ?></h3>
        <p><?php echo $about ?></p>
        <button class="btn btn-primary" onclick=window.alert();>Add to Cart</button>
    </div>
    <?php } ?>
    </div>   
    </div>
    </section>
    <!---------------------------------->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr class="new1">
<section id="Mens clothing">
    <div class="container">
    
      <br>
      <br>
      <br>
      <br>
    <h1>Mens Clothing</h1>
    
    <div class="row">
    <?php
            $query1 = "select * from mshop ";
            $select_all_Mshop_query = mysqli_query($connection,$query1);

        while($row1 = mysqli_fetch_assoc($select_all_Mshop_query)){

        $m_clothes_name = $row1['m_clothes_name'];
        $m_price = $row1['m_price'];
        $m_about = $row1['m_about'];
        $m_img = $row1['m_img'];
?>
    <div class="col-md-3 shop-pic text-center">
    <div class="img-box">

    </div> 
    <img src="img/<?php echo $m_img ?>"class="img-responsive">
        <h2><?php echo $m_clothes_name ?></h2>
        <h3><?php echo $m_price ?></h3>
        <p><?php echo $m_about ?></p>
        <button class="btn btn-primary" onclick=window.alert(;>Add to Cart</button>
    </div>
<?php } ?>
    </div>
    </section>
