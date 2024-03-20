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
<title>Forgot Password</title>
<style>
    body {
        background-image: url("assets/images/login/uHd3Yab.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
</head>
<body>
    <div class="container">
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
            <div class="col-sm-6 mx-auto my-3 text-light" style="background-image: linear-gradient(to left, rgba(242, 242, 245, 0.808),rgba(112, 112, 112, 0.815));">
                <div class="form" >
                    <form method="post" action="./handler.php">
                        <h3 class="center">Forgot Password</h3>
                        <hr class="bg-light">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="email" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password:</label>
                            <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                            <span class="bg-light" id="passverify"></span>
                        </div>
                        <div class="form-group">
                            <button name="passchange" id="passchange" type="submit" class="btn btn-primary btn-block">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        //disable button 
        $('#passchange').prop('disabled',true);
        // password validation
        $("#password").keyup(function(){
            passwordvalidate();
            
        });
        $("#confirm-password").keyup(function(){
            passwordvalidate();
            
        });
        function passwordvalidate(){
            var password = $("#password").val();
            var confirm_password = $("#confirm-password").val();
            if(password == confirm_password){
                $('#passchange').prop('disabled',false);
                $("#passverify").html("<i class='fa fa-check'></i> password matched").css("color",'green');
            }else{
                $('#passchange').prop('disabled',true);
                $("#passverify").html("<i class='fa fa-times'></i> Password missmatch").css("color",'red');
            }
        }
       
    });
</script>
</body>
</html>