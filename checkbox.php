<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

    <div class="container-fluid">
        <form action="checkbox.php" method="post">
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Cricket">Cricket
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Coocking">Coocking
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Dancing">Dancing
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Driving">Driving
            <input type="submit" value="Insert" name="btn" class="btn btn-lg btn-primary">
        </form>
    </div>


<?php 

$connection = mysqli_connect("localhost","root","","checkbox");
if(isset($_POST["btn"]))
{
  $hobbies =  $_POST["hobbies"];
  $hobbie_str = implode(",",$hobbies);
  $insert = "INSERT INTO `hobbies`(`hobbies`) VALUES ('[value-1]','[value-2]') VALUES ('$hobbie_str')";
  mysqli_query($connection,$insert);
}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

