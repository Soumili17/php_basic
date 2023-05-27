<form method="POST" action="">
    <?php
        include "database_connection.php";
        if($_GET['edit']){
            $edit_id=$_GET['edit'];
            $sql="SELECT * FROM `bca` WHERE id=$edit_id";
            $edit_data=mysqli_query($connection,$sql);
            while($row=mysqli_fetch_assoc($edit_data))
            {
                $database_connection_user_name=$row['user_name'];
                $database_connection_user_password=$row['user_password'];
                echo "<input type='text' name='edit_user_name' value='$database_connection_user_name'><br>";
                echo "<input type='text' name='edit_user_password' value='$database_connection_user_password'><br>";
            }
        }
    ?>
    <button name="submit">Update</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $edit_user_name=$_POST['edit_user_name'];
        $edit_user_password=$_POST['edit_user_password'];
        $sqll="UPDATE `bca` SET `user_name` = ' $edit_user_name', `user_password` = '$edit_user_password' WHERE `bca`.`id` = $edit_id";
        $edit_insert=mysqli_query($connection,$sqll);
        header("location:fetch.php");
    }
    ?>
