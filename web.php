<?PHP

  require("config.inc");

	function htmlBody() {
	?>
		<!DOCTYPE html>
		<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
		<head>

			<meta charset="UTF-8"/>

      <meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8"/>

			<title>www-log-viwer</title> 

			<link rel="shortcut icon" href="/favicon.ico" />
				  
			<meta name="description" content="www-log-viwer"/>
			<meta name="keywords" content="5 Mode,log,viewr"/>
			<meta name="robots" content="noindex"/>
			<meta name="author" content="5 Mode and contributors."/>
			
			<style>
				 body {
				   background:#000000;
				   color:lightgreen;
           font-family: Monospace;
           font-size: 17px; 
				 }
			</style>
			
      <meta http-equiv="refresh" content="60;url=/web.php"> 

		</head>
		<body>
	<?PHP
	}  

	function endBody() {
	?>
		</body>
		</html>
	<?PHP
	}  

  exec(SHELLVIEWER_PATH." -c");

  htmlBody(); 
  $f = file("mynginx_errors.log"); 
  foreach($f as $line) {
    echo($line."<br>");
  } 
  echo("<br>"); 
  echo("<br>"); 
  $f = file("myphp_errors.log"); 
  foreach($f as $line) {
    echo($line."<br>");
  } 
  endBody();

  exit(0);
  