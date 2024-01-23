<?php

        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server,$username,$password);

        if(!$con)
        {
            die("Connection to this database failed due to" . mysqli_connect_error());
        }
        // else
        // {
        //     echo " Success connecting to the DataBase";
        // }
        
        $Name = $_POST["Name"];
        $Age = $_POST["Age"];
        $Gender = $_POST["Gender"];
        $Email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $Other_Information = $_POST['Other_Information'];
        

        $sql = "INSERT INTO `trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other_Information`, `Date`) VALUES ( '$Name', '$Age', '$Gender', '$Email', '$Phone', '$Other_Information', current_timestamp());";

        echo $sql;




?>