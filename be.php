<?php
    //var_dump($_GET);
    if(isset($_REQUEST['email']))
    {
    $email = $_REQUEST['email']; // lấy từ name của input
    $password = $_REQUEST['pswd'];
    $name = $_REQUEST['name'];
    echo 'name: '.$name.'<br>'.'email: '.$email.'<br>'.'password: '.$password;
    }

?>