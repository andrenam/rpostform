<?php
if ( isset($_POST) && is_array($_POST) && count($_POST) > 0 ) {

	echo "<h1>You entered the following data</h1>\n";
	echo "<pre>".htmlentities(print_r($_POST, true))."</pre>\n";
	echo "<hr />\n";
	
}
else {
?>
<html>
	<head>
		<title>Form-Test</title>
	</head>
	<body>
		<h1>Test-Formular</h1>
		
		<form action="formtest.php" method="POST">
			<p>Var1: <input type="text" name="var1" /></p>
			<p>Var2: <input type="text" name="var2" /></p>
			<p>Var3: <input type="text" name="var3" /></p>
			
			
			<p><input type="submit" value="Absenden!" /></p>
		</form>
	
	</body>
</html>

<?php
}
