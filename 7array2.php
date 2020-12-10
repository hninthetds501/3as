<?php
    $myitem=[
        'food'=>'noodle',
        'drink'=>'coffee',
        'snack'=>'bread',
        'soup'=>'kyayoh',
        'juice'=>'orange'
    ];

    echo "<h1>Associative Array myitem</h1>";
    print_r($myitem);

    ksort($myitem);
    echo "<br><h1>Key ascending sort</h1>";
    print_r($myitem);

    krsort($myitem);
    echo "<br><h1>Key descending sort</h1>";
    print_r($myitem);

    arsort($myitem);
    echo "<br><h1>Value ascending sort</h1>";
    print_r($myitem);

    arsort($myitem);
    echo "<br><h1>Value descending sort</h1>";
    print_r($myitem);

    foreach($myitem as $k=>$v){
        echo "<p>$k => $v </p>";
    }
?>