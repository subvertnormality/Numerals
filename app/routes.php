<?php

Route::get('/', function()
{
	return View::make('numerals');
});

Route::post('/romannumeral/parse', 'RomanNumeralController@parseRomanNumeral');

Route::post('/romannumeral/generate', 'RomanNumeralController@generateRomanNumeral');

