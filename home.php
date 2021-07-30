<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <link rel="stylesheet" type="text/css" href="assets/app.css">
        <!-- Latest compiled and minified CSS
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
            Optional theme
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            
            Latest compiled and minified JavaScript 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
        </head>
        
        <body>
            <div id="app">
                <div class="container-fluid">
                    <div class="row panel">
                    <div class="blue col-md-7">
                        <div class="container-fluid img">
                            <img src="assets/login.svg" alt="login">
                        </div>
                    </div>
                    <div class="indigo col-md-5 login py-5" style="color: #fff;">
                        <div class="container form">
                            <?php if(isset($_SESSION['msg']))
                                echo $_SESSION['msg'];
                            ?>

                            <div class="row justify-content-center py-5">
                                <a href="logout.php" class="btn btn-success btn-lg"> Logout </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
       		</div>
    	</div>
    </body>
</html>