<?php
function inverse($x){
    if (!$x){
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

function fileReader($filepath){
    try {
        fopen($filepath);
    } catch (\Throwable $th) {
        throw new Exception('FileNotFound');
    }
}

try{
    $file = fileReader('info.php');
    log($file);
}catch(Exception $e){
    echo $e->getMessage() . "</br>";
}


try {
    echo inverse(5) . "</br>";
    echo inverse(0) . "</br>";
} catch (Exception $e) {
    echo "Caught exception : ", $e->getMessage(), "</br>";
}finally{
    echo "Finally Block Always Executes</br>";
}

echo "Hello World</br>";

