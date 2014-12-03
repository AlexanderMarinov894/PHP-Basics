<?php

function dumpVariable($input)
{
    $print = 'The variable is numeric? ';
    if (gettype($input) == 'integer' ||
        gettype($input) == 'float' ||
        gettype($input) == 'double') {
        echo($print.'Yes -> ');
        var_dump($input);
    } else {
        echo($print.'No -> '.gettype($input)."\n");
    }
}

echo("\n");
dumpVariable('hello');
dumpVariable(15);
dumpVariable(1.234);
dumpVariable(array(1,2,3));
dumpVariable((object)[2,34]);