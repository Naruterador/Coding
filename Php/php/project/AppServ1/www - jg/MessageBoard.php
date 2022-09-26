<html>
<head>
<title>Message Board</title>
<meta http-equiv="content-type" content="text/html;charset-utf-8"/>
</head>
<body>
<h1>Employee Message Board</h1>
<form action="insert.php" method="post">
Username:<input type="text" name="MessageUsername"/><br/><br/>
Message:<br/>
<textarea rows="10" cols="50" name="message"></textarea><br/><br/>
<input type="submit" value="Submit"/>&nbsp;&nbsp;<input type="reset" value="Reset"/>
</form>
</body>
</html>
<?php
echo "</br><a href='DisplayMessage.php'>Display Message</a>";
?>