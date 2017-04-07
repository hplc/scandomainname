<?php

$fp=fopen("whois_results_1_digital.txt","w");

for ($i=0;$i<10;$i++)
{
$command = "whois -Q $i.com";

$result=`$command`;

fputs($fp,$result);

}

fclose($fp);

?>
