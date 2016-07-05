<?php
header('content-type:text/html;charset=gb2312');

$fyhzh=1+$_GET['ym'];


//

$wzlbdz='http://www.jb51.net/list/list_68_'.$fyhzh.'.htm';//文章列表地址
$wzlbym=file_get_contents($wzlbdz);//获取文章列表源码

$wzlbzz='/<DT><span>(.*)<\/span><a\shref="(.*)"\stitle="(.*)"\starget="_blank">/';
preg_match_all($wzlbzz,$wzlbym,$wzlb);








?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="gb2312">
	<title>PHP Word</title>
	<link rel="stylesheet" type="text/css" href="phpwz.css">
</head>
<body>
<div class="lb">
<a <?php echo 'href="?ym=0'.'"'; ?>>home</a>&nbsp&nbsp&nbsp<a <?php echo 'href="?ym='.$fyhzh.'"'; ?>>Next</a>
<?php

for ($i=0; $i<29 ; $i++) { 
	$lbwz=$wzlb[3][$i];
	$lbwzlj='http://www.jb51.net'.$wzlb[2][$i];
	$lbwzrq=$wzlb[1][$i];
?>
<ul>
	<li >
	<a <?php echo 'href="wz.php?wz='.$lbwzlj.'"'  ?> target="_black"><?php echo $lbwz ?></a>
	
	<span><?php echo $lbwzrq ?></span>
	</li>
</ul>
<?php } ?>
</div>
</body>
</html>