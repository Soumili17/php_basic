<?php
include 'database_connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <div class="center">
            <form method="POST" action="">
                
                    <input type="text" name="user_name" placeholder="user_name"><br>
                    <input type="text" name="user_password" placeholder="user_password"><br>
                    <button name="login"> SUBMIT </button>
            </form>
        </div>
        <?php
        if(isset($_POST['login']))
        {
            echo $user_name=$_POST['user_name'];
            echo $user_password=$_POST['user_password'];
           
            $sql="INSERT INTO `bca`(`user_name`, `user_password`) VALUES ('$user_name','$user_password')";
            $insert=mysqli_query($connection,$sql);
            if($insert){
                echo"insert successful";
            }
            else{
                echo"useless";
            }
        }
        ?>
        
    </body>
</html>
                    