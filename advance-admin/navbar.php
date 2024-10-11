<?php
      session_start();
?>
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
            <div class="user-img-div">
            <img src="../upload/<?php echo $row['avatar']?>" width="80px" height="80px" >

                <div class="inner-text">
                <?php 
                if(isset($_SESSION['user_name'] )){
                    echo"".$_SESSION['user_name']."</br>";
                    echo "<a href='logout.php'>Logout</a>";

                }
                else{
                    echo "<a href='login.php'>Login</a>";
                }    
                  ?>       
                </div>
            </div>

        </li>


        <li>
            <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-desktop "></i>Product<span class="fa arrow"></span></a>
             <ul class="nav nav-second-level">
                <li>
                    <a href="product_select.php"><i class="fa fa-toggle-on"></i>List Product</a>
                </li>
            </ul>
        </li>
       

</div>

</nav>

