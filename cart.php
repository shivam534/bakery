<?php
session_start();

if (!isset($_SESSION["loggedin"]) ) {
    header("location: login.php");
    exit;
}
include 'config.php';
include 'bootstrap.php';
include 'header.php';
?>
<style>
    a:hover {
        text-decoration: none;
    }
 
    #del{
    margin-top: 10px;
    color: blue;
    cursor: pointer;
    }
    #cartimage {
    width: 100px;
    height: 100px;
    transition: 0.5s;
}
.detail{
    display: flex;
    
}
img:hover{
    transform: scale(1.2);
  
}
.cont{
    margin-left: 50px;
    width: 75%;
    margin-top: 30px;
}
.cost
{
    float: left;
} 
.total
{
    float: right;
}












@media(max-width:786px)
{
    .cont
    {
        width: 100%;
        margin-left: 0px;
    }

    #p{
        font-size: 15px;
    }
}
</style>

<title><?php echo $_SESSION["username"]; ?> | Cart </title>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 150,
        duration: 600,
    });
</script>
<?php $id = $_SESSION['id'];


?>
<!--<link rel="stylesheet" href="cartsyle.css">-->
<meta name="viewport" content="width=max-width initial-scale=1.0">
<div class="well">
    <center>
        <h4>Welcome to your cart ...!!</h4>
    </center>
</div>
<script>
    function total(data, cost,total) {

        $s = data * cost;

        const pay = document.getElementById(total);
        pay.innerText = 'Total ammount: ₹' + $s + '/-';
  
    }
    
</script>
<div class="cont">
<div class="err"></div>

    <?php $id = $_SESSION['id'];

    $sel = "SELECT * from `cart` WHERE user_id = '$id'";

    $query = mysqli_query($con, $sel);
    $i=1;
    

    if (mysqli_num_rows($query) > 0) {?>

        <a href="delall.php">Delete all items</a>
        
        <?php while ($cartresult = mysqli_fetch_array($query)) {
            $pid = $cartresult['product_id'];

            $selproduct = "SELECT * FROM `product` where id = $pid";

            $query2 = mysqli_query($con, $selproduct);

            while ($presult = mysqli_fetch_array($query2)) { 
               
                ?>

                <div class="panel panel-default" style="margin-top:20px;" data-aos="zoom-in">
                    <div class="panel-heading">
                        <h7">Item <?php echo $i;?></h7>
                       
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-1">
                                <a href="admin/<?php echo $presult['img'] ?>" data-lightbox="crt"> <img src="admin/<?php echo $presult['img'] ?>" id="cartimage" alt="product image"></a>
                            </div>
                            <div class="col-lg-5 detail">
                                <div class="mark">
                                    <h4><b><?php echo $presult['product name'] ?></b></h4>
                                    <h5><?php echo $presult['category'] ?></h5>

                                    <p>4.0*</p>
                                </div>
                                <div class="qan" style="margin-left: 50px;">
                                    
                                    <?php $cost = $presult['cost']; ?>
                                    <?php
                                         if($presult['Available_quantity']>0)
                                         {?>
                                         <label for="">Quantity:</label> <br>
                                    <select name="select" onchange="total(this.value,<?php echo $cost ?>,<?php echo $i?>)" id="" class="form-control">
                                     <?php
                                             $q=1 ;
                                             while($q<=$presult['Available_quantity'])
                                             {?>
                                               <option><?php echo $q;$q++; ?></option>
                                          <?php }?>
                                    </select>
                                    <?php 
                                         }
                                         else{?>
                                         <label for="">Quantiy:</label>
                                            <span style="color:red;margin-left:5px">*out of stock*</span>
                                       <?php   }
                                       $p= $presult['Id'];
                                      ?>


                                    
                                        <a href="remove.php?id=<?php echo $p ?>">delete</a>
                                
                                </div>
                            </div>
                            <?php
                            
                            ?>
                            <div class="col-lg-5">
                                <a href="remove.php?id=<?php echo $presult['Id'] ?>" class="btn btn-default btn-block">Remove</a>
                                <?php if($presult['Available_quantity']>0){ ?>
                                <a href="buy.php?s=<?php echo $p; ?>&&name=<?php echo $presult['product name'] ?> " class="btn btn-warning btn-block" role="button" >Buy now!!</a> <?php } ?>
                            </div>

                        </div><br>
                        <div class="division" style="border-bottom: 1px solid grey;">
                        </div>
                        <div class="cost">
                            <h4 id=""><b>Price/item: ₹<?php echo $presult['cost'] ?>/- </b></h4>
                        </div>
                        <div class="total">
                            <b>
                                <h4 id="<?php echo $i ; $i++;  ?>">Total ammount: ₹<?php echo $presult['cost'] ?>/-</h4>
                            </b>
                        </div>
                    </div>



                </div>

        <?php }
        } ?>

      <h3 style="float: right;">Want to  Add Some<a href="welcome.php"> more</a> ?</h3>

    <?php } else { ?>

        <div class="container" style="margin-top: 200px; ">
            <center>
                <h2> OOPs!! your cart is empty.
                    Want to <a href="welcome.php"> Add Some</a> ?</h2>
            </center>
        </div>
</div>
<?php } ?>
<script>
/*  function remove(value){
      alert(value);
      $.ajax({
          url:'remove.php',
          type:'POST',
          data:{datapost:value}
         
          
      });
  }
*/
</script>

