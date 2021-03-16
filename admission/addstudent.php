<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/abjstyle.css">
</head>
<body>
    <?php require '../config/header.php';?>

    <div class="container container_margin">
        <div class="row">
            <div class="col-lg-3">
                <?php require '../config/admissionsidebar.php';?>
            </div>
            <div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading "  style="background-color:#8e979f;">
						<h4 class="panel-title">Admit Student</h4>
					</div>

					<div class="panel-body">
						<form action="" method="post">


                            <div class="form-group col-lg-6">
								<label for="my-input">Student ID</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>

							<div class="form-group col-lg-6">
								<label for="my-input">Student Name</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>

							<div class="form-group col-lg-6">
								<label for="my-input">Address</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>
							<div class="form-group col-lg-6">
								<label for="my-input">Parent/Guardian Phone</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>

							<div class="form-group col-lg-6">
								<label for="my-input">Parent/Guardian Full Name</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>
							<div class="form-group col-lg-6">
								<label for="my-input">Student Age</label>
								<input id="my-input" class="form-control" type="number" name="">
							</div>

                            

                            <div class="form-group col-lg-6">
								<label for="my-input">Gender</label>
								<select name="" id="" class="form-control">
									<option value="" class="">Select Gender</option>
									<option value="">Male</option>
									<option value="">Female</option>
								</select>
							</div>

                            

                            <div class="form-group col-lg-6">
								<label for="my-input">Assign Class</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>

							<div class="form-group col-lg-6">
								<label for="my-input">Hifz</label>
								<input id="my-input" class="form-control" type="text" name="">
							</div>

							<div class="form-group col-lg-6">
								<label for="my-input">Completed Hifz</label>
								<select name="" id="" class="form-control">
									<option value="" class="">Select Option</option>
									<option value="">Yes</option>
									<option value="">No</option>
								</select>
							</div>

                            

							<input type="button" value="Register" class="btn btn-default pull-right">
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>




    <?php require '../config/footer.php';?>
</body>
</html>