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
    <div class="container container_margin" >
        <div class="row">
            <div class="col-lg-3">
                <?php require 'config/hmsidebar.php';?>
            </div>
            <div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-heading"  style="background-color:#8e979f;">
							<h4 class="panel-title">Add teacher</h4>
						</div>

						<div class="panel-body">
							<form action="" method="post">

								<div class="form-group col-lg-6">
									<label for="my-input">Name</label>
									<input id="my-input" class="form-control" type="text" name="">
								</div>
								
								<div class="form-group col-lg-6">
									<label for="my-input">Address</label>
									<input id="my-input" class="form-control" type="text" name="">
								</div>
								<div class="form-group col-lg-6">
									<label for="my-input">Phone Number</label>
									<input id="my-input" class="form-control" type="number" name="">
								</div>

                                <div class="form-group col-lg-6">
									<label for="my-input">Email Address</label>
									<input id="my-input" class="form-control" type="email" name="">
								</div>

                                <div class="form-group col-lg-4">
									<label for="my-input">Category</label>
									<select name="" id="" class="form-control">
										<option value="" class="">Select Category</option>
										<option value="fulltime">Full Time</option>
										<option value="parttime">Part Time</option>
									</select>
								</div>

                                <div class="form-group col-lg-4">
									<label for="my-input">Salary</label>
									<input id="my-input" class="form-control" type="number" name="">
								</div>
                                <div class="form-group col-lg-4">
									<label for="my-input">Status</label>
									<select name="" id="" class="form-control">
										<option value="" class="">Select Status</option>
										<option value="fulltime">Active</option>
										<option value="parttime">In-active</option>
									</select>
								</div>

								<input type="button" value="Submit" class="btn btn-default pull-right">

							</form>
						</div>
					</div>
			</div>

			
        </div>
    </div>


    <?php require 'config/footer.php';?>
</body>
</html>