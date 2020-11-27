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
    <div class="container-form">
        <h1>Add New Record</h1>
        <form action="insert.php" method="post" class="form-dark mt-4">
            <div class="form-group">
                <label for="inputName">NAME</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="inputHeight">HEIGHT</label>
                <input type="number" name="height" id="inputHeight" class="form-control" placeholder="Enter your height">
            </div>
            <div class="form-group">
                <label for="inputWeight">WEIGHT</label>
                <input type="number" name="weight" id="inputWeight" class="form-control" placeholder="Enter your weight">
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-outline-orange mr-1">Add</button>
                <a role="button" class="btn btn-outline-secondary" href="guestbook.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>