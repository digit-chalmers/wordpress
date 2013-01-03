<?php
	global $current_user;
	get_currentuserinfo();
	#$userdata = get_userdatabylogin(get_query_var('author_name'));

	#Debug($current_user);
?>
<!doctype html>
<html>
<head>
	<title><?php wp_title("|", true, "right"); bloginfo("name");?></title>
	<meta charset="utf-8" />
	
	<!-- Load up the Ubuntu fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,400italic" type="text/css">

	<!-- HTML5 shim -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php javascript_path("html5"); ?>"></script>
	<![endif]-->
	
	<!-- Main stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url");?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
