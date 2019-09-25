<?php

	// $quotes = readfile('czytaj.txt');
	// echo $quotes;

	$file = 'readme.txt';

	if (file_exists($file)) {

		// //read file
		// echo readfile($file) . '<br/>';

		// //copy file
		// copy($file, 'quotes.txt');

		// //absolute path
		// echo realpath($file) . '</br>';

		// //file sizes
		// echo filesize($file) . '</br>';

		// //rename file
		// rename($file, 'new.txt');

	} else {
		echo "file does not exist";
	}

	//make director
	mkdir('quotes');

?>