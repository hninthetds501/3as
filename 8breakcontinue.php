<?php
echo "<h1>For Loop (Continue)</h1>";
// continue=skip this step
for($i=1;$i<10;$i++){
    if($i==4){
        continue;
    }
    echo "<h1>$i</h1>";
}

echo "<h1>While Loop (Break)</h1>";
$num=50;
while($num>10){
    if($num==35){
        break;
    }
    echo "<h3>$num</h3>";
    $num-=5;
}

echo "<br>Choose your age:";
echo "<select>";
for ($i=16; $i <=100 ; $i++) { 
    echo "<option>$i</option>";
}
echo "</select>";

$today=date("D");
//echo $today;
switch ($today) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    default:
        echo "No information available for that day";
        break;
}