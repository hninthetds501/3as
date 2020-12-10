<?php
    $students_array=array("Alice","Sue","Jessica","Erica","John");
    echo "<pre>";
    print_r($students_array);

    //Delete form array
    unset($students_array[3]);
    array_pop($students_array); //delete the last
    print_r($students_array);

    //add var to array
    $students_array[]="Jack";
    array_push($students_array,"Emma"); //insert into the last
    print_r($students_array);

    array_unshift($students_array,"Rachel");
    print_r($students_array);

    echo "<br>".count($students_array)." "; //count
    echo sizeof($students_array); //count

    sort($students_array); //asc
    echo "<br>";
    print_r ($students_array);

    rsort($students_array); //desc
    print_r($students_array);

    echo "<br>".$students_array[2];

    //check array is exist or not
    if(is_array($students_array)){
        echo "<h1>array exists</h1>";
    }

    //just check with value and no return
    if(in_array("Sue",$students_array)){
        echo "<h1>Sue is in array</h1>";
    }

    //search with value and return key
    $k=array_search('Alice',$students_array);
    echo "<br>Alice key is ".$k;

    for($i=0;$i<count($students_array);$i++){
        echo "<br>$students_array[$i]";
    }

    //output each value in array with foreach loop(key and value)
    foreach($students_array as $i => $j){
        echo "<br>$i => $j <br>";
    }

    //implode,explode
    $students_str=implode(',',$students_array);//array to string
        echo "<h1>$students_str</h1>";

    $students_arr=explode(',',$students_str);//string to array
    var_dump($students_arr);

    
?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Table</h1>
    <table border="1px solid" cellpadding=15px>
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
        <?php
        $i=1;
        foreach($students_array as $student):?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $student; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>