<?php
    session_start();
    include('dbconfig.php');

    if(isset($_POST['login']))
    {   
        $pass = md5($_POST['password']);
        $q = "SELECT * from user where email = '".$_POST['email']. "' AND password='" .$pass. "'";
        
        
            $select = $db->query($q);
            if($select)
            {
                $data = $select->fetch_assoc();                
                $_SESSION['msg'] = "<h3>Welcome Back, " . $data['fname'] . "!</h3>";
                $_SESSION['user'] = $data['id'];
                $log = $db->query("INSERT INTO userlog (userid, logintime) values('". $data['id'] ."', '". date('Y-m-d h:i:s', time()) ."')");
                $_SESSION['log'] = $db->insert_id;
                header("location:home.php");
            }
            else
            {
                $_SESSION['msg'] = "<div class='alert alert-danger'> Could not login, please try again. </div>";
                header("location:index.php");
            }
        
    }
?>