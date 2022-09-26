<?php
	$errorinfo = "";
	$result = 0;
	$_POST['Num1'] = (isset($_POST['Num1'])) ? $_POST['Num1'] : "";
	$_POST['Num2'] = (isset($_POST['Num2'])) ? $_POST['Num2'] : "";
	$_POST['operators'] = (isset($_POST['operators'])) ? $_POST['operators'] : "";
	
if(isset($_POST['submit']))
{


	if($_POST['Num1'] == "")
		$errorinfo .= "Please input the first number!\n";
	
	if(!is_numeric($_POST['Num1']))
		$errorinfo .= "Num1 is not a number!\n";
	
	if($_POST['Num2'] == "")
		$errorinfo .= "Please input the second number!\n";
	
	if(!is_numeric($_POST['Num2']))
		$errorinfo .= "Num2 is not a number!";

	

	switch($_POST['operators'])
	{
		case "+":
			$result = $_POST['Num1'] + $_POST['Num2'];
			break;
		case "-":
			$result = $_POST['Num1'] - $_POST['Num2'];
			break;
		case "*":
			$result = $_POST['Num1'] * $_POST['Num2'];
			break;
		case "/":
			$result = $_POST['Num1'] / $_POST['Num2'];
			break;
		case "%":
			$result = $_POST['Num1'] % $_POST['Num2'];
			break;
	}
}
?>


<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	</head>
		<body>
		<h1>Calculator</h1>
				<form action="main.php" method="post" >
					<input type="text" name="Num1" value = "<?php echo $_POST['Num1'] ?>" />
					<select name = "operators">
						<option value = "+" <?php if($_POST['operators'] == "+") echo "selected"; ?>>+</option>
						<option value = "-" <?php if($_POST['operators'] == '-') echo "selected"; ?>>-</option>
						<option value = "*" <?php if($_POST['operators'] == '*') echo "selected"; ?>>*</option>
						<option value = "/" <?php if($_POST['operators'] == '*') echo "selected"; ?>>/</option>
						<option vaule = "%" <?php if($_POST['operators'] == '*') echo "selected"; ?>>%</option>
					</select>
					<input type="text" name="Num2" value = "<?php echo $_POST['Num2'] ?>"/>=

					<input type="text" name="result" value = "<?php echo $result;?>"/>
					<input type="submit" name="submit" value="Submit"></br>

					<textarea name="ef" rows='2' cols='60'><?php echo $errorinfo; ?></textarea>
				</form>
</html>


