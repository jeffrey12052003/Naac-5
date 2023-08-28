<?php
$link = mysqli_connect("localhost", "root", "", "naac_criterion_5");
$exam = $_POST['exam'];
$name = $_POST['name'];
$imageData = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
$imageType = $_FILES['image1']['type'];
echo "$imageType";
$query = "UPDATE exam_qualifications SET Proof_file = '$imageData', Proof_file_type = '$imageType' WHERE Student_name LIKE '$name%' AND Exam = '$exam'";
$req = mysqli_query($link, $query) or die(mysqli_error($link));
if($req == 1){
    echo "<br> Inserted!";
}
?>
<iframe src ="displaypdf.php?name=<?php echo $name;?>"></iframe>