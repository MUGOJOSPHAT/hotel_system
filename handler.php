<?php 
include "./include/db.php";
include "./include/session.php";
include_once "./phpmailereg.php";

if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    // Check if the account exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    
    // Execute the query
    $result = $conn->query($query);

    // Check for errors in the query execution
    if (!$result) {
        echo "Error executing the query: " . $conn->error;
        exit();
    }

    // Check for rows in the result set
    if ($result->num_rows > 0){
        $_SESSION['errormsg']= "Account already exists";
        header("location:login.php");
        exit();
    }



    //add the account
    $query = "INSERT INTO users(firstname,lastname,email,password) VALUES('$fname','$lname','$email','$passwordhash')";
    $result = $conn->query($query);
    if($result){
        $_SESSION['successmsg']= "account created successfully";
        header("location:login.php");
        //header("location:./signup.php?signup=success");
    }else{ 
        $_SESSION['errormsg']= "something went wrong";
        header("location:login.php");
    }
}
elseif(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    $type = null;
    while($rows = mysqli_fetch_array($result)){
        $passwordhash = $rows['password'];
        $type = $rows['type'];
        $id = $rows['id'];
        $firstname = $rows['firstname'];
        $lastname = $rows['lastname'];

    }
    if($type == null){
        $_SESSION['errormsg']= "user doesn't exist!";
        header("location:./login.php");
    }
    else if(password_verify($password, $passwordhash)){
        $_SESSION['id'] = $id;
        $_SESSION['type'] = $type;
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['successmsg'] = "Login successful welcome ,$firstname";

        
        if($type == 0){
            header("location:./index.php");
        }else if($type == 1){
            header("location:./dashboard/admin.php");
        }else{
            $_SESSION['errormsg']= "Something went wrong!";
            header("location: login.php");
        }
    }
    else if(password_verify($password, $passwordhash)==false){
        echo "wrong password";
        $_SESSION['errormsg']= "wrong password";
        header("location:./login.php");
    }

    else{
        //echo "something went wrong";
        $_SESSION['errormsg']= "something went wrong";
        header("location:./login.php");
    }
}
//forgot pass
elseif(isset($_POST['passchange'])){
    $email = $_POST['username'];
    $newpassword = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);
    while($rows = mysqli_fetch_array($result)){
        $id = $rows['id'];
        $firstname = $rows['firstname'];
        $lastname = $rows['lastname'];
    }
    if($firstname == null){
        $_SESSION['errormsg']= "user doesn't exist!";
        header("location:./login.php");
    }else{
        $passwordhash = password_hash($newpassword, PASSWORD_DEFAULT);
        $query = "UPDATE users SET password = '$passwordhash' WHERE id = '$id'";
        $result = $conn->query($query);
        if($result){
            $_SESSION['successmsg']= "password changed successfully";
            header("location:./login.php");
        }else{ 
            $_SESSION['errormsg']= "something went wrong";
            header("location:./login.php");
        }
    }
}
elseif(isset($_GET['bookingform'])){
    $logindetails =logindetails();
    $firstname = $logindetails[3];
    $lastname = $logindetails[4];
    $from = $_GET['from'];
    $room = $_GET['room'];
    
    $to = $_GET['to'];
    $email = $_GET['email'];
    $id = $_GET['id'];
    $location = $_GET['location'];
    $Number_of_people = $_GET['nop'];
    $query = "INSERT INTO booking(user_id, datetime_from,datetime_to, location, number_of_people) VALUES('$id','$from','$to','$location','$Number_of_people')";
    $execute = $conn->query($query);
    if($execute){
        $message = "
            <p style='font-weight: bold;'>Booking was successful:</p>
            <table style='border-collapse: collapse; width: 100%;'>
                <tbody>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>Name</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$firstname $lastname</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>Email</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$email</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>Location</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$location</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>From</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$from</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>To</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$to</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>Number Of People</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$Number_of_people</td>
                    </tr>
                    <tr>
                        <th style='border: 1px solid #ddd; padding: 8px;'>Room</th>
                        <td style='border: 1px solid #ddd; padding: 8px;'>$room</td>
                    </tr>
                    
                    
                </tbody>
            </table>";

        echo "Booking was successful,\nLocation: $location \nFrom: $from \nTo: $to  \nEmail: $email \nName: $firstname $lastname \n";
        //php mailer sending the booking
        $sql = "SELECT * FROM credentials WHERE provider='gmail'";
        $run = $conn->query($sql);
        while($row = mysqli_fetch_array($run)){
            $username = $row['email'];
            $password = $row['password'];
        }

        sendmail($username,$password,$email,$firstname,$message);

        
    }else{ 
        echo "something went wrong!!";
       
    }
    //echo "connection made,location $location from $from to $to  for $email userid =$id";

}
//add to cart
elseif(isset($_POST['addtocart'])){
    $logindetails =logindetails();
    $id = $logindetails[1];
    $productid = $_POST['id'];
    $query = "INSERT INTO roomservice (product_id,user_id) VALUES('$productid','$id')"; 
    $execute = $conn->query($query);
    if($execute){
        echo json_encode("Added To cart successfully");
    }
    else{
        echo json_encode("something went wrong");
    }
}
elseif(isset($_POST['updatecart'])){
    
    $logindetails =logindetails();
    $id = $logindetails[1];
    $query = "SELECT * FROM roomservice WHERE user_id='$id'";
    $execute = $conn->query($query);
    $count = 0;
    $total = 0;
    $table = "<table class='table table-hover'>
                    <tr>
                        <th>S/NO</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>";
    while($rows = mysqli_fetch_assoc($execute)){
        $bookingid = $rows['id'];
        $productid = $rows['product_id'];
        $query1 = "SELECT * FROM products WHERE id='$productid'";
        $execute1 = $conn->query($query1);
        $count++;
        while($rows1 = mysqli_fetch_assoc($execute1)){
            $name = $rows1['name'];
            $price = $rows1['price'];
            $description = $rows1['description'];
            $image = $rows1['image'];
            
        }
        $total += $price;
        $table .="<tr>
                    <td>$count</td>
                    <td>$name</td>
                    <td>$price</td>
                    <td><button data-id='$bookingid' class='deletecart btn btn-block btn-danger'>Delete</button></td>
                </tr>";

    }
    $table .= "<tr>
                <td colspan='2'>Total</td>
                <td colspan='2' style='color:red;'>$total</td>
                
                </tr>
                <tr ><td colspan='4'><button id='checkout' class='checkout btn btn-block btn-warning'>Check-Out  <span class='rotate'><i class='fas fa-sync-alt'></i></span></button></td></tr>
                </table>";
    echo $table;
}
//delete from the cart
elseif(isset($_POST['deleteitem'])){
    //roomservice table is used to store cart bookings
    $id = $_POST['id'];
    $query = "DELETE FROM roomservice WHERE id='$id'";
    $execute = $conn->query($query);
    if($execute){
        echo "deleted successfully";
    }else{
        echo "something went wrong";
    }

}
elseif(isset($_POST['checkout'])){
    $logindetails =logindetails();
    $email = $logindetails[0];
    $firstname = $logindetails[3];
    $id = $logindetails[1];
    $query = "SELECT * FROM roomservice WHERE user_id='$id'";
    $execute = $conn->query($query);
    $count = 0;
    $total = 0;
    $table = "<table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <td colspan='3' style='color: green; text-align: center; padding: 8px;'>$email</td>
            </tr>
            <tr>
                <th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>S/NO</th>
                <th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Name</th>
                <th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Price</th>
            </tr>
            ";

while ($rows = mysqli_fetch_assoc($execute)) {
    $bookingid = $rows['id'];
    $productid = $rows['product_id'];
    $query1 = "SELECT * FROM products WHERE id='$productid'";
    $execute1 = $conn->query($query1);
    $count++;
    while ($rows1 = mysqli_fetch_assoc($execute1)) {
        $name = $rows1['name'];
        $price = $rows1['price'];
        $description = $rows1['description'];
        $image = $rows1['image'];
    }
    $total += $price;
    $table .= "<tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$count</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$name</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$price</td>
            </tr>";
}

$table .= "<tr>
            <td colspan='2' style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Total</td>
            <td colspan='1' style='border: 1px solid #dddddd; text-align: left; padding: 8px; color: red;'>$total</td>
        </tr>
    </table>";

$message = $table;

    
    //php mailer sending the cart
    $sql = "SELECT * FROM credentials WHERE provider='gmail'";
    $run = $conn->query($sql);
    while($row = mysqli_fetch_array($run)){
        $username = $row['email'];
        $password = $row['password'];
    }

   sendmail($username,$password,$email,$firstname, $table);
    //echo json_encode( "email sent");
    
    
}
?>