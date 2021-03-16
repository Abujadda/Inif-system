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
        <?php require 'config/conn.php';?>
            <div class="col-lg-3">
                <?Php require 'config/hmsidebar.php';?>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default">

                    <div class="panel-heading" style="background-color:#8e979f;">
                        <h4 class="panel-title">Add Class</h4>
                    </div>

                    <div class="panel-body">
                        <form action="">
                            <div class="form-group col-lg-5">
                                <label for="my-input">Class Name</label>
                                <input id="my-input" class="form-control" type="text" name="">
                            </div>

                            <div class="form-group col-lg-5">
                                <label for="my-input">Category</label>
                                <select name="" id="" class="form-control">
                                    <option value="Database" class="disabled">Select Class</option>
                                    <option value="Database">Male</option>
                                    <option value="Database">Female</option>
                                    <option value="Database">All Genders</option>
                                </select>
                            </div>
                            <br><br>
                            <input type="button" value="Add" class="btn btn-default pull-right form-control" >

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php require 'config/footer.php' ;?>
</body>
</html>