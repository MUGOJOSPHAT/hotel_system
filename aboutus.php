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
<title>About us</title>
</head>
<body onload="loadMapScenario();">
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
        <div class="row">
            <div class="col-sm-12">
                <h1>About Us</h1>
                <hr>
                <div class="description">
                    <h2>3 Malls Motel</h2>
                    <p>Welcome to 3 Malls Motel, your premier destination for unparalleled comfort and hospitality in the heart of the city. At 3 Malls, we pride ourselves on providing exceptional accommodations and personalized services to ensure your stay is memorable and enjoyable.</p>
                    <h3>Our Mission</h3>
                    <p>At 3 Malls Motel, our mission is to exceed your expectations by delivering outstanding service, attention to detail, and a warm, welcoming atmosphere. We strive to create a home away from home for our guests, where every need is anticipated and every comfort is provided.</p>
                    <h3>Our Accommodations</h3>
                    <p>Our Motel offers a range of luxurious rooms and suites designed to cater to every traveler's needs. Whether you're here for business or leisure, our spacious and elegantly appointed accommodations provide the perfect sanctuary for relaxation and rejuvenation.</p>
                    <h3>Room Service</h3>
                    <p>Indulge in the convenience of our room service, offering a diverse menu of delectable foods and refreshing beverages delivered right to your door. From hearty breakfast options to gourmet dinners, our culinary team ensures every meal is crafted with care and quality ingredients.</p>
                    <h3>Explore the City</h3>
                    <p>Located in close proximity to three major shopping malls, 3 Malls Motel offers easy access to premier shopping, dining, and entertainment destinations. Discover the vibrant culture and attractions of the city just steps away from our doors.</p>
                    <h3>Exceptional Hospitality</h3>
                    <p>At 3 Malls Motel, our dedicated team of hospitality professionals is committed to providing personalized service and creating memorable experiences for our guests. From seamless check-in to attentive concierge assistance, we are here to ensure your stay exceeds your expectations.</p>
                    <h3>Contact Us</h3>
                    <p>Experience the epitome of luxury and hospitality at 3 Malls Motel. Book your stay with us today and discover the perfect blend of comfort, convenience, and sophistication.</p>

                    <p>For inquiries and reservations, please contact us at:</p>
                    <ul>
                        <li>Address: <i class="fa fa-map" aria-hidden="true"></i> Kikuyu, Kiambu,Kenya</li>
                        <li>Phone: <a href="tel:+254742790598">+254 742 790 598</a></li>
                        <li>Email: <a href="mailto:josphatmugo52@gmail.com">josphatmugo52@gmail.com</a></li>
                    </ul>                    
                    <p>We look forward to welcoming you to 3 Malls Motel, where every stay is an unforgettable experience.</p>
                    <h1>Map</h1>
                    <div id="map" style="width: 100%; height: 400px;"></div>

                </div>
            </div>
        </div>
        <footer>
            <div class="row bg-dark text-light">
                <div class="col-sm-3">
                    <h1>About Us</h1>
                    <p>Welcome to 3 Malls Motel, your premier destination for unparalleled comfort and hospitality in the heart of the city. At 3 Malls, we pride ourselves on providing exceptional accommodations and personalized services to ensure your stay is memorable and enjoyable.</p>
                </div>
                <div class="col-sm-3">
                    <h1>Special Offerings</h1>
                    <ul>
                        <li>Specialty Cocktail: Malltini</li>
                        <li>Exclusive Room Package: Shop & Stay</li>
                        <li>Weekly Events: Mall Movie Nights</li>
                        <li>Local Artisan Market</li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h1>Services</h1>
                    <ul>
                        <li>Mall-hopping Tour: Mall Explorer</li>
                        <li>Room Service Surprise: Midnight Mall Munchies</li>
                        <li>Mall Spa Package: Retail Therapy Relaxation</li>
                        <li>Exclusive Mall Access</li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h1>Contact Us</h1>
                    <ul>
                        <li>Address: Kikuyu, Kiambu, Kenya</li>
                        <li>Phone: <a href="tel:+254742790598">+254 742 790 598</a></li>
                        <li>Email: <a href="mailto:josphatmugo52@gmail.com">josphatmugo52@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <p style="text-align: center;">All Rights Reserved &copy; Trademark &trade; 3 Malls Motel @2024</p>
                </div>
            </div>
        </footer>
        
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://www.bing.com/api/maps/mapcontrol?key=ApYACpO9hPS6xF0G655sNHylTgzR0he89RdPiGKW1GcXyX1mwikjNXavGy3Bceym" async defer></script>
<script>
    function loadMapScenario() {
        // Initialize the map
        var map = new Microsoft.Maps.Map(document.getElementById('map'), {
            credentials: 'ApYACpO9hPS6xF0G655sNHylTgzR0he89RdPiGKW1GcXyX1mwikjNXavGy3Bceym',
            center: new Microsoft.Maps.Location(-1.268580, 36.679057), // Example center point
            zoom: 12 // Example zoom level
        });
    
        // Create a location object with the coordinates for the marker
        var location = new Microsoft.Maps.Location(-1.268580, 36.679057);
    
        // Create a pushpin (marker) at the specified location with a title
        var pushpin = new Microsoft.Maps.Pushpin(location, {
            title: '3 Malls Motel'
        });
    
        // Add the pushpin to the map
        map.entities.push(pushpin);
    }
    
    
</script>    
</body>
</html>