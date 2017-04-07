<?php

$fp=fopen("whois_results_4_chars.txt","w");

for ($a="a";$a<="z";$a++)
{
if (strlen($a)>1) break;

for ($b="a";$b<="z";$b++)
{
if (strlen($b)>1) break;

for ($c="a";$c<="z";$c++)
{
if (strlen($c)>1) break;

for ($d="a";$d<="z";$d++)
{

if (strlen($d)>1) break;

$command = "whois -Q $a$b$c$d.com";
echo $command . "\n";

$result=`$command`;

fputs($fp,$result);

}
}
}
}

fclose($fp);

?>
