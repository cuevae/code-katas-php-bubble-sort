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
    //Timer for the whole script
    $generalBench = new Ubench();

    //Timer for individual runs
    $bench1 = new Ubench();
    $bench2 = new Ubench();
    $bench3 = new Ubench();
    $bench4 = new Ubench();
    $bench5 = new Ubench();

    $input500 = range(1, 500);
    shuffle($input500);

    echo "\nSorting started:\n";
    $generalBench->start();

    $bubbleSort = new BubbleSort();

    $input = array( 2, 3, 1 );
    $bench1->start();
    $result = $bubbleSort->run($input);
    $bench1->end();
    echo ".\n";

    $input = array( 8, 7, 6, 2, 1 );
    $bench2->start();
    $result = $bubbleSort->run($input);
    $bench2->start();
    echo ".\n";

    $input = array( 1, 2, 3, 4 );
    $bench3->start();
    $result = $bubbleSort->run($input);
    $bench3->end();
    echo ".\n";

    $input = array( 2, 6, 3, 4, 5, 1 );
    $bench4->start();
    $result = $bubbleSort->run($input);
    $bench4->end();
    echo ".\n";

    $bench5->start();
    $result = $bubbleSort->run($input500);
    $bench5->end();
    echo ".\n";

    $generalBench->end();

    echo "\nSorting finished!\n";

    echo "\nBenchmark for <2,3,1> input:\n";
    echo "Time: " . $bench1->getTime() . "\n";
    echo "Memory Peak: " . $bench1->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench1->getMemoryUsage() . "\n";

    echo "\nBenchmark for <8,7,6,2,1> input:\n";
    echo "Time: " . $bench2->getTime() . "\n";
    echo "Memory Peak: " . $bench2->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench2->getMemoryUsage() . "\n";

    echo "\nBenchmark for <1,2,3,4> input:\n";
    echo "Time: " . $bench3->getTime() . "\n";
    echo "Memory Peak: " . $bench3->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench3->getMemoryUsage() . "\n";

    echo "\nBenchmark for <2,6,3,4,5,1> input:\n";
    echo "Time: " . $bench4->getTime() . "\n";
    echo "Memory Peak: " . $bench4->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench4->getMemoryUsage() . "\n";

    echo "\nBenchmark for randomly shuffled array of 500 elements:"
//         . "\n" . print_r($input500, true)
         . "\n";
    echo "Time: " . $bench5->getTime() . "\n";
    echo "Memory Peak: " . $bench5->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $bench5->getMemoryUsage() . "\n";

    echo "\nBenchmark total times:\n";
    echo "Time: " . $generalBench->getTime() . "\n";
    echo "Memory Peak: " . $generalBench->getMemoryPeak() . "\n";
    echo "Memory Usage: " . $generalBench->getMemoryUsage() . "\n";

} else
{
    echo "\nTests are not passing.. please check them before running the Benchmark.\n";
    echo "\n" . $res . "\n";
}

