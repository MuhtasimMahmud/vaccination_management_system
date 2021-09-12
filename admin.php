<?php 

    session_start();
    include('auth/connection.php');

    $m = '';
    $conn = connect();

    $sql = "SELECT * from users_info";
    $res = $conn->query($sql); 

?>
 
<html>
    <head>
        <title> Admin Page</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
    </head>

    <body>

        <div style="margin-top: 50px; margin-left: 50px">
            <h3><a href="dashboard.php"> HOME PAGE</a></h3>
        </div>
        <div>
            <h1> VACCINATED USERS </h1>
        </div>

        <table style="margin-left: 200px;" class="table table-dark" id="table" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
            <thead class="thead-light">
                <tr>
                    <th style="padding-right: 200px; color:green"><h3>User</h3></th>
                    <th style="padding-right: 200px; color:green"> <h3>Email</h3></th>
                    <th style="padding-right: 200px; color:green"><h3>Vaccinated</h3></th>
                    <th style="padding-right: 200px; color:green"><h3>Account_Creation_Time</h3></th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(mysqli_num_rows($res)>0) 
            {
                while ($row = mysqli_fetch_assoc($res)) 
                {

                    echo '<tr>';
                    if($row['user_name'] != 'admin')
                    {
                        echo '<td>'. $row['user_name'].'</td>';
                        echo '<td>'. $row['email'].'</td>';
                        if($row['is_vaccinated'] == 0)
                        {
                            echo '<td>'. "No".'</td>';
                        }
                        else
                        {
                            echo '<td>'. "YES".'</td>';
                        }
                        echo '<td>'. $row['created_at'].'</td>';
                        echo '</tr>';
                    }

                }
            }
            ?>

            </tbody>
        </table>



    </body>

</html>