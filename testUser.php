<?php

require_once 'user.class.php';

$user = new User("Peter", "Peterson@gmail.com");
echo $user->displayUserInfo();
$user->setPassword("easyt45!");
$user->save();

?>