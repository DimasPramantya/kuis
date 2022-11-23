<!DOCTYPE html>
<html>
	<head>
		<title>Result</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
	<body style="background-color: #F9A826; color:white;">
		<?php
			function nominal(string $a)
			{
				$temp="";
				for($i=strlen($a)-1; $i>=0; $i--)
				{
					$temp=$temp.$a[$i];
					if(abs($i-(strlen($a)-1))%3==2 && $i!=0)
					{
						$temp=$temp.".";
					}
				}
				return strrev($temp);
			}
		?>
		<br><br><br>
		<center>
			<h1>Thank You</h1>
			<h2>for Shopping with Us</h2>
			<br>
			<table class="table table-striped-columns" style="background-color:#F9A826; width:400px;">
	  			<tr>
	  				<td>Product</td>
	  				<td><?=$_POST['product'];?></td>
	  			</tr>
	  			<tr>
	  				<td>Category</td>
	  				<td><?=$_POST['category'];?></td>
	  			</tr>
	  			<tr>
	  				<td>Price</td>
	  				<td><?="Rp".nominal($_POST['price']).",00";?></td>
	  			</tr>
	  			<tr>
	  				<td>Qty</td>
	  				<td><?=$_POST['qty'];?></td>
	  			</tr>
	  			<tr>
	  				<td>Total</td>
	  				<td><?="Rp".nominal($_POST['price']*$_POST['qty']).",00";?></td>
	  			</tr>
	  			<tr>
	  				<td>Payment</td>
	  				<td><?=$_POST['payment'];?></td>
	  			</tr>
	  			<tr>
	  				<td>Note</td>
	  				<td><?=$_POST['note'];?></td>
	  			</tr>
			</table>
			<br><br>
			<form method="POST" action="order.php">
				<button type="submit" class="btn btn-outline-light">Buy another Products</button>
			</form>
			<br><br><br>
		</center>	
	</body>
</html>