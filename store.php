<?php 
    $cal1 = $_POST['1'];
	$cal2 = $_POST['2'];
	$cal3 = $_POST['3'];
	$cal4 = $_POST['4'];
	$cal5 = $_POST['5'];
	$cal6 = $_POST['6'];
	$cal7 = $_POST['7'];
	$cal8 = $_POST['8'];
	$cal9 = $_POST['9'];
	$cal10 = $_POST['10'];
	$cal11 = $_POST['11'];
	$cal12 = $_POST['12'];
	$cal13 = $_POST['13'];
	$cal14 = $_POST['14'];
	

    $conn = mysqli_connect('localhost' , 'root' , '' , 'zakat');

    $sql = "INSERT INTO user VALUES (NULL,'$cal1','$cal2','$cal3','$cal4','$cal5','$cal6','$cal7','$cal8','$cal9','$cal10','$cal11','$cal12','$cal13','$cal14');";
    mysqli_query($conn, $sql);
?>

<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="margin-left: 200px; margin-right: 200px;">

    <br><br>
    <div class="container">
                <h2 class="text-center">Your data has been inserted successful.</h2>           
    </div>
	<br/>
	<a class="btn btn-info btn-block" href="Result.php">Calculate Zakat</a>
	<br/>
	<a class="btn btn-danger btn-block" href="index.php">Back</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>