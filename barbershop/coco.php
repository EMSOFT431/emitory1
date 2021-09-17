<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "snetdb";

$conn = mysqli_connect($host,$user,$pass);

$select = mysqli_select_db($conn,$db);

if(!$conn){


echo'no conn';

}else{

    echo"conn";

if(isset($_POST['submit'])){

    $LEVEL = $_POST['level'];
    $AGE = $_POST['age'];
    $SKILL= $_POST['skill'];
    $NAME = $_POST['names'];

$sql = "INSERT INTO booth (`Level`,`Age`,`Skills`,`Names`) VALUE ($LEVEL,$AGE,$SKILL,$NAME)";

$run = mysqli_query($conn,$sql);

if(!$run){



echo"err";

}else{

echo"OK!";


}




}







}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
    
        Level:

        <input type="text" name="level" ><br><br>

        age:

        <input type="text" name="age" ><br><br>

        skill:

        <input type="radio" name="skill" value="beginner" >BEGINNER<br><br>
        <input type="radio" name="skill" value="Moderate" >MODERATE<br><br>
        <input type="radio" name="skill" value="Pro" >PROFESSIONAL<br><br>
        <input type="radio" name="skill" value="Worldclass" >WORLDCLASS<br><br>
        <input type="radio" name="skill" value="Legend" >LEGEND<br><br>
        <input type="radio" name="skill" value="veteran" >VETERAN<br><br>

        Names:

        <input type="text" name="names"><br><br>

        <input type="submit" name="submit" value="submit">



    </form>
    
</body>
</html>