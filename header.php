<?php
include 'bootstrap.php';
?>
<style>
   .withsearch{
       display: flex;
   }
   .watsapp a .fa{
    font-size: 50px;
    align-items: unset;
    position: relative;
color: black;
    margin-right: 0;
      margin-left: 10px;
      
   
   
   }
 
   .watsapp a{
    border: none;
    position: fixed;
  
    align-items: center;
    margin-left: 1400px;
    top: 90%;
    border-radius: 60px;
    z-index: 9;
    background: transparent;
    display: flex;
   }
   .watsapp a .whatcontent{
    font-size: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 5px;
    display: none;
    transition: 1s;
   }
   .watsapp a:hover .whatcontent{
       display: block;
   }
   .watsapp a:hover .fa{
      color: green;
    }
   .watsapp a:hover{
       background: black;
       color: white;
       margin-left: 1200px;
   }
    li:hover{
             background-color: grey;
    }
    #categoryinnav{
        display: none;
    }
    nav
    {
        letter-spacing: 5px;
    }
    nav ul li{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .navbar-header #image:hover{

        transform: scale(1.2);
    }
     .navbar-header #image{
        margin-left: 100px;
    }
    @media(max-width:944px)
    {
        .navbar-header #image{

        margin-left: 70px;
        }
        .watsapp{
            display: none;
        }

    }
    
    
    @media(max-width:860px)
    {
        .navbar-header #image{
        margin-left: 10px;
        }
    }
    @media(max-width:720px)
    {
        #categoryinnav{
        display: block;
    }
    }

  @media(min-width:1300px){
    .watsapp a{
        margin-left: 1200;
    }
  }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid ">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="withsearch">
           <a href="about.php"> <img src="Untitled.png" alt="" id="image" width="50px" height="50px"></a>
          <?php if(isset($f)) {?>
           <select name="" id="categoryinnav" class="form-control" onchange="product(this.value)" style="width: 200px; margin-top: 5px; margin-left: 10px;">
                        <option value="all">Search</option>
                        <?php
                        $sel = "SELECT * FROM `category`";
                        $query = mysqli_query($con, $sel);
                        while ($resultcat = mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $resultcat['catname'] ?>"><?php echo $resultcat['catname'] ?></option>
                        <?php } ?>
                    </select>
                    <?php } ?>
        </div>
        </div>
        <div class="collapse navbar-collapse" id="myNav">
        
            <ul class="nav navbar-nav navbar-right" >
                <?php if (isset($_SESSION["loggedin"])) { ?>
                    <li><a href="welcome.php" class="text-center"><span class="glyphicon glyphicon-s"></span>Products</a></li>

                    <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li onclick="c()"><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php } else { ?>
                    <li><a href="welcome.php" class="text-center"><span class="glyphicon glyphicon-shoppg-cart"></span>Products</a></li>

                    <li><a href="admin/adminpannel.php" class="text-center"><span class="glyphicon glyphicon-product"></span> Admin</a></li>
                    <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                    <li><a href="register.php" class="text-center"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                     <li><a href="login.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>            
               
                    <?php } ?>
                    <script>
                       function c(){
                           swal("Successfully loggedout","Success");
                       }
                    </script>
            </ul>
        </div>
    </div>
</nav>
<?php if(isset($f)) {?>
<div class="watsapp">
 <a href="https://wa.link/8uz6u6"  class ="btn btn-default" target="_blank">
 <div class="whatcontent">   Purchase via whatsapp</div>
 <i class="fa fa-whatsapp"></i>
</a>
</div>
<?php } ?>
