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
                <?Php require 'config/hmsidebar.php';?>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-default">

                    <div class="panel-heading" style="background-color:#8e979f;">
                        <h4 class="panel-title">View Teacher</h4>
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>address</th>
                                    <th>phone Number</th>
                                    <th>E- mail</th>
                                    <th>Category</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    
                                </tr>
                                </thead>
                                
                            </table>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php require 'config/footer.php' ;?>
</body>
</html>