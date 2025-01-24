<?php
	$morse = ['A'=>'.-', 'B'=>'-...', 'C'=>'-.-.', 'D'=>'-..', 'E'=>'.', 'F'=>'..-.', 'G'=>'--.', 
	'H'=>'....', 'I'=>'..', 'J'=>'.---', 'K'=>'-.-', 'L'=>'.-..', 'M'=>'--', 'N'=>'-.', 'O'=>'---', 
	'P'=>'.--.', 'Q'=>'--.-', 'R'=>'.-.', 'S'=>'...', 'T'=>'-', 'U'=>'..-', 'V'=>'...-', 'W'=>'.--', 
	'X'=>'-..-', 'Y'=>'-.--', 'Z'=>'--..', '1'=>'.----', '2'=>'..---', '3'=>'...--', '4'=>'....-', 
	'5'=>'.....', '6'=>'-....', '7'=>'--...', '8'=>'---..', '9'=>'----.', '0'=>'-----', ' '=>'/' ];

	$msg = "I love Kitkat";

	$msg = strtoupper($msg);
	$morseCode = '';


	foreach(str_split($msg) as $char)
	{
		if (isset($morse[$char])) 
		{
			$morseCode .= $morse[$char] . ' '; // Append Morse code with a space
		}
	}

	echo trim($morseCode);
?>