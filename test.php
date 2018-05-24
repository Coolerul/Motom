<?php
	/*
		TEST TASK 
		Nikita Erkhov
		
		
	*/
	
	
	
	$file="test.txt";
	
	function arrSort($a, $b){
		if($a[0]==$b[0]) return 0;
		
		if($a[0]>$b[0]) return 1; else return -1;
	}
	function generateRandomStr(){
	
		$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$random_str = substr(str_shuffle($characters), 0, mt_rand(1,8));
		return $random_str. PHP_EOL;
	}
	function generateRandomText(){
		$count=mt_rand(10,20);
			while($count){
				$text.=generateRandomStr();
				$count--;
			}
	
		return $text;
	}
	
	
	file_put_contents($file, generateRandomText());
	$array=file($file);
	
	usort($array, 'arrSort');

	$height = count( $array );
	$width = max( array_map( 'mb_strlen',  $array ) )-1;

	echo 'Размер массива:'.$height.'x'.$width;
	echo '<pre>';
	print_r($array);
	echo '</pre>';
?>