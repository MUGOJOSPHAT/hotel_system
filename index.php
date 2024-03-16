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
<title>3 malls hotel</title>
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
        <!-- footer and modulular booking form -->
        <div class="row my-5" >
            <footer>
                <div class="book-now col-sm-12 ">
                    <div class="modal-button-text fixed-bottom bg-warning ">
                        <p>Book now at any of the location</p>
                        <!-- Button trigger modal -->
                        <button class="btn btn-block btn-primary"data-toggle="modal" data-target="#booking-form" >Book Now!</button>
                    

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="booking-form" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title center">Booking Form</h5>
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
                                            
                                            
                                            <button class="my-1 book-btn btn btn-primary btn-block">Book</button>
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
</body>
</html>