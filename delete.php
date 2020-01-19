<?php
 include 'connection.php';
 $sql2= "DELETE  FROM weather WHERE id='$_GET[id]'" ;
 if(mysqli_query($conn,$sql2)){
     header("refresh:1; url=updatedata.php") ;
 }else{
     echo "COULD NOT DELETE" ;
 }


?>