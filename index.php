<?php
       //�žų˷���
   for($i = 1;$i <=9; $i++){
   	for($j = 1;$j <=9; $j++){
   	    if($j>$i){continue;}
   		echo  $j."*".$i.'='.$j*$i."   ";
   		
   	    
   	}
   	echo "<br/>";
   }
   
   echo "<br/>"; 	
   echo "<br/>";
   
   //�žŵ��˷���
   for($i = 9;$i >0;$i--){
       for($j = 1;$j <=9;$j++){
           if($j<=9-$i){continue;}
           echo  $j."*".$i.'='.$j*$i."   ";
       }
       echo "<br/>";
   }
   
 
     ?>