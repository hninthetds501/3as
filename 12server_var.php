<?php 
	//SuperGlobal variablesကို ကြိုက်တဲ့နေရာကနေ ခေါ်သုံးလို့ရ 
	//they return associative array
	//so use print_r to show output

	echo "<pre>";
	print_r($_SERVER);
	
	//add query string in url ?id=1&name=nanhtoowai
	echo($_SERVER['QUERY_STRING']);
	echo($_SERVER['HTTP_HOST']);
	// print_r($_GET);
	// echo $_GET['name'];

	// if(isset($_GET['id']))
	// 	echo $_GET['id'];
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Document</title>
 </head>
 <body>
	 <form action="<?php echo $_SERVER['PHP_SELF']?>">
		 <input type="submit" value="submit">
	 </form>
 </body>
 </html>
 