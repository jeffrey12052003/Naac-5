<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href = "gammadesign.css" rel = "stylesheet"/>

   
    <title>NAAC Criterion 5</title>
</head>
<body>
<?php
    if(isset($_SESSION['student'])){
?>
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginstudentsuccess.php">Dashboard</a>
        <a href = "logout.php" style = "float:right;">Logout</a>
</nav>
<?php 
    }
    elseif(isset($_SESSION['staff'])){
?>
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginstaffsuccess.php">Dashboard</a>
        <a href = "logout.php" style = "float:right;">Logout</a>
</nav>
<?php
    }
    else
    {
?>
      <nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
    </nav>
<?php
    }
?>
    
<div class="blurimage" style="background-image: url('bcimage.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #1BEB85;font-size:3.9vw;font-weight:700;left:36.5%;top:23%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px black;">NAAC Criterion 5</div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:2.38vw;font-weight:700;left:35.2%;top:40%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;float:left;">
<i>Student participation and activities</div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:2.38vw;font-weight:700;left:37%;top:49.5%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;float:left;">
Student mentoring and support</div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:2.38vw;font-weight:700;left:42%;top:59%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;float:left;">
Student progression</i></div>
<div class = "blurtext" style = "font-family: Decorative;font-style:italic;color:rgb(255, 234, 138);font-size:2.06vw;left: 9.5%;top:74%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;float:left;">
Our students have qualified in TOEFL, GRE, IELTS and various examinations and have progressed<br> on to higher education in many foreign institutions! </i></div>
<div class = "blurtext" style = "font-family: Cursive;color:rgb(255, 234, 138);font-size:2.23vw;font-weight:0;left:34.5%;top:93%;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;float:left;">
<- Click here to view them -></i></div>
<a href="naacsearch.php"><button class = "button" style= "top: 91%; left: 10.5%;">Exam qualifications</button></a>
<a href="highereducation.php"><button class = "button1" style= "top: 91%; left: 72%;">Higher Education</button></a>
<div class="footer" style = "left: 0;
    bottom: 0;
    width: 100%;
    font-weight: normal;
    color: white;
    text-align: center;
    padding-top:12px;position:fixed;">
        <p>
            <a href="#"  style = "text-decoration: none;
    color: rgb(10, 10, 10);
    font-size:17px;
    font-style: italic;">Naac Criterion 5</a>
        </p>
</div>
</body>

</html>