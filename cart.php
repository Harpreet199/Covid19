

<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 Analysis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+script" rel="stylesheet">
</head>
<body class="container" style="background-color: #26d0c9">
	<h1 class="text-center text-danger mb-5"
	style="font-family: 'Abril Fatface', cursive;"> COVID-19 ANALYSIS <h1>


<div class="row">
<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'covid');

/*if($con){
	echo "connection successful";
}else
{
	echo "Connection failed";
}*/

$query ="SELECT `name`, `image` FROM `covid_analysis` ";

$queryfire = mysqli_query($con,$query);

$num = mysqli_num_rows($queryfire);

if($num>0){
	while($product = mysqli_fetch_array($queryfire)){
	?>
<div class="col-lg-3 col-md-3 col-sm-12">
	<form>
		<div class="card">
			<h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo $product['name']; ?> </h6>
		<div class="card-body">
			<img src="<?php echo $product['image']; ?>" alt="state" class="img-fluid mb-2">
			<!--<h6> &#8377 <?php echo $product['price']; ?><span> (<?php echo $product['discount']; ?>% off )</span></h6>

			<h6 class="badge badge-success"> 4.4 <i class="fa fa-star"></i></h6>

			<input type="number" name="" class="form-control" placeholder="Quantity">-->
		</div>
		<div class="btn-group d-flex">
		<button class="btn btn-success flex-fill"> Death Cases</button><button class="btn btn-warning"> Confirmed Cases</button>
	</div>
	</div>

	</form>
</div>
<?php }} ?>
</div>
</body>
</html>
