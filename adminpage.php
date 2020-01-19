<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<marquee><h1> WELCOME ADMIN </h1></marquee>
<?php
    extract($_POST) ;
    if(!isset($cityname)) {
        $cityname = $weathercondition = $degree = $date = '' ;
        }

    echo <<<_A_


    <form action="adminpage.php" method="post">
    
    <center><table border="1" width="400" height="300">
    <tr>
        <td colspan="5" align="center" bgcolor="orange">ADD WEATHER CONDITION</td>
    </tr>

    <tr>
        <td align="right">CITY:</td><td> <input type="text" name="cityname" value="$cityname"></td>
    </tr>
    <tr>
        <td align="right">Weather Condition:</td><td><input type="text" name="weathercondition" value="$weathercondition"></td>
    </tr>
    <tr>
        <td align="right">DEGREE:</td><td><input type="float" name="degree" value="$degree" ></td>
    </tr>
    <tr>
        <td align="right">Date: </td><td> <input type="date" name="date" value="$date"></td>
    </tr>
    <tr>
        <td colspan="5" align="center"><input type="submit" name ="submit" value="submit"></td>
    </tr>
        
    </table></center>
</form> 
_A_;
?>

<br>
    <center><h2>To  Update records Click the link below </h2>
    <center><button class="button "type="button" onclick="window.location.href = 'updatedata.php';">UPDATE DATA BASE</button>
    <center><button class="button "type="button" onclick="window.location.href = 'index.php';">LOG OUT</button>
<?php
    include 'connection.php' ;
        
        if(isset($_POST['submit'])){
        $cityname=$_POST['cityname'];
        $weathercondition=$_POST['weathercondition'];
        $degree=$_POST['degree'];
        $date=$_POST['date'];

        if($cityname==NULL||$weathercondition==NULL || $degree==NULL ||$degree>60 || $degree<-30 || $date==NULL){
            echo '<script language="javascript">';
		echo 'alert("CHECK IF YOU ENTER ALL THE VALUES ");';
		echo 'window.location = "adminpage.php"';
		echo '</script>';
        }

        $query = "insert into weather(cityname,weathercondition,degree,date) values ('$cityname','$weathercondition','$degree','$date')";
        if(mysqli_query($conn,$query)){
            echo "<h2>WEATHER DATA IS INSERTED SUCCESFULLY</h2>";
        }
    }
?>

</body>
</html>