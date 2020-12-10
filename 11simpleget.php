<?php
//?name=Su+Su
// if (isset($_GET)) {
//     echo "exists";
// }
if(isset($_GET['id'])){
    if($_GET['id']==1){
        echo "You are Pretty";
    }
    else if($_GET["id"]==2){
        echo "You are beautiful";
    }
    else{
        echo "You are ugly";
    }
    echo "<h1>".$_GET['name']."</h1>";
    echo "<pre>";
    print_r($_GET);
}
else{
    echo "Id does not exist";
}