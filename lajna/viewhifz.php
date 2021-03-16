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
                <?php require '../config/lajnasidebar.php';?>
            </div>
            
            <div class="col-lg-9">
                <div class="panel panel-default">

                    <div class="panel-heading" style="background-color:#8e979f;">
                        <h4 class="panel-title">View Hifz</h4>
                    </div>

                    <div class="panel-body">
                        <form action="">
                            <div class="form-group col-lg-5">
                                <label for="my-input">Starting between</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>
                            <div class="form-group col-lg-5">
                                <label for="my-input">And</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                        
                            <br><br>
                            <input type="button" value="VIew" class="btn btn-default pull-right" >

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
                                            <th>Class</th>
                                            <th>Hifz</th>
                                            <th>completed</th>

                                            
                                        </tr>
                                    
                                    </thead>
                                    
                                </table>
                                
                                
                            </form>
                    </div>
                </div> 
            </div>

        </div>

    </div>




    <?php require '../config/footer.php';?>



    <script src="../js/jquery.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>


</body>
</html>