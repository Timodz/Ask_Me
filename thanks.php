<?php
$page = "/Q&A";
$sec = "3";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="picture/logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Ask me</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="Q&A.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                                <img id="pic" src="picture/logo.png" width="150" />
                          <center><h1>E-Learning v3.0</h1></center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset4 span4">
                    <form role="form" id="form" method="post" action="includes/input.php"> 
                       <center>
                                    <h1>Thank you !</h1>
                            </center>    
                        <center>
                            <button type="submit" class="btn">ok&nbsp;
                                <br>
                            </button>
                        </center>                         
                        <div class="form-group"> 
</div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
