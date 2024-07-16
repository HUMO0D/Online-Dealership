<!DOCTYPE html>
<html>
<body>

<h1>sent</h1>

<button type="button" onclick="history.back()">back</button>

</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
    }

        // database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "laravel";

        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // to ensure that the connection is made
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $sql = "INSERT INTO contactform_entries (id, name, email, msg) VALUES ('0', '$name', '$email', '$msg')";

        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Entries added!";
        }

        // close connection
        mysqli_close($con);



?>



