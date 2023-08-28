<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Student Name</title>
    <link href = "gammadesign.css" rel = "stylesheet"/>
</head>
<body>
<div class="blurimage" style="background-image: url('bcimage2.jpg')"></div>
<div class = "blurtext" style = "font-family: Times New Roman, Times, serif;color: #FFFFFF;font-size:45px;font-weight:700;left:24.5%;top:20%;text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px black;text-align:center;float:left;">
<i>Search Individual Scores of students</i></div>
<form method = "POST" action="scoresresult.php" class="form">
    <input type="text" name="name" placeholder="Student Name" class = "blurtext" style="font-size:20px;top:40%;left:35.5%;height:40px;padding:24px;border-radius:20px;text-align:center;width:30%;" class = "form">
    <input type = "submit" value = "Submit" class = "button1" style ="left:41%"> 
</form>
</body>
</html>