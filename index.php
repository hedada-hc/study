<?php
//作者：何大大
//功能：实时采集爱密码论坛迅雷账号密码521xunlei.com

//交流QQ 183844707
header('content-type:text/html;charset=gbk');//注意爱密码论坛的编码是GBK我刚开始用utf8的乱码

$url="http://521xunlei.com/portal.php";

$str=file_get_contents($url);//打开网站，抓取源码

$zz='/<\/a><\/label>\s<a\shref="(.*)"/';
preg_match_all($zz,$str,$arr);
$dz=serialize($arr[1][0]);
$clurl=substr($dz,6,20)."l";//获取内容页地址
$qz="http://521xunlei.com/";
$a=$qz.$clurl;//拼接内容页地址

echo $a;
$ym=file_get_contents($a);
$pp='/\d+<br\s\/>/';

$pp2='/\d+<\/font><\/font><br\s\/>/';

preg_match_all($pp,$ym,$sj); 

if ($sj[0][0]=='') {
	preg_match_all($pp2,$ym,$sj);
}else{
	preg_match_all($pp,$ym,$sj);
}

print_r($sj);


?>
