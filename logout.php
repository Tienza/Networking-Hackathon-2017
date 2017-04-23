<?php
    require('includes/login_tool.php');
    session_start();
    if(session_destroy())
        load('login.php');
?>
