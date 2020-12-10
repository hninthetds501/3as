<?php
    //define(name,value)

    define("username","admin");
    echo username;

    const password=123;
    echo password;

    //magic constants
    echo "<br>You are at line number ".__LINE__;
    echo "<br>Your file path is ".__FILE__;
    echo "<br>Your file directory is ".__DIR__;

    function showname(){
        echo "<br>Your function name is ".__FUNCTION__;
    }
    showname();
?>