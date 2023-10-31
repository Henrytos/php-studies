<?php 

$arr = [0,1,2,3,4,5,6,7,8];

echo "<h1>For</h1>";
for ($i=0; $i < 10; $i++) { 
    echo $i.'<br/>';
}

echo '<br/>';
echo "<h1>While</h1>";
$z=1;
while($z<10){
    echo $z.'<br/>';
    $z++;
}

echo '<br/>';


$count=0;
while($count< count($arr)){
    echo $arr[$count]."<br/>";
    $count++;
}
echo '<br/>';
echo "<h1>Do While</h1>";

$countTwho=count($arr)-1;
do{
    echo $arr[$countTwho]."<br/>";
    $countTwho--;
}while($countTwho>=0);
?>