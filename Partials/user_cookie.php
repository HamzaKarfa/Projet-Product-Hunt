<?php


if (isset($_POST['nickname'])){
    setcookie('user_cookie', $_POST['nickname']);
    $nickname = $_POST['nickname'];
}
