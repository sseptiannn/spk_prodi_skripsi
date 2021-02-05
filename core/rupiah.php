<?php
	function rupiah($jum){
		$rupiah	= number_format($jum,0,',','.');
		return ''.$rupiah.',-';
	}

	function uang($jum){
		$uang	= number_format($jum,0,',','.');
		return $uang.',-';
	}

	function angka($jum){
		$uang	= number_format($jum,0,',','.');
		return $uang;
	}
?>