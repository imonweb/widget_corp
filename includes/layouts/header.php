<?php if (!isset($layout_context)) { $layout_context = "public"; }
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Widget Corp <?php if ($layout_context == "admin") { echo "admin"; } ?></title>
<link rel="stylesheet" href="stylesheets/public.css" media="all" type="text/css">

</head>

<body>
	<div id="header">
		<h1>Widget Corp <?php if ($layout_context == "admin") { echo "admin"; } ?></h1>
	</div>