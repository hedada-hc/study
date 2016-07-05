<?php
$url='http://v.ifeng.com/vlist/nav/doc/1/list.shtml';
$ym=file_get_contents($url);

$zz='/[a-zA-z]+:\/\/[^\s]*/';
preg_match_all($zz,$ym,$arr);

print_r($arr);
exit();
$clurl=$arr[0][0];
$clym=file_get_contents($clurl);
echo $clym;
$img_zz='/<img src="(.*)"\/>/';//图片正则
preg_match_all($img_zz,$clym,$img_dz);
print_r($img_dz);


$time_zz='/<span class="sets">(.*)<\/span>/';//视频时长正则
$bt_zz='/<h6><a href="(.*)">(.*)<\/a><\/h6>/';//标题和视频地址url正则













?>
<!DOCTYPE html>
<html>
<head>
	<title>ifeng</title>
	<link rel="stylesheet" type="text/css" href="phpwz.css">
</head>
<body>
<div class="lb">
	<ul>
		<li>
			<img src="http://d.ifengimg.com/w200_h150/y0.ifengimg.com/pmop/2016/04/19/7f22ed21-3310-4578-811c-7fbc4d772072.jpg">
			<a>2016-04-18探索发现 抗战空中前哨 陕西安康机场(上)</a>
		</li>
	</ul>
</div>
</body>
</html>