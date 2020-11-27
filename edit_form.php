<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
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

$id = $_POST['id'];
$sql = "SELECT * FROM bmi_records WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$record = mysqli_fetch_array($res);
?>
    <div class="container-form">
        <h1>Edit Record</h1>
        <form action="update.php" method="post" class="form-dark mt-4">
            <input type="hidden" name="id" value=<?php echo $record['id'];?>>
            <div class="form-group">
                <label for="inputName">NAME</label>
                <?php
                    echo '<input type="text" name="name" id="inputName" class="form-control" placeholder="Enter your name" value="'.$record["name"].'" disabled>';
                ?>
            </div>
            <div class="form-group">
                <label for="inputHeight">HEIGHT (cm)</label>
                <input type="number" step="0.01" name="height" id="inputHeight" class="form-control" placeholder="Enter your height" required value="<?php echo $record["height"]; ?>">
            </div>
            <div class="form-group">
                <label for="inputWeight">WEIGHT (kg)</label>
                <input type="number" step="0.01" name="weight" id="inputWeight" class="form-control" placeholder="Enter your weight" required value="<?php echo $record["weight"]; ?>">
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-outline-orange mr-1">Save</button>
                <a role="button" class="btn btn-outline-secondary" href="guestbook.php">Back</a>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>