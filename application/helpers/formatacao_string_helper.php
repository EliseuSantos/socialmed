<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	
	//	Verifica a existência de ao menos um caracter alfanumérico em uma string - Retorno Booleano
	if (!function_exists('pesquisa_alfanumerico')){
		function pesquisa_alfanumerico($string) {
	    for ($i=0; $i < count(str_split($string)) ; $i++) { 
	      $alfanumerico = str_split($string);
	      if(ctype_digit($alfanumerico[$i])){
	        return TRUE;
	      }
	    }
	    return FALSE;
	  }
	}
	
	//	Verifica a existência de ao menos um caracter alfabético em uma string - Retorno Booleano
	if (!function_exists('pesquisa_alfabetico')){
	  function pesquisa_alfabetico($string) {
	    for ($i=0; $i < count(str_split($string)) ; $i++) { 
	      $alfabetico = str_split($string);
	      if(ctype_alpha($alfabetico[$i])){
	        return TRUE;
	      }
	    }
	    return FALSE;
	  }
	}

	if (!function_exists('capitalize_string')){
	  function capitalize_string($string) {
	   	$string = ucwords(strtolower((string)$string));
	   	return $string; 
		}
	}

	if (!function_exists('limitar_caracteres')){
	  function limitar_caracteres($string, $limite) {
	  	if(strlen($string) > $limite) {
	   		$string = mb_substr(trim($string), 0, $limite) . "...";
	  	}
	   	return $string;
		}
	}