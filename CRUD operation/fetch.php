<?php
include "database_connection.php";
?>
<html>
    <head>
        <title>Fetch</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> 
    <body>
    <form method="POST" action="">
        <input type="text" name="Search">
        <button name="submit">Search data</button>
</form>
       <table border="2">
            <tr>
                <th>id</th>
                <th>user_name<button name="btn1" class="fa fa-caret-down" aria-hidden="true"></button></th>
                <th>user_password</th>
              </tr>
            <?php
            
            
                if((isset($_POST['btn1'])) && (isset($_POST['submit']))){
                    
                    $sql="SELECT * FROM `bca` WHERE `user_name` like '%$search_data%' ORDER BY `user_name` ASC";
                    $data=mysqli_query($connection,$sql);   
                    $i=1;
                    while($row=mysqli_fetch_assoc($data))
                        {
                            $database_connection_user_name=$row['user_name'];
                            $database_connection_user_password=$row['user_password'];
                            echo"<tr>";
                            echo"<td>$i</td>";
                            echo"<td>$database_connection_user_name</td>";
                            echo"<td>$database_connection_user_password</td>";
                            echo"</tr>";
                            $i++;
                        }
                }
                else if(isset($_POST['btn1']) && !(isset($_POST['submit']))){
                    $sql="SELECT * FROM `bca` ORDER BY `user_name` ASC";
                    $data=mysqli_query($connection,$sql);   
                    $i=1;
                    while($row=mysqli_fetch_assoc($data))
                        {
                            $database_connection_user_name=$row['user_name'];
                            $database_connection_user_password=$row['user_password'];
                            echo"<tr>";
                            echo"<td>$i</td>";
                            echo"<td>$database_connection_user_name</td>";
                            echo"<td>$database_connection_user_password</td>";
                            echo"</tr>";
                            $i++;
                        }
                }
                else if(isset($_POST['submit']) &&!(isset($_POST['btn1']))){
                    $search_data=$_POST['Search'];
                    
                        $sql="SELECT * FROM `bca` WHERE `user_name` like '%$search_data%'";
                    
                    
                    
                    $search_data=mysqli_query($connection,$sql);
                    $i=1;
                    while($row=mysqli_fetch_assoc($search_data))
                        {
                            $database_connection_user_name=$row['user_name'];
                            $database_connection_user_password=$row['user_password'];
                            echo"<tr>";
                            echo"<td>$i</td>";
                            echo"<td>$database_connection_user_name</td>";
                            echo"<td>$database_connection_user_password</td>";
                            echo"</tr>";    
                            $i++;
                        }
                   }
                    else {
                        # code...
                        
                            $sql="SELECT * FROM `bca`";
                        
                        
                        $fetch=mysqli_query($connection,$sql);
                        $i=1;
                        // $row=mysqli_fetch_assoc($fetch);
                        // print_r($row);die();
                        while($row=mysqli_fetch_assoc($fetch)){
                            //print_r($row);
                            $database_connection_id=$row['id'];
                            $database_connection_user_name=$row['user_name'];
                            $database_connection_user_password=$row['user_password'];
                            echo"<tr>";
                            echo"<td>$i</td>";
                            echo"<td>$database_connection_user_name</td>";
                            echo"<td>$database_connection_user_password</td>";
    
                            echo"<td><a href='edit.php?edit=$database_connection_id'>Update</a></td>";
                            echo"<td><a href='delete.php?delete=$database_connection_id'>Delete</a></td>";
                            echo"</tr>";
                            $i++;
                    }
                }
            ?>
        </table>
    </body>
</html>