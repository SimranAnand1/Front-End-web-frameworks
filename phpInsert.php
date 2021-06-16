<?php

$error= "";

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if ($_POST['un'] !="" && $_POST['pw'] !="")
    {
        $servername = "localhost";
        $username = "admin";
        $password = "admin123";
        $database = "asishdb";

        $conn = mysqli_connect($servername, $username, $password, $database);

        $u = $_POST['un'];
        $p = $_POST['pw'];

        $sql = "INSERT INTO vtop VALUES ('$u', '$p')";

        $result = mysqli_query($conn, $sql);
        

    }
    else{

        $error = "both the fields are blank";
    
    }

}





?>

<html>
<form method="POST" action="">
Username<br>
<input   type="text" name ="un"> <br>
Password<br>
<input   type="text" name ="pw"><br>
<input type="submit" value="Login">

</form>

</html>

<?php
echo $error;
?>