<?php

    include '../PHP/server.php';
  
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid']; // Getting the id from the url and assigning it to the id variable

        do{
        $sql_delete1 = "DELETE FROM driver WHERE driver.userID = '$id'";
        $sql_delete2 = "DELETE FROM usercontact WHERE usercontact.userID = '$id'";
        $sql_delete3 = "DELETE FROM users WHERE users.userID = '$id'";

        $sql= mysqli_query($con,$sql_delete1)or die("Could Not Perform the Query1");
        $sql= mysqli_query($con,$sql_delete2)or die("Could Not Perform the Query2");
        $sql= mysqli_query($con,$sql_delete3)or die("Could Not Perform the Query3");

        }while(!$sql);        
    } 

?>