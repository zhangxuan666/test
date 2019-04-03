<?php

header("content-type:text/html;charset=utf8");


$arr=[1,2,3,4,5];

echo Number($arr,5);
function Number($arr,$m){
	
	if(count($arr)>0){
	$ste=$m-1;
	echo $m."的下标为".$ste;	 

	}

}