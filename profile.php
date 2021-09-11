<?php 

    session_start();
    include('auth/connection.php');

    $m = '';
    $conn = connect();

    $id = $_SESSION['userid'];


    $sql = "SELECT * from users_info WHERE id='$id'";
    $res = $conn->query($sql);


    $user = mysqli_fetch_assoc($res);


    if(isset($_POST['update']))
    {
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $id = $user['id'];


        if($_POST['password'] == $user['password'])
        {    
            $sq= "UPDATE users_info SET user_name = '$user_name' ,email = '$email', phone = '$phone' WHERE id = $id";

            if($conn->query($sq) === true)
            {
                session_destroy();
                header('Location: login.php');
            }
        }
        else
        {
            $m = 'Wrong password !';
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>

        <div style="margin-top: 50px; margin-left: 50px">
                <h3><a href="dashboard.php"> HOME PAGE</a></h3>
        </div>

        <div class="container register-form" style="margin-top: 150px;">
        <form method="POST" action="profile.php" enctype="multipart/form-data">

                <div class="form">
                    <div class="note">
                        <h2 style="text-align: center; margin-bottom: 100px">Update your profile</h2>
                    </div>

                    <div style="text-align: center; color: red; margin-bottom: 40px">
                        <?php echo $m; ?>
                    </div>
        
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name = "user_name" type="text" class="form-control" placeholder="Your Name" value="<?php echo $user['user_name']; ?>" autocomplete="off"/>
                                </div>
                                
                                <div class="form-group">
                                <input name = "email" type="text" class="form-control" placeholder="Your Email" value="<?php echo $user['email']; ?>" autocomplete="off"/>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name = "phone" type="text" class="form-control" placeholder="Phone" value="<?php echo $user['phone']; ?>" autocomplete="off"/>
                                </div>
                    
                                <div class="form-group">
                                <input name = "password" type="password" class="form-control" placeholder="Enter Password to update" value="" autocomplete="off">
                            </div>
                        </div>

                            <div style="margin-left: 550px;margin-top: 100px">
                                <button name="update" type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </div>  
            </form>  
        </div>
    </body>
</html>



