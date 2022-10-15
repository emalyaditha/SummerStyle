<nav id="NAVBAR">      
 <ul>
      <li> <a href="/Summer Style/admin/profile.php"> <?php echo $_SESSION['username'] ?></li>
      <li> <a href="#top">HOME  </a></li>
      <li> <a href="#Offer">OFFERS</a> </a></li>
      <li> <a href="#Womans clothing">WOMANS CLOTHING</a></li>
      <li> <a href="#Mens clothing">MENS CLOTHING </a></li>
      <li> <a href="#contact">CONTACT</a></li>
     
      <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>

       <li> <a href="logout.php">LOGOUT</a> </li>
     <?php }else{ ?>
      
     <div class="dropdown">
         <button class="dropbtn"><li> <a href="login.html">  SIGNIN</a> </li><i class="fa fa-caret-down"> </i> </button>
  <div class="dropdown-content">
      <li> <a href="SignUp.html"> <i class="fa fa-user"> </i>SIGNUP</a> </li>
    
         </div>
          </div>
     
     <?php } ?>

 </ul>
  </nav>

