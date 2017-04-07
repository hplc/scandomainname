<?php

$fp=fopen("whois_results.txt","w");

for ($i=0;$i<10000;$i++)
{
if (strlen($i)==1) $i="000$i";
if (strlen($i)==2) $i="00$i";
if (strlen($i)==3) $i="0$i";

$command = "whois -Q $i.com";

$result=`$command`;

fputs($fp,$result);

}

fclose($fp);

?>
