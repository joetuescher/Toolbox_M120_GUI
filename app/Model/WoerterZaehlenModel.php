<?php

class WoerterZaehlenModel{

	public function __construct(){}

	function WoerterZaehlen($text){
		$charlist = 'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ';
		$solution = str_word_count($text, 0, $charlist);
		return $solution;
	}

}

?>