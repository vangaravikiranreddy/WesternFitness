<?php
$server="localhost:3307";
$username="root";
$password="";
$db="westernfitness";
$conn=mysqli_connect($server,$username,$password,$db);
if($conn->connect_error)
{
die("Error in connection".$conn->error);
}
$name=isset($_POST['name']) ? $_POST['name'] : '';
$age=isset($_POST['age']) ? $_POST['age'] : '';
$mobile=isset($_POST['mobile']) ? $_POST['mobile'] : '';
$address=isset($_POST['address']) ? $_POST['address'] : '';
$sql="insert into entry values('$name','$age','$mobile','$address')";
if($conn->query($sql)==TRUE)
{
    echo "
    <!DOCTYPE html>
    <html>
    <head>
    <style>
    body{
        background-color:yellow;
    }
    </style>
    </head>
    <body>
    <script>alert('Inserted Successfully');</script>
    </body>
    </htmll>
    
    ";
//echo "Successfully Inserted:";
}
else{
echo "Error:".$conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VamshiFitness</title>
    <link rel="stylesheet" href="Breakfast.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="left">
           <img src="https://w7.pngwing.com/pngs/1018/952/png-transparent-man-holding-barbell-garage-gym-fitness-centre-computer-icons-physical-fitness-bodybuilding-white-logo-monochrome.png" alt="">
           <h3>Vamshi Fitness</h3>
        </div>
        <div class="mid">
               <div class="nav">
                   <li><a href="#" class="active">Home</a></li>
                   <li><a href="#">About Us</a></li>
                   <li><a href="#">FAQ's</a></li>
               </div>
        </div>
        <div class="right">
              <button class="btn">Contact Us</button>
              <button class="btn">Email Us</button>        
        </div>
    </div>
    <div class="forms">
        <h1>Register<h1>
        <form action="Gym.php" method="post">
            <div class="inputs">
                <input type="text" name="name" id="name" placeholder="Enter Name">
                <input type="textr" name="age" id="age" placeholder="Enter Age">
                <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number">
                <input type="text" name="address" id="address" placeholder="Enter address">
                <input type="submit" value="submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>
