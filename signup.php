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
                    <div class="indigo col-md-5">
                        <div class="container form">
                        <?php if(isset($_SESSION['msg']))
                                {
                                    echo $_SESSION['msg'];
                                    $_SESSION['msg'] = '';
                                }   
                        ?>
                            <h3> Sign Up!</h3><br>
                            <form name="register" onsubmit="return validateRegister();" method="POST" action="register.php">
                                <input type="hidden" name="validation" id="validation" value="null">

                                <label>Name:</label>
                                <div class="row">
                                    
                                    <div class="col">
                                        
                                        <input type="text" name="fname" id="fname" placeholder="First Name..." class="form-control">
                                    </div>
                                    <div class="col">
                                        
                                        <input type="text" name="lname" id="lname" placeholder="Last Name..." class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Your Email..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" id="password" placeholder="Enter Your Password..." class="form-control">
                                    <p id="pwsfb" style = "color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password:</label>
                                    <input type="password" name="re-password" id="re-password" placeholder="Re-Enter Your Password..." class="form-control">
                                    <p id="repwsfb" style = "color: red"></p>
                                </div>

                                <div class="form-group">
                                    <button class="btn signup" type="submit" name="register">Sign Up</button>
                                </div>
                                
                            </form>
                            <p class="desc"> Already have an account? <a href="index.php" class="link">Login Here!</a> </p>
                        </div>
                    </div>
                    
                    <div class="blue col-md-7">
                        <div class="container-fluid img">
                            <img src="assets/login.svg" alt="login">
                        </div>
                    </div>
                </div>
       		</div>
    	</div>

        <script type="text/javascript">

        function validateRegister()
        {
            console.log('in here');
            var pws=document.forms["register"]["password"].value;
            var res;
            var repws=document.forms["register"]["re-password"].value;
            var flag=true;
            res = pws.match(/^(?=.{6,8})/);
            if(res == null)
            {
                flag=false;
                document.getElementById('pwsfb').innerHTML="Password Must be 6 to 8 Charasters long and must contin 1 Lowercase, 1 Uppercase, 1 digit, 1 special Charasters "; 
            }  
            else
            { 
                if(!(pws==repws))
                {
                    flag=false;
                    document.getElementById('repwsfb').innerHTML="Password didn't Match";
                }
            }
            if(flag == true)
                document.getElementByID('validation').value = "true";
            return flag; 
        }
    
</script>
    </body>
</html>