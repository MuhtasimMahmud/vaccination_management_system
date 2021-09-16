<?php 
    session_start();
    include ('navigation.php'); 
?>
 


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Dashboard </title>

        <link rel="stylesheet" type="text/css" href="css/dashboard.css">

        <!-- <style>
			body
				{
					background-image: url('https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29yb25hfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80');	
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-size: 100px 300px;
				}
		</style> -->

    </head>


    <body>

        <div>
            <div class="buttons">
                <a href="#"><button class = "bt" type="submit"> <b>Booking For vaccine</b> </button></a>
            </div>

            <div class="buttons">
                <a href="#"> <button class = "bt" type="submit"> <b> Vaccine Status </b></button> </a>
            </div>

            <div class="buttons">
                <a href="#"><button class = "bt" type="submit"><b> Vaccine card </b></button></a>
            </div>
        </div>

    </body>

</html>

