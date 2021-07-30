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
                    <div class="indigo col-md-5 login">
                       <div class="container form">
                        <?php if(isset($_SESSION['msg']))
                                {
                                    echo $_SESSION['msg'];
                                    $_SESSION['msg'] = '';
                                }   
                        ?>    
                        <h3> Welcome Back!</h3><br>
                            <form method="POST" action="auth.php">
                            
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Your Email..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Your Password..." class="form-control">
                                </div>

                                <div class="form-group">
                                    <button class="btn signup" type="submit" name="login">Login</button>
                                </div>
                                
                            </form>
                            <p class="desc"> Don't have an account? <a href="signup.php" class="link">Sign Up Here!</a> </p>
                        </div>
                    </div>
                    
                </div>
       		</div>
    	</div>
    </body>
</html>