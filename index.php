<?php 


for($i=100;$i<1000;$i++){ 
　　$a=intval($i/100); 
　　$b=intval($i/10)%10; 
　　$c=$i%10; 
　　if(pow($a,3)+pow($b,3)+pow($c,3)==$i){ 
　　echo $i."\t"; 
　　} 
　　} 



 ?>