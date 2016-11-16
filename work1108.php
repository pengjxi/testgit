<?php
 echo 'one';
  $arr = array(1,2,3,array(4,array(5,6)));
  function sum($arr){
      $temp = 0;
      foreach ($arr as $value){
          if (is_array($value)){
              sum($value);
          } else{
             $temp += $value;
          }
      }
      echo $temp."<br />";
      return $temp;
     
  }
  echo sum($arr)."<br />";  //递归一次$temp会销毁一次
  $arr = array('one'=>'dizhi','two'=>'runer');
  $arr[] = "d";
  $arr["hell"] = array("jun"=>"hello","dfs"=>"fsaf");
  print_r($arr);
  echo "<br />";
  var_dump($arr);
  echo $arr["hell"]["jun"];
  
  
  
  