<?php

    $name="Maria";
    var_dump($name);

    $age=18;
    var_dump($age);

    $property=1000.35;
    var_dump($property);

    $isMarried=false;
    var_dump($isMarried);

    $created_date=date("d/M/Y");
    var_dump($created_date);

    $studied_sbj=["html","css","javascript","php"]; //array("")
    var_dump($studied_sbj);

    class Quotation{
        function __construct($quote){
            echo $quote;
        }
    }

    $myquote_obj=new Quotation("No Pain No Gain");
    var_dump($myquote_obj);

    $depression=null;
    var_dump($depression);

    $about="Name: $name
            Age: $age
            Her Property: $property
            isMarried: $isMarried
            Her Favourite subject: $studied_sbj[3] ";

    $about_her=fopen("about.txt",'w'); //resource
    fwrite($about_her,$about);

    var_dump($about_her);
    
?>