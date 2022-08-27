<!DOCTYPE html>
<?php

include 'bootstrap.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   <!-- <link rel="stylesheet" type="text/css" href="asign.css">-->
    <title>Bakery Shop</title>
    <style>
        footer {
            position: relative;
        }
        #myslide{
        position: relative;
       
        }
        @media(max-width:944px)
        {
            .item img{
                width: 700px;
                height: 300px;
            }
        }
        @media(max-width:860px)
        {
            .item img{
                width: 500px;
                height: 250px;
            }
        }
        @media(max-width:480px)
        {
            .item img{
                width: 370px;
                height: 150px;
                
            }
            #arr{
                display: none;
            }
        }
    </style>
</head>

<body>
 
   <div id="myslide" class="carousel slide" data-ride="carousel"<?php if(!isset($_SESSION['id'])){?>
   style="margin-top: 30px;"
   
   <?php } ?> >
       <div class="carousel-inner" role="listbox">
           <div class="item active">
               <center>
                   <img src="carasolimage/img1.jpg" alt="" width="850px" height="400px">
               </center>
           </div>
           <div class="item">
               <center>
                   <img src="carasolimage/img2.jpg" alt="" width="850px" height="400px">
               </center>
           </div>
          
           <div class="item">
               <center>
                   <img src="carasolimage/img4.jpg" alt="" width="850px" height="400px">
               </center>
           </div>
       </div>
       <a class="left carousel-control" id="arr" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" id="arr" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
   </div>









</body>

</html>

<!--
    <div id="background">


        <center>
            <div class="container con">
                <div id="content">
                    <a href="welcome.php" class="btn btn-danger btn-lg active"><b>Our Eatables</b></a><br>
                    <p style="font-size:20px">We have the best bakery products</p>
                </div>

            </div>
        </center>

    </div>




    <footer>
        <center>
            <div class="container">
                <p> Copyright <span class="glyphicon glyphicon-copyright-mark">Bakery</span>Shop.All Rights Reserved|Contact us:+91-911155564
            </div>
        </center>
    </footer>
      <div class="container chan">
                <div class="jumbotron">
                    <h2> Welcome to Lifestyle Store</h2>
                    <p><i>Your satisfaction if our achivement</i></p>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src=""
                </div>
        </div>-->


