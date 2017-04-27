<?php

namespace Larowlan\RomanNumeral;

/**
 * Defines a class for generating roman numerals from integers.
 */
class RomanNumeralGenerator {

  /**
   * Generates a roman numeral from an integer.
   *
   * @param int $number
   *   Integer to convert.
   * @param bool $lowerCase
   *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
   *
   * @return string
   *   Roman numeral representing the passed integer.
   */
  public function generate(int $number, bool $lowerCase = FALSE) : string {  	
  	if($number < 1 || $number > 3999){ // return '0' if number is not in the range from 1 to 3999
  		return '0';
  	}
  	$aArray = [1000,900,500,400,100,90,50,40,10,9,5,4,1];
  	$rArray = ['M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I'];
  	$rNum = '';
  	for($i=0; $i<count($aArray); $i++){
  		while($number >= $aArray[$i]){
  			$rNum .= $rArray[$i];
  			$number -= $aArray[$i];
  		}
  	}
  	if($lowerCase){
  		return strtolower($rNum);
  	}
  	return $rNum;
  }

}
