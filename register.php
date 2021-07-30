<?php
    session_start();
    include('dbconfig.php');

    if(isset($_POST['register']))
    {   
        if(isset($_POST['validation']) && $_POST['validation'] == true)
        {
            $user = $db->query("SELECT * FROM user WHERE email = '" . $_POST['email']. "'");
            if($user->num_rows > 0)
            {
                $_SESSION['msg'] = "<div class='alert alert-warning'> Email is already registered with us. Please try another email or try logging in </div>";         
                header("location:signup.php");
                exit();
            }
            
            
            $pass = md5($_POST['password']);
            $q = "INSERT INTO user (fname, lname, email, password) values ('" .$_POST['fname']. "', '" .$_POST['lname']. "','" .$_POST['email']. "','" .$pass. "')";
         
        
            $insert = $db->query($q);
            if($insert)
            {   
                $_SESSION['msg'] = "<h3>Registered Successfully! Welcome, " . $_POST['fname'] . "</h3>";
                $_SESSION['user'] = $db->insert_id;
                $log = $db->query("INSERT INTO userlog (userid, logintime) values('". $db->insert_id ."', '". date('Y-m-d h:i:s', time()) ."')");
                $_SESSION['log'] = $db->insert_id;
                header("location:home.php");
            }
            else
            {
                $_SESSION['msg'] = "<div class='alert alert-danger'> Registration failed, please try again. </div>";         
                header("location:signup.php");
            }
        }
    }
?>