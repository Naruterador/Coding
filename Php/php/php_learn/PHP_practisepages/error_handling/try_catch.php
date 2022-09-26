<?php

function inverse($x) 
{
    if (!$x) 
    {
        throw new Exception('Division by zero.'.'</br>');
    }
    return 1/$x;
}

try 
{
    //echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) 
{
    echo 'Caught exception: ',  get_class($e), "\n";
}

// Continue execution
echo "Hello World\n";

















?>