<!DOCTYPE html>
<html>
<head>
	<title>Play Video</title>
</head>
<body>
<center>
Video<br>
<?php
	$vid = $_GET["vid"];
	

?>
<video src ='assets/video/<?php echo $vid ?>.mp4' controls></video>
</body>
</html>
