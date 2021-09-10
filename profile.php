<?php 

    session_start();
    $_SESSION['user']='';
    $_SESSION['userid'] = '';

    include('auth/connection.php');

    $conn = connect();


    $sql = "SELECT * from users_info";
    $res = $conn->query($sql);


    $user = mysqli_fetch_assoc($res);
    $_SESSION['user'] = $user['user_name'];
    $_SESSION['userid'] = $user['id'];
    $_SESSION['email'] = $user['email'];


    if(isset($_POST['update']))
    {
        
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
        <div class="container register-form" style="margin-top: 150px;">
            <div class="form">
                <div class="note">
                    <h2 style="text-align: center; margin-bottom: 100px">Update your profile</h2>
                </div>
    
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" value="<?php echo $user['user_name']; ?>"/>
                            </div>
                            
                            <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Email" value="<?php echo $user['email']; ?>"/>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Password" value=""/>
                            </div>
                
                            <div class="form-group">
                               <input type="text" class="form-control" placeholder="Confirm Password" value="">
                            </div>
                       </div>

                       <div style="margin-left: 550px;margin-top: 100px">
                          <button name="update" type="button" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>
</html>



