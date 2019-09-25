<?php

	$file = 'quotes.txt';

	$handle = fopen($file, 'a+');

	// //read a file
	// echo fread($handle, length);

	// //read a single line
	// echo fgets($handle);

	// //read single character
	// echo fgetc($handle);

	fwrite($handle, "\nDragon ball is great movie it it's end");

	fclose($handle);

	unlink($file);

?>