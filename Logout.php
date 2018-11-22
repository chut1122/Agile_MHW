<?php
	session_start();
	unset($_SESSION);
	session_destroy();
	define('TITLE','Logout');
	require('head.html');
?>
<p>You are now logged out</p>

</body>
</html>