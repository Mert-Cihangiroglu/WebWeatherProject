
<?php
 include 'connection.php' ;
 $output ='' ;
 if(isset($_POST['search'])){
     $searchq = $_POST['search'];
     $searchq =preg_replace("#[^0-9a-z]#i","",$searchq);
     $query = mysqli_query($conn,"SELECT * FROM weather WHERE cityname LIKE '%$searchq%' ORDER BY cityname,date") or die ("could not search!!!");
     $count = mysqli_num_rows($query);
     
     if($count == 0){
         $output = 'THERE WAS NO SEARCH RESULTS !' ;
     }else{
         $output .= '<center><table border="2"  >';
         while($row =mysqli_fetch_array($query)){
            $cityname = $row['cityname'];
            $weathercondition =$row['weathercondition'];
            $degree =$row['degree'];
            $date =$row['date'];

            $output .= '<div class="searchresultcss">
                <tr>
                <td align="center">'.$cityname.'</td>
                <td align="center">'.$date.'</td>

                <td align="center">'.$weathercondition.'</td>

                <td align="center">'.$degree.' C</td>

                
            </tr>
                
            </div>' ;

         }
         $output .= '</table></center>';

     } 
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login/css/index.css">
    <script type="text/javascript" src="time.js"></script>
    <title>Document</title>
</head>
<body >
       
    
    <center> <h1 class="header" >Welcome to Weather Report System </h1><br>
    
    <button class="button" id="btn"  "type="button" onclick="window.location.href = 'login.php';">ADMIN LOGIN</button><br>
    <span id="date_time"></span>
     <script type="text/javascript">window.onload = date_time('date_time');</script>


    <form action="index.php" method="post">
        <input  type="text" name="search" placeholder="Search for a city" >
        <input width=600  type="submit" value="SEARCH"/>
</form>



<?php
    print("$output");

?>


</body>
</html>


