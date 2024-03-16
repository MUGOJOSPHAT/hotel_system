<?php
require_once "./include/session.php";
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
<title>3 malls hotel</title>
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
    .center {
    text-align: center;
    font-weight: 900;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-image: linear-gradient(to right, green, blue, purple, red);
    background-size: 400%;
    animation: gradientAnimation 10s linear infinite; /* Adjust duration and timing function as needed */
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 0;
    }
    50% {
        background-position: 100% 0;
    }
    100% {
        background-position: 0% 0;
    }
}
.img-fluid{
    height: 300px;
}
.center1{
    text-align: center;
}


</style>
</head>
<body class="bg-dark">
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
                                    <a class="dropdown-item" href="#hotels">Hotels</a>
                                    <a class="dropdown-item" href="#rooms">Rooms</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php"><i class="fas fa-door-open    "></i> logout, <?php echo $firstname; ?></a>
                            </li>
                        </ul>    
                            
                    </div>
                </nav>
            </div>
        </div>
        <!-- main body -->
        <div class="row ">
            <div class="col-sm-12 my-5 text-light ">
                <h1 class="text-light center1" >Locations</h1>
                <hr>
                <div class="owl-carousel overview-top text-dark">
                    <div class="item">
                        <div class="jumbotron jumbotron-fluid">
                            <h1 class="display-4">mombasa</h1>
                            <p class="lead">checkin 06:00 AM - Checkout 09:30 AM</p>
                            <hr class="my-4">
                            <img class="img-fluid" src="./assets/images/location/mombasa.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="jumbotron jumbotron-fluid">
                            <h1 class="display-4">Nairobi</h1>
                            <p class="lead">checkin 10:00 AM - Checkout 09:30 AM</p>
                            <hr class="my-4">
                            <img class="img-fluid" src="./assets/images/location/nairobi.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="jumbotron jumbotron-fluid">
                            <h1 class="display-4">Kisumu</h1>
                            <p class="lead">checkin 10:00 AM - Checkout 12:30 PM</p>
                            <hr class="my-4">
                            <img class="img-fluid" src="./assets/images/location/kisumu.jpg" alt="">
                        </div>
                    </div>
                </div>
                <h1 class="center1">Rooms</h1>

            </div>
            
        </div>
        <!-- footer and modulular booking form -->
        <div class="row my-5" >
            <footer>
                <div class="book-now col-sm-12 ">
                    <div class="modal-button-text fixed-bottom bg-warning ">
                        <p class="center">Book now at any of the location</p>
                        <!-- Button trigger modal -->
                        <button class="btn btn-block btn-primary"data-toggle="modal" data-target="#booking-form" >Book Now!</button>
                    

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="booking-form" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><span class="center"> Booking Form</span></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form>
                                            <label for="fname">Firstname</label>
                                            <input type="text" value="<?php echo $firstname; ?>" name="fname" id="fname" class="form-control">
                                            <label for="lname">Lastname</label>
                                            
                                            <input value="<?php echo $lastname; ?>" type="text" name="lname" id="lname" class="form-control">
                                            <label for="email">Email</label>
                                            <input value="<?php echo $email; ?>" type="email" name="email" id="email" class="form-control">
                                            <label for="Location"><i class="fa fa-location-arrow" aria-hidden="true"></i>Location</label>
                                            <select name="location" id="location" class="form-control">
                                                <option value="Nairobi">Nairobi</option>
                                                <option value="Kisumu">Kisumu</option>
                                                <option value="Mombasa">Mombasa</option>
                                            </select>
                                            <label for="From">From</label>
                                            <input type="datetime-local" name="from" id="from" class="form-control">
                                            <label for="to">To</label>
                                            <input type="datetime-local" name="to" id="to" class="form-control">
                                            <p class="center">Number of People</p>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="number_of_people" id="one" value="1">
                                                <label class="form-check-label" for="onetwo">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="number_of_people" id="two" value="2">
                                                <label class="form-check-label" for="two">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="number_of_people" id="five" value="5">
                                                <label class="form-check-label" for="five">5</label>
                                            </div>
                                            
                                            
                                            <button class="my-1 book-btn btn btn-primary btn-block">Book <span class="rotate"><i class="fas fa-sync-alt"></i></span></button>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function() {
    $('.overview-top').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true,
        
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
    $('.rooms').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        /*autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true,*/
        
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
    //food carousel
    $('.food').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        /*autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true,*/
        
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
    $('.book-btn').on('click', function(e){
        e.preventDefault();
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var location = $('#location').val();
        var from = $('#from').val();
        //to make sure the datetime for from is not empty, input from the form
        var id = <?php echo $id ?>; //get the user ID
        if(from === ""){
            alert("from cannot be empty, please fill all fields!!");
            return;//to break the code
        }
        var to = $('#to').val();
        //to make sure the datetime for to is not empty, input from the form
        if(to === ""){
            alert("To cannot be empty, please fill all fields!!");
            return;//to break the code
        }
        // Select the checked radio button
        var checkedRadioButton = $('input[name="number_of_people"]:checked');

        // Get the value of the checked radio button
        var checkedValue = checkedRadioButton.val();

        // Log the value to the console (you can use it as needed)
        //alert(checkedValue);

        // Disable the button
        $(this).prop('disabled', true);
        $('.rotate').addClass('rotate-animation');

        $.ajax({
            url:"./handler.php",
            method:"GET",
            data:{bookingform:1,fname,lname,email,location,from,to,id, nop:checkedValue},
            success:function(data){
                alert(data);
                // Re-enable the button after successful booking
                $('.book-btn').prop('disabled', false);
                $('.rotate').removeClass('rotate-animation');
            }

        });
    });

});
</script>
</body>
</html>