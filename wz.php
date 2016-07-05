<?php
header('content-type:text/html;charset=gb2312');
$url=$_GET['wz'];
$ym=file_get_contents($url);

$btzz='/<h1\sclass="YaHei">(.*)<\/h1>/';
preg_match_all($btzz,$ym,$bt);

$jjzz='/<div\sid="content">\s(.*)<\/div><!--endmain-->/';






?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php echo $bt[0][0]; ?></h1>
</body>
</html>