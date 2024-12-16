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
<?php
$connection = mysqli_connect("localhost","root","","checkbox");
$select = "SELECT `ID`, `hobbies` FROM `hobbies` where id = 7 ";
$data = mysqli_query($connection,$select);
if(mysqli_num_rows($data)> 0){
    while($row = mysqli_fetch_assoc($data)){

       $value =  explode(",",$row["Hob"]);
?>


   <div class="container-fluid">
        <form action="checkbox.php" method="post">
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Cricket" <?php if(in_array("Cricket",$value)) echo "checked" ?>>Cricket
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Coocking" <?php if(in_array("Coocking",$value)) echo "checked" ?>>Coocking
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Dancing"  <?php if(in_array("Dancing",$value)) echo "checked" ?>>Dancing
            <input type="checkbox" name="hobbies[]" class="form-check-input" value="Driving"  <?php if(in_array("Driving",$value)) echo "checked" ?>>Driving
        </form>
    </div>

<?php }} ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>