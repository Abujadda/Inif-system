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
                        <h4 class="panel-title">View Funds Summary</h4>
                    </div>

                    <div class="panel-body">

                        <!--Form to Querry Databaes and return the payed Amount -->
                         
                        <form method="POST" action="">

                            <div class="form-group col-lg-4">
                                <label for="my-input">session</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <input type="button" value="View" class="btn btn-default form-control">


                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        
                                        <th>First Term</th>
                                        <th>Second Term</th>
                                        <th>third Term</th>
                                        <th>Total Amount</th>

                                        
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