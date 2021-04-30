
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
	
	<form action="store.php" method="POST">
                <div class="form-group row">
					<label for="ValueofGold" class="col-sm-6 col-form-label">Value of Gold:</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="1" placeholder="Value of Gold">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="ValueofSilver" class="col-sm-6 col-form-label">Value of Silver</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="2" placeholder="Value of Silver">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="CashInHand&Bank" class="col-sm-6 col-form-label">Cash In Hand & Bank</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="3" placeholder="Cash In Hand & Bank">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="CashDeposit" class="col-sm-6 col-form-label">Cash Deposit</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="4" placeholder="Cash Deposit">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="GivenOutInLoans" class="col-sm-6 col-form-label">Given Out In Loans</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="5" placeholder="Given Out In Loans">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="BusinessInvestmentsShares&Saving" class="col-sm-6 col-form-label">Business Investments, Shares & Saving</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="6" placeholder="Business Investments, Shares & Saving">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="ValueofStockGoods" class="col-sm-6 col-form-label">Value of Stock Goods</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="7" placeholder="Value of Stock Goods">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="CropsProduceRainWater" class="col-sm-6 col-form-label">Crops Produce Dependent on Rain Water</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="8" placeholder="Crops Produce Dependent on Rain Water">
					</div>
				</div>
                <hr/>
				<div class="form-group row">
					<label for="CropsProduceonArtificialIrrigation" class="col-sm-6 col-form-label">Crops Produce totally dependent<br/> on Artificial Irrigation</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="9" placeholder="Crops Produce totally dependent on Artificial Irrigation">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="CropsPonRainonAI" class="col-sm-6 col-form-label">Crops Produce dependent Partially <br/> on Rain Water and Partially on <br/>Artificial Irrigation</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="10" placeholder="Crops Produce dependent Partially on Rain Water and Partially on <br/>Artificial Irrigation">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="AnimalsBirds" class="col-sm-6 col-form-label">Animals/ Birds<br/> (more than 6 months Old)</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="11" placeholder="Value of Animals/ Birds">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="BorrowedMoney" class="col-sm-6 col-form-label">Borrowed Money</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="12" placeholder="Borrowed Money">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="WagesEmployees" class="col-sm-6 col-form-label">Wages of Employees</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="13" placeholder="Wages of Employees">
					</div>
				</div>
				<hr/>
				<div class="form-group row">
					<label for="TaxesRentUtilityBills" class="col-sm-6 col-form-label">Taxes, Rent, Utility Bills <br/> (Due immediately)</label>
					<div class="col-md-6">
					<input type="number" class="form-control" name="14" placeholder="Taxes, Rent, Utility Bills">
					</div>
				</div>
				
                    
			
                <input type="submit" class="btn btn-outline-info btn-block" value="Insert Data">
    </form>
	<br/>	
	<a class="btn btn-outline-danger btn-block" href="index.php">Reset</a>
	<br/>	
		
	<br/>
	<footer class="text-center bold my-2"> Designed By Muhammad Al Rafi</footer>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
