<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'snetdb';

$conn = mysqli_connect($host,$user,$password);

$sel = mysqli_select_db($conn,$db);

if(!$conn){


echo"no connection";


}else{

    if(isset($_POST['submit'])){

      $FIRSTNAME = $_POST['firstname'];
      $LASTNAME = $_POST['lastname'];
      $OTHERNAMES = $_POST['other'];
      $USERNAME = $_POST['user'];
      $PROFESSION = $_POST['profession'];
      $PRICERANGE = $_POST['PR'];
      $EMAIL = $_POST['email'];
      $PHONE = $_POST['phone'];
      $ADDRESS = $_POST['address'];
      $GENDER = $_POST['gender'];
      $PASSWORD = $_POST['password'];
      $PASSWORD2 = $_POST['password2'];


      $qry = "INSERT INTO workers (`Firstname`,`Lastname`,`Other`,`Username`,`Profession`,`Price`,`Email`,`Phone`,`Address`,`Gender`,`Password`,`Password2`) VALUE ('$FIRSTNAME', '$LASTNAME','$OTHERNAMES','$USERNAME','$PROFESSION','$PRICERANGE','$EMAIL','$PHONE','$ADDRESS','$GENDER','$PASSWORD','$PASSWORD2')";

    $run = mysqli_query($conn,$qry);

    if(!$run){


echo"not inserted";



    }else{


echo"inserted";

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
<style>


    .navbar{
        margin-top: -10px;
        margin-left: -8px;
        margin-right: -8px;
        background-color: white;
        padding: 10px;
        background-image: url('img2.jpg');
        background-size: cover;
        
        
        
            }

            @keyframes control{

                0% {color:white;}
                
                60% {color:red;}
                
                80% {color:rgb(36, 125, 241);}
                
                100% {color:white;}
                
                
                
                    }

                    .t1{

width: 100%;
text-align: center;
background-color: #ffffff;
margin-top: 15%;
margin-right: -20px;
border: 2px;
border-style: dashed;
border-color: greenyellow;
border-radius: 5px;


                    }



</style>
<body style="background-image: url('barber.png'); background-size:cover;">

    <div class="navbar">

        <h1><a href="index.html" style="text-align: center; font-size:70px; font-family:Arial Rounded MT Bold; color:#ffffff; animation-name: control;animation-duration: 2s;animation-iteration-count: infinite; text-decoration:none;"><i>SCISSOR<span>NET</span></a></i></h1>
    
        </div>

        <div class="t1">

<p style="font-size: 80px; font-weight:bolder; font-family:Brush Script MT;"><i><b>Thanks For Registering with us you will be added to the list of our workers shortly ,Your Patience will be highly appreciated</b></i></p>


        </div><br><br><br>

        <div class="b3" width="100%" style="background-color: black; margin-bottom:-10px; margin-left:-8px; margin-right:-9px; text-align:center; padding:20px;">

            <h2 style="font-family: Arial Rounded MT Bold; color:#ffffff;">SOC<span>IAL</span></h2>
            
            <a href="https://www.facebook.com"><img src="fb.png" alt="" height="50px" width="50px" style="border-radius: 50%;"></a>
            <a href="https://www.instagram.com"></a><img src="insta.png" alt="" height="50px" width="50px" style="border-radius: 50%;"></a>
            <a href="https://www.twitter.com"></a><img src="tw.png" alt="" height="50px" width="50px" style="border-radius: 50%;"></a>
            
            
            </div>

       
    
</body>
</html>