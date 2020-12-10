<?php
    $myexpenses=[
        'first_day'=>[
                        'tea'=>500,
                        'taxi'=>2000,
                        'lunch'=>2000
                    ],
        'second_day'=>[
                        'breakfast'=>3000,
                        'taxi'=>2000,
                        'lunch'=>3000
                    ],
        'third_day'=>[
                        'lunch'=>3000,
                        'taxi'=>2500,
                        'dinner'=>3000
                    ]
    ];

    krsort($myexpenses);
    echo "<pre>";
    print_r($myexpenses);

    echo "<h1>My expenses</h1>";
    foreach($myexpenses as $expense){
        echo "<br>";
        print_r($expense);
    }
    echo "<h1>My expenses Day</h1>";
    foreach($myexpenses as $k=>$v){
        echo "<br>$k";
    }
    // echo "<h1>All details about myexpenses</h1>";
    // foreach($myexpenses as $expenses){
    //  //   echo "<br>$expenses";
    //     foreach($expenses as $k=>$v){
    //         echo "<br>$k=>$v";
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All details about myexpenses</h1>
    <table border="1px solid" cellpadding=15px>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php
        foreach($myexpenses as $expense)
            foreach($expense as $k => $v)
        :?>
        <tr>
            <td><?php echo $k; ?></td>
            <td><?php echo $v; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>