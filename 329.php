<?php

$str='abdfgergsf';
echo First($str);
function First($str)
{
	$arr=str_split($str);
	$num=count($arr);

	$font=[];
	$world=[];

	foreach ($arr as $k => $v) {
	$font[]=substr_count($str,$v);

	$world[]=$v;
	var_dump($world);

	}

   $sss=strpos($world);
   echo $sss;
}