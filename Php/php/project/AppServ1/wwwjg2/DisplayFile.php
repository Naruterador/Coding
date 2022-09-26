<html>
<head>
<title>Display Uploaded's File Content</title>
<meta http-equiv="content-type" content="text/html;charset-utf-8"/>
</head>
<body>
<h1>Display Uploaded's File Content</h1>
<form action="DisplayFileCtrl.php" method="get">
	Uploaded's File Full Path(eg.yueda/uploadedfile.txt):<input type="text" name="filename"/><br/>

<input type="submit" value="Submit"/>&nbsp;&nbsp;<input type="reset" value="Reset"/>
</form>
</body>

</html>

<?php
echo "</br><a href='list.html'>Go Back</a></br>";
?>