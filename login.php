<?php 
include_once "./include/session.php";
include_once "./include/db.php"
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
<title>Login</title>
<style>
    body {
        background-image: url("assets/images/login/spa-beach-hotel-infinity-pool-wallpaper-preview.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    a{
        color: rgb(12, 219, 91);
    }
    a:hover{
        color: yellow;
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm navbar-dark" style="background-image: linear-gradient(to right, rgb(35, 204, 111),purple);">
                    <a class="navbar-brand" href="#"><img class="logo" src="./assets/images/logo/mugologo.png" alt=""></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./login.php">Login</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="./signup.html">Signup</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto my-5 text-light userdetails">
                <?php echo message();?>
                <form action="./handler.php" method="post">
                    <fieldset>
                        <legend style="text-align: center;"><i class="fa fa-user-circle" aria-hidden="true"></i> User Login</legend>
                        <label for="email"><i class="fas fa-mail-bulk    "></i> Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <input type="submit" value="login" name="login" class="btn btn-primary btn-block my-2">
                        <p class="center">forgot password ?<span><a href="./forgotpassword.php">Reset Password</a></span></p>
                    </fieldset>
                </form>
            </div>
        </div>
        
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>