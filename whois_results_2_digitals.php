<?php

$fp=fopen("whois_results_2_digitals.txt","w");

for ($i=0;$i<100;$i++)
{
if (strlen($i)==1) $i="0$i";

$command = "whois -Q $i.com";

$result=`$command`;

fputs($fp,$result);

}

fclose($fp);

?>
