<?php
//No.3


include '../classes/User.php';

//Create an Object
$user = new User;

//call the method  form から入れたデータがUser.phpへ入り
$user->store($_POST);


?>