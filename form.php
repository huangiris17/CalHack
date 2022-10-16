<?php
if(isset($_POST['submit']))
    {
        $nickName = $_POST['nickname'];
        $milk = $_POST['milk'];
        $numDate = $_POST['exNum'];

        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "newUser";
        $password = "";
        $dbname = "test";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO input (id, nickName, milk, numDate) VALUES ('0', '$nickName', '$milk', '$numDate')";
        //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Message has been sent successfully!";
    
        }
            else{
                echo "Error, Message didn't send! Something's Wrong."; 
        }
        //connection closed.
        mysqli_close($con);
    }
?>