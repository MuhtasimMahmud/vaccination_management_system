<?php 

    include 'auth/connection.php';

    $conn= connect();
    $m='';
    if(isset($_POST['register']))
    {
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password']; 
        $rPass = $_POST['r_password'];
        if($pass === $rPass)
        {
            $sq= "INSERT INTO users_info(user_name, email, phone, password) VALUES('$user_name', '$email', '$phone', '$pass')";
            
            if($conn->query($sq) === true)
            {
                header('Location: login.php');
            }
            else
            {
                $m = 'Connection not established!';
            }
        }
        else
        {
            $m= "Passwords don't match!";
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/registration.css">

    </head>


    <body>          
        <div class="container register" style="border-radius: 20px; margin-top: 140px">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>

                    <div class = "login-here" style="padding-top: 80px;">
                        <p>Already have an account ?  <a href="login.php"> <input type="submit" name="" value="Login"/> </a>  </p>  
                    </div>

                </div>
                <div class="col-md-9 register-right">

                    <form method="POST" action="registration.php" enctype="multipart/form-data">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading"> Creating Account</h3>

                                <span> <?php if($m != '') echo $m; ?> </span>
                                
                                <div class="row register-form">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input name = "user_name" type="text" class="form-control" placeholder="user name *" value="" autocomplete="off"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input name = "email" type="email" class="form-control" placeholder="Your Email *" value="" autocomplete="off" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input name ="phone" type="text" name="phone" class="form-control" placeholder="Your Phone *" value="" autocomplete="off" />
                                        </div>
                
                                    </div>
                                    
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input name = "password" type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name = "r_password" type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                
                                        <input style="margin-right: 90px;" type="submit" class="btnRegister"  value="Register" name = "register">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>


</html>

