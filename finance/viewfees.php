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
                <?Php require '../config/financesidebar.php';?>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default">

                    <div class="panel-heading" style="background-color:#8e979f;">
                        <h4 class="panel-title">Students That Pay</h4>
                    </div>

                    <div class="panel-body">

                        <!--Form to Querry Databaes and return the payed student -->
                        <form action="" method="post">

                            <div class="form-group col-lg-6">
                                <label for="my-input">Student Class</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="my-input">Term</label>
                                <select name="" id="" class="form-control">
                                    <option value="" class="">Select Term</option>
                                    <option value="">First term</option>
                                    <option value="">Second term</option>
                                    <option value="">Third Term</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="my-input">Session</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>
                           


                            <input type="button" value="View" class="btn btn-default form-control">
                        </form>
                        <form method="POST" action="">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Student Class</th>
                                        <th>Amount Payed</th>

                                        
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





    <?php require '../config/footer.php' ;?>
</body>
</html>