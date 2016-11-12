<?php

//例题编写
$score = array(85, 60, 54, 91, 100, 71);
foreach ($score as $value){
    echo $value.'<br />';
}
$max = $score[0];
$min = $score[0];

foreach($score as $value){
    if ($value >$max){
        $max = $value;
    }
    elseif ($value  < $min){
        $min = $value;
    }
    
}
echo "最大值是：".$max."<br />"."最小值是：".$min;
/* 
$darr = array("one"=>array("name"=>"fdf","age"=>"fsdfs","old"=>"gdsg"),
    "two"=>array("name"=>"fdf","age"=>"fsdfs","old"=>"gdsg"));
foreach ($darr as list($value)){
    echo $value.'<br />';
} */

$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a)) {
    // Note that there is no $b here.
    echo "$a\n";
}

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4;             // $arr2 is changed,
                        // $arr1 is still array(2, 3)
 
$arr3 = &$arr1;
$arr3[] = 4;
?>


