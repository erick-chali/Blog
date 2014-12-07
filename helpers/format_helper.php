<?php 
	//Formato de la fecha
	function formatDate($date){
		return date('F j, Y, g:i a',strtotime($date));
	}
	
	//Funcion para hacer mas corto el texto que se muestra en el index
	function shortText($text, $chars = 450){
		$text = $text." ";
		$text = substr($text, 0, $chars);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.". . .";
		return $text;
	}