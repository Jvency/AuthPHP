<?php
    session_start();
    include('dbconfig.php');
   
    $q = "UPDATE userlog SET logouttime = '" . date('Y-m-d h:i:s', time()) ."' WHERE id = '". $_SESSION['log'] ."'";
    $update = $db->query($q);
      
    session_unset();
    session_destroy();

    header('location:index.php');
?>