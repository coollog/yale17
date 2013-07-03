<?php require_once('fbheader.php'); ?>

<?php if ($_SESSION['ingroup'] == 1) { 
	// Replace code below with what is displayed to verified users. ?>
	All good!
<?php } else { 
	// Replace code below with what is dislay to the public.
	require_once('fblogin.php'); 
} ?>

<?php require_once('fbroot.php'); ?>
