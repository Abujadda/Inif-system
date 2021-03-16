<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/abjstyle.css">
	
</head>
<body>
	 
	
	 <?php require 'config/header.php';?>

		<div class="container container_margin">
			<div class="row">
				<div class="col-lg-3">
					<?php require 'config/hmsidebar.php';?>
					
					
				</div>
				
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-heading "  style="background-color:#8e979f;">
							<h4 class="panel-title">Manage admin</h4>
						</div>

						<div class="panel-body">
							<form action="" method="post">

								<div class="form-group col-lg-6">
									<label for="my-input">Name</label>
									<input id="my-input" class="form-control" type="text" name="">
								</div>
								<div class="form-group col-lg-6">
									<label for="my-input">Office</label>
									<select name="" id="" class="form-control">
										<option value="" class="">Select Post</option>
										<option value="Accountant">Accountant</option>
										<option value="Admission_Officer">Admission Officer</option>
										<option value="HOD">HOD</option>

									</select>
								</div>

								<div class="form-group col-lg-6">
									<label for="my-input">Username</label>
									<input id="my-input" class="form-control" type="text" name="">
								</div>
								<div class="form-group col-lg-6">
									<label for="my-input">Password</label>
									<input id="my-input" class="form-control" type="password" name="">
								</div>

								<input type="button" value="Update" class="btn btn-default pull-right">

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php require 'config/footer.php';?>
</body>
</html>