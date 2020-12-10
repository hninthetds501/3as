<!doctype html>
<html lang="en">

<head>
	<?php include "meta.php" ?>
	<title>Hello, world!</title>
</head>

<body>
	<?php
	include("nav.php");//errorတက်လဲ ကျန်လိုင်းတွေဆက်အလုပ်လုပ်
	//require("../10file_inclusion/nav.php")
	// include_once '../10template/nav.php';
	// include_once '../10template/nav.php';
	// include_once '../10template/nav.php';
	?>
	<div class="container-fluid mt-5">
		<h1 class="text-danger">This is Home page</h1>
	</div>
	<?php require "footer.php" ?>
</body>
<?php require "script.php" ?>

</html>