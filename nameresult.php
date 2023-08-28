<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results!</title>
</head>
<body bgcolor= "white">
<center>
<table style = "border: 5px solid #96D4D4;text-align:center;">
        <tr>
          <th>Academic Year</th>
          <th>Roll Number</th>
          <th>Name</th>
          <th>NET</th>
          <th>SLET</th>
          <th>GATE</th>
          <th>GMAT</th>
          <th>CAT</th>
          <th>GRE</th>
          <th>JAM</th>
          <th>IELTS</th>
          <th>TOEFL</th>
          <th>Other Exams</th>
        </tr>
<?php
    $link = mysqli_connect("localhost", "root", "", "naac_criterion_5");
    $name = $_POST['name'];
    $query = "SELECT * FROM exam_qualifications WHERE student_name = '$name'";
    $req = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($req->num_rows > 0){
        echo "The examination details for $name are :<br><br>";
        while($a = mysqli_fetch_array($req)){
    ?>

        <tr>
          <td><?php echo $a['Academic_year_from']."-".$a['Academic_year_to'];?></td>
          <td><?php echo $a['Exam_roll_no'];?></td>
          <td><?php echo $a['Student_name'];?></td>
          <td><?php echo $a['NET'];?></td>
          <td><?php echo $a['SLET'];?></td>
          <td><?php echo $a['GATE'];?></td>
          <td><?php echo $a['GMAT'];?></td>
          <td><?php echo $a['CAT'];?></td>
          <td><?php echo $a['GRE'];?></td>
          <td><?php echo $a['JAM'];?></td>
          <td><?php echo $a['IELTS'];?></td>
          <td><?php echo $a['TOEFL'];?></td>
          <td><?php echo $a['Other_equivalent_exam'];?></td>
        </tr>
        <?php
                if($a['TANCENT/UPSC'] == 'TANCENT' or $a['TANCENT/UPSC'] == 'UPSC')
                {
                  echo "<br>The student has written ".$a['TANCENT/UPSC']." exam";
                }
        }
        }
        else{
            echo "Details not found please try again";
        }
        ?>
</table>
</center>
</body>
</html>

<div style = "top:auto;height:200px;width:200px;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-bottom: 25px;">
  <img src="jj1.jpg" alt="5 Terre" style="width:200px;">
  <div class="container" style = "text-align: center;
    padding: 10px 20px;">
  Cinque Terre
  </div>
  </div>