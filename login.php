<?php

    session_start();
    $_SESSION['user']='';
    $_SESSION['userid'] = '';

    include 'auth/connection.php';

    $conn = connect();

    $m = '';

    if(isset($_POST['login']))
    {
        $uName = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM users_info WHERE user_name = '$uName' and password = '$pass' ";

        $res = $conn->query($sql);

        if(mysqli_num_rows($res) == 1)
        {
            $user = mysqli_fetch_assoc($res);
            $_SESSION['user'] = $user['user_name'];
            $_SESSION['userid'] = $user['id'];

            header('location: dashboard.php');

        }
        else
        {
            $m = 'incorrect username or password !';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Login </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/login.css">

    </head>


    <body>
           
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1" style="border-radius: 10%;">
                    <h3>Login</h3>

                    <form method="POST">

                        <p style="color: red;"> <?php if($m != '') echo $m; ?> </p>

                        <div class="form-group">
                            <input name="uname" type="text" class="form-control" placeholder="username" value="" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <input name = "pass" type="password" class="form-control" placeholder="Your Password" value="" >
                        </div>
                        
                        <div class="form-group" style="padding-top: 4.5%; padding-bottom: 4.5%">
                            <input name = "login" type="submit" class="btnSubmit" value="Login">
                        </div>
                        
                        <div class="form-group">
                            <p>Don't have an account? <a href="registration.php">Create account</a> </p> 
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>   
    </body>



</html>








