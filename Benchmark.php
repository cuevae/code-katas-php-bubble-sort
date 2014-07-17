<?php

require_once 'vendor/autoload.php';
require_once 'vendor/devster/ubench/src/Ubench.php';

use \BubbleSort\Sorter as BubbleSort;

//Execute tests and get result
ob_start();
$os = PHP_OS;
chdir("bin");
if (preg_match('/^WIN.*/', $os))
{
    $cmd = "phpunit.bat -c ../phpunit.xml";
} else
{
    $cmd = "phpunit -c ../phpunit.xml";
}
$res = exec($cmd, $output, $returnVal);
chdir("..");
ob_get_clean();

//If tests are passing, execute Benchmark
if ($returnVal === 0)
{
    $bench = new Ubench();

    echo "\nStart...\n\n";
    $bench->start();

    $bubbleSort = new BubbleSort();

    echo "Sorting: <2,3,1>\n";
    $input  = [ 2, 3, 1 ];
    $result = $bubbleSort->run($input);

    echo "Sorting: <8,7,6,2,1>\n";
    $input  = [ 2, 3, 1 ];
    $result = $bubbleSort->run($input);

    echo "Sorting: <1,2,3,4>\n";
    $input  = [ 2, 3, 1 ];
    $result = $bubbleSort->run($input);

    echo "Sorting: <2,6,3,4,5,1>\n";
    $input  = [ 2, 3, 1 ];
    $result = $bubbleSort->run($input);

    $bench->end();

    echo "\nFinished!\n";

    echo "\nBenchmark times:\n";
    echo "Time: " . $bench->getTime() . "\n";
    echo "Memory Peak: " . $bench->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench->getMemoryUsage() . "\n";

} else
{
    echo "\nTests are not passing.. please check them before running the Benchmark.\n";
    echo "\n" . $res . "\n";
}

