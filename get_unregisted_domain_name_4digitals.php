<?php
# $temp=`cat results.txt`;
$temp=`cat 3700.txt`;

for ($i=1;$i<3750;$i++)
{
if (strlen($i)==1) $i="000$i";
if (strlen($i)==2) $i="00$i";
if (strlen($i)==3) $i="0$i";

$result=strstr($temp, "www.$i.com");
if (strlen($result)==0) echo "www.$i.com\n";

}

?>
