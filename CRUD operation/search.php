<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="Search">
        <button name="submit">Search data</button>
</form>
    <table border="2">
            <tr>
                <th>id</th>
                <th>user_name</th>
                <th>user_password</th>
            </tr>
        <?php
         include "database_connection.php";
       if(isset($_POST['submit'])){
        echo $search_data=$_POST['Search'];
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
    ?>
</table>   
</body>
</html>