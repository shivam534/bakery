<?php
session_start();
ob_start();
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>

@media(max-width:986px)
{
  .form
  {
    width: 100%;
  }
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bootstrap.php'; ?>
    <title>About | BakeryShop</title>
</head>
<body>
    <!-- Header -->
    <?php
            include 'header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container">
              
            <div class="row">
                <div class="col-md-4">
                  <h3 class="about-h3 text-uppercase">Who We Are</h3>                  
                  <div class="box-padding-10">
                  <img src="who-we-are.png" alt="" class="img-responsive img-circle about-img">  
                  <p class="text-muted about-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, quae dicta earum et nisi aliquid totam velit? Amet asperiores quis obcaecati sed reprehenderit consectetur alias dolores id quisquam eos totam vitae ipsam delectus, maxime, Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam voluptatibus dolor, rerum nesciunt nisi illum sapiente vero iure reprehenderit? sapiente incidunt quia odit omnis. Debitis!</p>                
                  </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OUR HISTORY</h3>
                  <div class="box-padding-10">
                  <p class="p-bold p-blue">1999 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, vitae odio alias rerum nam quasi laudantium possimus facere soluta voluptatum?</p>

                  <p class="p-bold p-blue">2002 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2006 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2008 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2012 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2020 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>
                </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OPPURTUNITIES</h3>
                  <div class="box-padding-10">
                    <p class="p-bold">Availabe Roles</p>
                    <div class="box-padding-left">
                      <p class="text-muted">
                        1. Jr./Sr. Web Developer<br>
                        2. Graphic Designer<br>
                        3. Web Designer<br>
                        4. Front End Developer<br>
                        5. Back End Developer<br>
                        6. Database Admin<br>
                        7 .System Admin<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
           
<div class="ro">
  <?php  if(isset( $_SESSION["loggedin"])){?>
            <div class="col-lg-5 form" data-aos="slide-up" data-aos-duration="1000" data-aos-offset="300">
            

            <h2>Feedback:</h2><br>

            <form action="#" method="post">
            <div class="form-group">
            <label for="">Enter your Name:</label>
            <input type="text" placeholder="Full name" class="form-control">
            </div>
            <div class="form-group">
            <label for="">Email:</label>
            <input type="text" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
            <label for="">Feedback:</label>
             <textarea  id="" cols="30" rows="10" class="form-control" name="feedback"></textarea>
            </div>
            <div class="form-group">
            
             <button class="btn btn-primary" name="submit">Submit</button>
            </div>
            </form>
            </div>
            <?php } ?>
            </div>
            </div>
        </div>
    
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include 'footer.php';
        if(isset($_POST['submit'])){
        
          $id = $_SESSION["id"] ;
          $feedback = $_POST['feedback'];
          $insert = "INSERT INTO `feedback`(`uid`,`feedback`)VALUES('$id','$feedback')";
          $query = mysqli_query($con,$insert);
          if($query){
            echo "<script>alert('Thanks  your feedback is submitted')</script>";
          }
        }
    ?>
    <!-- Footer End -->
</body>
</html>