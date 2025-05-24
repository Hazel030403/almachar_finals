<?php

  include "includes/dbcon.php";



       //Variable Declaration
        $fn = $_POST ["fname"];
        $ln = $_POST ["lname"];
        $gndr = $_POST ["gender"];
        $adrs = $_POST ["address"];
        $cp = $_POST ["cpnum"];

        //PREPARE SQL STATEMENT
        $qry = "INSERT INTO tbl_accounts (fname,lname,gender,address,cpnum) 
        VALUES ('$fn','$ln','$gndr','$adrs','$cp')";

        //EXECUTE SQL STATEMENT / QUERY
        $res = mysqli_query($con, $qry);

        if($res) {
           // echo "Record Saved";
        header('Location: admin/my_table.php');
       die();
        } 
        else {
            //echo "Error in saving.";
            header('Location: register.php');
           die();
        }
    
?>