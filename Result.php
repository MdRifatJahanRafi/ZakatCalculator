<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'zakat');
    $sql = "SELECT * FROM user ORDER BY id DESC LIMIT 01";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Zakat Calculator</title>
</head>
<body style="background-color: ;margin-left:100px; margin-right:100px;">
	<div class="my-4">
		<h1 class="text-center text-uppercase"><a href="index.php"> Zakat Calculator</a> </h1>
	</div>
	
	<table class="table table-bordered">
					
					<tr>
					  <th scope="col">Name</th>
					  <th scope="col">Estimated Value</th>
					  <th scope="col">Zakat Payable</th>
					</tr>
                    
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['1']; ?></td>
					  <td><?php $sum1=0.025 * $row['1']; echo $sum1; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['2']; ?></td>
					  <td><?php $sum2=0.025 * $row['2']; echo $sum2; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['3']; ?></td>
					  <td><?php $sum3=0.025 * $row['3']; echo $sum3; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['4']; ?></td>
					  <td><?php $sum4=0.025 * $row['4']; echo $sum4; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['5']; ?></td>
					  <td><?php $sum5=0.025 * $row['5']; echo $sum5; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['6']; ?></td>
					  <td><?php $sum6=0.025 * $row['6']; echo $sum6; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['7']; ?></td>
					  <td><?php $sum7=0.025 * $row['7']; echo $sum7; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['8']; ?></td>
					  <td><?php $sum8=0.025 * $row['8']; echo $sum8; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['9']; ?></td>
					  <td><?php $sum9=0.025 * $row['9']; echo $sum9; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['10']; ?></td>
					  <td><?php $sum10=0.025 * $row['10']; echo $sum10; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Value of Gold</th>
					  <td><?php echo $row['11']; ?></td>
					  <td><?php $sum11=0.025 * $row['11']; echo $sum11; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Borrowed Money</th>
					  <td><?php echo $row['12']; ?></td>
					  <td><?php $sum12=0.025 * $row['12']; echo $sum12; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Wages of Employees</th>
					  <td><?php echo $row['13']; ?></td>
					  <td><?php $sum13=0.025 * $row['13']; echo $sum13; ?></td>
					</tr>
					
					<tr>
					  <th scope="row">Taxes, Rent, Utility Bills <br/> (Due immediately)</th>
					  <td><?php echo $row['14']; ?></td>
					  <td><?php $sum14=0.025 * $row['14']; echo $sum14; ?></td>
					</tr>
					
					<?php 
					$asset = $row['1']+$row['2']+$row['3']+$row['4']+$row['5']+$row['6']+$row['7']+$row['8']+$row['9']+$row['10']+$row['11']+$row['12']+$row['13']+$row['14'];
					
					
					$zakat = $asset * 0.025;
					?>
					
					<tr>
					  <th scope="row">Total</th>
					  <td><?php echo $asset; ?></td>
					  <td><?php echo $zakat; ?></td>
					</tr>
					
					<?php } ?>

                </table>
				<br/>
		<a class="btn btn-danger btn-lg" href="index.php">Back to Calculator</a>
		<a href="#" class="btn btn-primary btn-lg">Print PDF</a>
		
		
		<br/><br/>
	<footer class="text-center bold my-2"> Designed By Muhammad Al Rafi</footer>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
