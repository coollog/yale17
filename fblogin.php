<?php if ($_SESSION['error'] !== 0) { ?>
	Error: <?php echo $_SESSION['error']; ?><br /><br />
<?php } ?>
Login to verify that you are a member of the Yale College Class of 2017. <br />
<fb:login-button size="xlarge" show-faces="true" scope="email,user_online_presence,user_groups"></fb:login-button>