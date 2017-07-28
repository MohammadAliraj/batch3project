<?php

class Calculator{
	public function sum()
	{
		echo 7+5;
	}
}
class Book extends Calculator
{
	function b1();
	{
		echo 'b1';
	}
}
//multi level
class EnglishBook extends Book{

}
//create object
//$obBookClass  = new Book();

$obEnglishBookClass = new EnglishBook();
$obEnglishBookClass->sum();
