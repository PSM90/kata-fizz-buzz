<?php

namespace Kata;

class FizzBuzz
{
    public function handle($values)
    {
    	$return_array = [];
    	foreach($values as $value){
    		if ($value % 3 == 0 && $value % 5 == 0)
    			$return_array[] = 'FizzBuzz';
    		elseif ($value % 3 == 0)
				$return_array[] = 'Fizz';
    		elseif ($value % 5 == 0)
				$return_array[] = 'Buzz';
    		else
    			$return_array[] = $value;
		}

        return $return_array;
    }
}
