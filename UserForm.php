<?php

if (isset($_POST['action'])) {
	require_once 'user.class.php';
	$user = new User($_POST['username'], $_POST['email']);
	$user->setPassword($_POST['password']);
	$result = $user->save();
}

?>
<html>
<body>
<p><?php if (isset($result)) echo $result; ?></p>
<form action="" method="POST">
	<p>Username <input type="text" name="username" /></p>
	<p>Email <input type="text" name="email" /></p>
	<p>Password <input type="password" name="password" /></p>
	<p><input type="submit" name="action" value="Save" /></p>
</form>

</body>
</html>