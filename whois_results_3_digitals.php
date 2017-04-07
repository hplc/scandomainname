<?php

$fp=fopen("whois_results_3_digitals.txt","w");

for ($i=0;$i<1000;$i++)
{
if (strlen($i)==1) $i="00$i";
if (strlen($i)==2) $i="0$i";

$command = "whois -Q $i.com";
echo $command;

$result=`$command`;

fputs($fp,$result);

}

fclose($fp);

?>
