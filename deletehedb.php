<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher Education database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "gammadesign.css" rel = "stylesheet"/>
</head>
<body>
<?php
    if(isset($_SESSION['staff'])){
?>
<div class="blurimage" style="background-image: url('bcimage2.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:3.57vw;font-weight:700;left:34%;top:20%;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px black;text-align:center;float:left;">
<i>Fill the student details!</i></div>
<form method = "POST" action="deletehedbsuccess.php" class="form">
    <input type="text" name="name" placeholder="Student Name" class = "blurtext" style="font-size:20px;top:40%;left:35.5%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type = "submit" value = "Submit" class = "button1" style ="left:41%"> 
</form>
<?php
    }
    else{?>

        <body style = "background-color:#05A2C6;padding-bottom:50px;">
        <nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
        </nav>
        <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:2.22vw;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Please login to view this page!</p></i><br><br>

    <?php
    }
    ?>
</body>
</html>