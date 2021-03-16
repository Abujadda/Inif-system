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
                        <form method="POST" action="">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>Student Address</th>
                                            <th>Parent/Guardian Phone</th>
                                            <th>Parent/Guardian Full Name</th>
                                            <th>Student Age</th>
                                            <th>Gender</th>
                                            <th>Class Assigned</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                                <input type="button" value="Print" class="btn btn-default ">
                            </form>
					</div>
				</div>
			</div>
        </div>
    </div>




    <?php require '../config/footer.php';?>
</body>
</html>