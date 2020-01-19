<?php
    include 'connection.php';
    $sql = "UPDATE weather SET cityname='$_POST[cityname]',weathercondition='$_POST[weathercondition]',degree='$_POST[degree]',date='$_POST[date]' WHERE ID=$_POST[id]";
    if (mysqli_query($conn,$sql)){
        header("refresh:1; url=adminpage.php");
        echo "update is done successfully";
    }else{
        echo "Not Update";
    }

   

?>