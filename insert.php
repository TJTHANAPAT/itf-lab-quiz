<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$dbconfig = include('dbconfig.php');
$conn = mysqli_connect($dbconfig['host'], $dbconfig['username'], $dbconfig['password'], $dbconfig['database']);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$height = $_POST['height']; // height in cm unit
$weight = $_POST['weight']; // weight in kg unit
$bmi = $weight/(($height/100)**2);
// echo 'BMI: '.$bmi;
$sql = "INSERT INTO bmi_records (name, height, weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container-message-box text-center">
            <span class="icon">✓</span>
            <h4 style="color:#fff">Your BMI is'.$bmi.'</h4>
            <a role="button" class="btn btn-outline-orange mt-3" href="guestbook.php">Home</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
</body>
</html>