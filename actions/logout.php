<?php
//No.9

include '../classes/User.php';

// create an object
$user = new User;
//call the method　form から入れたデータがUser.phpへ入り
$user->logout($_POST);

?>