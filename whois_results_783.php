<?php

$fp=fopen("whois_results_783.txt","w");

$a[]="7";
$a[]="8";
$a[]="3";

for ($ia=0;$ia<3;$ia++)
{
$namea=$a[$ia];
for ($ib=0;$ib<3;$ib++)
{
$nameb=$namea . $a[$ib];
for ($ic=0;$ic<3;$ic++)
{
$namec=$nameb . $a[$ic];
for ($id=0;$id<3;$id++)
{
$named=$namec . $a[$id];
for ($ie=0;$ie<3;$ie++)
{
$namee=$named . $a[$ie];


$command = "whois -Q $namee.com";
echo $command . "\n";

$result=`$command`;

fputs($fp,$result);

}
}
}
}
}

fclose($fp);

?>
