<!DOCTYPE html>
<html>
	<head>
		<title>Order</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
	<body style="margin:0px 30px 0px 30px;">
		<div container style="padding:30px;">
			<div class=row>
				<div class="col-md-9">
					<form method="POST" action="result.php">
						<div class="mb-3">
						 	<label for="exampleFormControlInput1" class="form-label">Product</label>
						 	<input type="text" class="form-control" id="exampleFormControlInput1" name="product" required>
						 	<br>
						 	<label for="exampleFormControlInput1" class="form-label">Category</label>
							<select class="form-select" name="category" aria-label="Default select example" required>
								<option value="Gadget">Gadget</option>
								<option value="Health">Health</option>
								<option value="Food and Drink">Food and Drink</option>
								<option value="Sport">Sport</option>
							</select>
							<br>
							<div class=row>
								<div class="col-md-6">
									<label for="exampleFormControlInput1" class="form-label">Price</label>
							 		<input type="number" class="form-control" id="exampleFormControlInput1" name="price" required>
								</div>
								<br>
								<div class="col-md-6">
									<label for="exampleFormControlInput1" class="form-label">Qty</label>
							 		<input type="number" class="form-control" id="exampleFormControlInput1" name="qty" required>
								</div>
							</div>
							<br>
							<label for="exampleFormControlInput1" class="form-label">Payment</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="payment" value="Cash" id="flexRadioDefault1" required>
								<label class="form-check-label" for="flexRadioDefault1">Cash</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="payment" value="Credit Card" id="flexRadioDefault1" required>
								<label class="form-check-label" for="flexRadioDefault1">Credit Card</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="payment" value="Debit Card" id="flexRadioDefault1" required>
								<label class="form-check-label" for="flexRadioDefault1">Debit Card</label>
							</div>
							<br>
							<label for="exampleFormControlTextarea1" class="form-label">Note</label>
	  						<textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="1"></textarea>
	  						<br>
	  						<div class="d-grid gap-2">
								<button class="btn btn-outline-dark" type="submit">Buy</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3">
					<img src="card.png" style="width:100%;">
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</body>
</html>