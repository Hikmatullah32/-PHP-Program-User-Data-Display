<?php

require('userinfo.php');



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Data Using PHP</title>
</head>
<body>
    <center>
        <h1>Getting user data using php</h1> <br> <br> <br>
        <h2<?= userinfo::get_ip()?></h2>
        <h2 style="color: red;"><?= userinfo::get_device()?></h2>
        <h2 style="color: blue;"><?= userinfo::get_os()?></h2>
        <h2 style="color: aqua;"><?= userinfo::get_browser()?></h2>
    </center>
</body>
</html>