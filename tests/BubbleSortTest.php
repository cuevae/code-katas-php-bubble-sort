<?php

use \BubbleSort\Sorter as BubbleSort;

class BubbleSortTest extends PHPUnit_Framework_TestCase
{

    /** @var  BubbleSort */
    protected $bubbleSort;

    public function setUp()
    {
        $this->bubbleSort = new BubbleSort();
    }

    /**
     * @param array $input
     * @param array $expected
     *
     * @internal     param array $collection
     *
     * @dataProvider collectionsProvider
     */
    public function testBubbleSortAlgorithmResults(array $input, array $expected)
    {
        $result = $this->bubbleSort->run($input);
        $this->assertEquals($expected, $result);
    }


    /*****************************************************************************************************************
     *                                                    PROVIDERS
     *****************************************************************************************************************/

    /**
     * @return array
     */
    public function collectionsProvider()
    {
        return [
            [
                [ 2, 3, 1 ], [ 1, 2, 3 ]
            ],
            [
                [ 8, 7, 6, 2, 1 ], [ 1, 2, 6, 7, 8 ]
            ],
            [
                [ 1, 2, 3, 4 ], [ 1, 2, 3, 4 ]
            ],
            [
                [ 2, 6, 3, 4, 5, 1 ], [ 1, 2, 3, 4, 5, 6 ]
            ]
        ];
    }

} 