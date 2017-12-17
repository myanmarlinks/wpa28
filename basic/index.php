<?php 
	
	$text = "Lorem ipsum dolor sit amet, consectabetur adipisicing elit. Sit aliquid animi dolores dolore nobabis aut, quisquam tempore, sunt earum qui voluptatem odit eaque nulla velit, ab natus rem omnis temporibus.";

	/* 
	1. how to show text of variable $test
	2. how to get type of variable
	3. no. of character
	4. no. of word
	5. specific character count
	6. specific word count
	7. space count
	8. reverse string
	9. capitalize
	10. how to count character without space 
	11. how to find specific word
	*/

	echo $text;
	echo "<br >";
	echo gettype($text);
	echo "<br >";
	echo strlen($text);
	echo "<br >";
	echo str_word_count($text);
	echo "<br >";
	echo substr_count($text, " ");
	echo "<br >";
	echo strrev($text);


 ?>

