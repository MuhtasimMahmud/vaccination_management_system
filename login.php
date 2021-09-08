<?php 

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
                    <form>

                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Your Email" value="" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <input name = "password" type="password" class="form-control" placeholder="Your Password" value="" >
                        </div>
                        
                        <div class="form-group" style="padding-top: 4.5%; padding-bottom: 4.5%">
                            <input name = "submit" type="submit" class="btnSubmit" value="Login">
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








