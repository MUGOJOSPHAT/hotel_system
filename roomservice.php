<?php
require_once "./include/session.php";
require_once "./include/db.php";
$logindetails =logindetails();
if($logindetails != null){
    $email = $logindetails[0];
    $id = $logindetails[1];
    $type = $logindetails[2];
    //to make sure the logged in user is customer
    if($type != 0){
        header("location:./login.php");
    }
    $firstname = $logindetails[3];
    $lastname = $logindetails[4];
}else{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- owl-carousel css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Room service</title>
<style>
     .rotate {
        display: inline-block;
        transition: transform 0.5s ease-in-out; /* Smooth transition */
    }
    
    .rotate.rotate-animation {
        animation: rotateAnimation 2s linear infinite; /* Adjust duration and timing function as needed */
    }
    
    @keyframes rotateAnimation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-image: linear-gradient(to right, rgb(35, 204, 111),purple);">
                    <a class="navbar-brand" href="#"><img class="logo" src="./assets/images/logo/mugologo.png" alt=""></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mx-auto my-auto mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link" href="./index.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jump To</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="./index.php?#hotels">Hotels</a>
                                    <a class="dropdown-item" href="./index.php?#rooms">Rooms</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./roomservice.php"><i class="fas fa-utensil-spoon    "></i> Room Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./aboutus.php"><i class="fa fa-book" aria-hidden="true"></i> About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php"><i class="fas fa-door-open    "></i> logout, <?php echo $firstname; ?></a>
                            </li>
                        </ul>    
                            
                    </div>
                </nav>
            </div>
        </div>
        <div class="row" style="margin-top: 70px;">
            <div class="col-sm-12">
                <h1 style="text-align: center;">Room Service</h1>
                <hr>
            </div>
            <div class="col-sm-8">
                <h1>Drinks</h1>
                <hr>
                <div class="drinks owl-carousel">
                    <?php 
                    $query = "SELECT * FROM products WHERE category='drinks'";
                    $execute = $conn->query($query);
                    while($row = mysqli_fetch_assoc($execute)){
                        $name = $row['name'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image = $row['image'];
                        $id = $row['id'];
                    
                    
                    ?>
                    <!-- looped items -->
                    <div class="item">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h5><?php echo $name; ?></h5>
                                <p class="lead">Price: Kshs<?php echo $price; ?></p>
                                <hr class="my-2">
                                <img class="img-fluid" src="./assets/images/foods_drinks/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                                <button class="btn btn-block btn-warning addtocart" data-id="<?php echo $id; ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button>
                            </div>
                        </div>

                    </div>
                    <?php }?>
                </div>
                <!-- food -->
                <h1>Food</h1>
                <hr>
                <div class="drinks owl-carousel">
                    <?php 
                    $query = "SELECT * FROM products WHERE category='foods'";
                    $execute = $conn->query($query);
                    while($row = mysqli_fetch_assoc($execute)){
                        $name = $row['name'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image = $row['image'];
                        $id = $row['id'];
                    
                    
                    ?>
                    <!-- looped items -->
                    <div class="item">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h5><?php echo $name; ?></h5>
                                <p class="lead">Price: Kshs<?php echo $price; ?></p>
                                <hr class="my-2">
                                <img class="img-fluid" src="./assets/images/foods_drinks/<?php echo $image; ?>" alt="<?php echo $image; ?>">
                                <button class="btn btn-block btn-warning addtocart" data-id="<?php echo $id; ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to cart</button>
                            </div>
                        </div>

                    </div>
                    <?php }?>
                </div>
                
            </div>
            <div class="col-sm-4">
                <!-- cart -->
                <h1><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart Items</h1>
                <hr>
                <div id="cart-items" class="cart-items">
                    <!-- table updated via ajax -->
                </div>
            </div>
        </div>
        
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        updatecart();
        //checkout btn checkout
        $("body").on("click", ".checkout", function() {
            $(this).prop('disabled', true);
            $('.rotate').addClass('rotate-animation');
            $.ajax({
                url: "./handler.php",
                method: "POST",
                data: {checkout: 1},
                success: function(data) {
                    alert(data);
                    $(".checkout").prop('disabled', false);
                    $('.rotate').removeClass('rotate-animation');
                    
                }
            });
        });
        //buttons addtocart
        $("body").on("click", ".addtocart", function() {
            var id = $(this).data("id");
            //alert(id);
            //storing cart items to the database
            $.ajax({
                url:"./handler.php",
                method:"POST",
                dataType:"json",
                data:{id:id,addtocart:1},
                success:function(data){
                    updatecart();
                    //alert(data);
                }
            })
        });
        //delete cartitem
        $("body").on("click", ".deletecart", function() {
            var confirm1 = confirm("Are you sure you want to delete?");
            if(confirm1 == false){
                return;//to break the code
            }
            var id = $(this).data('id');
            $.ajax({
                url:"./handler.php",
                method:"POST",
                data:{deleteitem:1, id:id},
                success:function(data){
                    alert(data);
                    updatecart();
                }
            })
        });
        $('.drinks').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:false,
            //autoplayTimeout:2500,
            //autoplayHoverPause:true,
            
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
        //cart table function
        function updatecart(){
            $.ajax({
                url:"./handler.php",
                method:"POST",
                data:{updatecart:1},
                success:function(data){
                    $("#cart-items").html(data);
                }

            });

        }
    });
</script>
</body>
</html>