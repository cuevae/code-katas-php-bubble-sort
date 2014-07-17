<?php

namespace BubbleSort;

class Sorter
{


    /**
     * @param $indexA
     * @param $indexB
     * @param $array
     *
     * @return mixed
     */
    public function swap($indexA, $indexB, &$array)
    {
        $temp           = $array[$indexA];
        $array[$indexA] = $array[$indexB];
        $array[$indexB] = $temp;

        return $array;
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function run(array $input)
    {
        do
        {
            $changed = false;
            for ($j = 0 ; $j < count($input) - 1 ; $j++)
            {
                if ($input[$j] > $input[$j + 1])
                {
                    $this->swap($j, $j + 1, $input);
                    $changed = true;
                }
            }
        } while ($changed);

        return $input;
    }

} 