<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/abjstyle.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
   
</head>
<body>

    <?php require '../config/header.php';?>

    <div class="container container_margin">
        <div class="row">
            <div class="col-lg-3">
                <?php require '../config/lajnasidebar.php';?>
            </div>
            <div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading "  style="background-color:#8e979f;">
						<h4 class="panel-title">Add Student Hifz</h4>
					</div>

					<div class="panel-body">
						<form action="" method="post">


                            <div class="form-group col-lg-12">
								<label for="my-input">Class</label>
								<select name="" id="" class="form-control">
									<option value="" class="">Select Class</option>
									<option value="">Select Class</option>
									<option value="">Reatrive from db</option>
								</select>
							</div>

                            <input type="button" value="Retrieve" class="btn btn-default pull-right">
						</form>
					</div>
				</div>
			</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading "  style="background-color:#8e979f;">
                        <h4 class="panel-title">Class name From db</h4>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                
                                            <th>Hifz</th>
                                            <th>completed</th>
                                           
                                        </tr>
                                       
                                    </thead>
                                    
                                </table>
                                
                                
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
                                <div class="modal fade" id="modal-id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <?php require '../config/footer.php';?>

</body>
</html>