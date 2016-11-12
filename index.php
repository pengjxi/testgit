<?php
       //¾Å¾Å³Ë·¨±í
   for($i = 1;$i <=9; $i++){
   	for($j = 1;$j <=9; $j++){
   	    if($j>$i){continue;}
   		echo  $j."*".$i.'='.$j*$i."   ";
   		
   	    
   	}
   	echo "<br/>";
   }
   
   echo "<br/>"; 	
   echo "<br/>";
   
   //¾Å¾Åµ¹³Ë·¨±í
   for($i = 9;$i >0;$i--){
       for($j = 1;$j <=9;$j++){
           if($j<=9-$i){continue;}
           echo  $j."*".$i.'='.$j*$i."   ";
       }
       echo "<br/>";
   }
   
 
     ?>