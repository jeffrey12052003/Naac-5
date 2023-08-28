<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Technology</title>
    <link href = "gammadesign.css" rel = "stylesheet"/>
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
    <div class="blurimage" style="background-image: url('mit.jpeg')"></div>
    <div class = "blurtext" style = "font-size:2.78vw">Imagination is more important<br> than knowledge.</div>

    <a href="naacfrontpage.php"><button class = "button1" style = "left:70%;">NAAC Criterion 5</button></a>
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