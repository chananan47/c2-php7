<?php
//define varible
$hello = "Hello";

//define function:Anonymous
$hi = function ()use($hello){ //collee
    return "Hello $hello";
};

echo $hi();