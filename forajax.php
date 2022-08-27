<?php
include 'config.php';
$datapost = $_POST['datapost'];

if ($datapost == 'all') {
    $displayquery = "SELECT * FROM `product` ";
} else {
    $displayquery = "SELECT * FROM `product` where category='$datapost' ";
}


$querydisplay = mysqli_query($con, $displayquery);
if(mysqli_num_rows($querydisplay)>0){
while ($result = mysqli_fetch_array($querydisplay)) {
?>

    <style>
        #tocart {
            background-color: white;
            border-radius: 25px;
            border-color: black;
            color: black;
            transition: 0.6s;
            outline: none;
        }
        #stock{
          text-allign:center;
          justify-content:center;
          display:inline;
          
          margin-left: 100px;
          padding-bottom:50px
          
          
        }
    </style>

<div class="col-lg-2 col-sm-3 col-md-4 col-xs-6" data-aos="slide-up" data-aos-offset="50">
                <div class="tumbnail" style="margin-bottom:20px">

                    <a href=""> <img id="img" src="admin/<?php echo $result['img'] ?>" class="img-circle img-thumbnail" alt="Image" >
                    </a>

                    <h3><b><?php echo $result['product name'] ?></b></h3>
                    <div class="main">
                        <div class="lael">
                            <h4><?php echo $result['category']; ?></h5>
                            <h5>₹<?php echo $result['cost'];
                                $item = $result['Id']
                                ?>/-</h5>
                           <span class="fa fa-star"><span class="fa fa-star"><span class="fa fa-star">
                        </div>
                        <div class="btnw">
                            <div class="d"><br><br></div>
                            <center>
                            <button role="button" onclick="chan(<?php echo $item ?>)" name="cart" id="tocart" class="btn btn-outline">Add to cart</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

<?php
}
}
else { ?> 
<h4 id ="stock">OOps !!... <?php echo $datapost ?> is either out of stock or unavailable</h4>
<?php  
}
?>