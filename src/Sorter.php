<?php

namespace BubbleSort;

class Sorter {

    /**
     * @param array $input
     *
     * @return array
     */
    public function run( array $input )
    {
    	$changed = true;
    	
    	$k = count($input);
    	
        for($i = 0; $i < $k; $i++)
        {
        	if($changed)
        	{
        		$changed = false;
        		
	        	for($j = 0; $j < $k-1; $j++)
	        	{
	        		if($input[$j] > $input[$j+1])
	        		{
	        			$temp = $input[$j];
	        			
	        			$input[$j] = $input[$j+1];
	        			
	        			$input[$j+1] = $temp;
	        			
	        			$changed = true;
	        		}
	        	}  	
	        }
	        else 
	        {
	        	break;
	        }
        }
        
        return $input;
    }

} 