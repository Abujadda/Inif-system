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
                        <h4 class="panel-title">Change Password</h4>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="">

                            <div class="form-group col-lg-10">
                                <label for="my-input">Old Password</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <div class="form-group col-lg-10">
                                <label for="my-input">New Password</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="my-input">Comfirm new Password</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <input type="button" value="Submit" class="btn btn-default pull-right">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php require '../config/footer.php' ;?>
</body>
</html>