<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    include 'connection.php';
    $sql = "SELECT* FROM weather ORDER BY cityname,date"; 
    $records = mysqli_query($conn,$sql);
    
 
    ?>
    <center><table> 
        <tr>
            <th> City Name </th>
            <th> Weather Condition </th>
            <th> degree </th>
            <th> date </th>
            

        </tr></center>
        
   
        <?php
        while($row=mysqli_fetch_array($records)){
            echo "<tr><form action='update.php' method=post>";
            echo "<td><input type=text name=cityname value='".$row['cityname']."'></td>";
            echo "<td><input type=text name=weathercondition value='".$row['weathercondition']."'></td>";
            echo "<td><input type=text name=degree value='".$row['degree']."'></td>";
            echo "<td><input type=text name=date value='".$row['date']."'></td>";
            echo "<input type=hidden name=id value='".$row['id']."'>";           
            echo "<td><input type=submit>";
            echo "<td><a href=delete.php?id=".$row['id'].">DELETE</a></td>" ;   
            echo "</form></tr>";


        }


     
        ?>
        
</body>
</html>