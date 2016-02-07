<?php

$input = $_GET['input'];

$input_separated = explode(' ', $input);



var_dump($input_separated);

$new_word = NULL;
foreach($input_separated as $word){
	$first = NULL;
	$second = NULL;
	$third = NULL;
	var_dump(strlen($word));
	$word_array = str_split($word);
	var_dump($word_array);

	for ($i=0; $i <sizeof($word_array) ; $i++) { 
		// $start = $i;
		if(!ctype_alnum($word_array[0])) {
			if(!ctype_alnum($word_array[$i])){
				$first = $first.$word_array[$i];
				var_dump('first - '.$first);
				if($i<sizeof($word_array)-1){
					if(!ctype_alnum($word_array[$i+1]))
						continue;
					else
						break;
				}
			}
		}
	}

	for ($i=0; $i < sizeof($word_array); $i++) { 
		if(ctype_alnum($word_array[$i])){
			$second = $second.$word_array[$i];
			var_dump('second - '.$second);
			if($i<sizeof($word_array)-1){
				if(ctype_alnum($word_array[$i+1]))
					continue;
				else
					break;
			}
		}
	}

	for ($j=$i; $j < sizeof($word_array); $j++) { 
		if(!ctype_alnum($word_array[$j])){
			$third = $third.$word_array[$j];
			var_dump('third - '.$third);
			if($j<sizeof($word_array)-1){
				if(!ctype_alnum($word_array[$j+1]))
					continue;
				else
					break;
			}
		}
	}
	$word = $third.$second.$first;
	var_dump($word);
	$new_word = $new_word.' '.$word;
}
var_dump(trim($new_word));
?>