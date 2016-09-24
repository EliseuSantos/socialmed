<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if (!function_exists('pass_crypt')){
    function pass_crypt($parametro, $cost = 12) {
      $limit = (isset($cost) && $cost <= 12) ? $cost : 12;
      if(strlen($parametro) >= 1){
				$cost = $limit;
        $salt = 'Cf1X11ePArKlBJomM0f6aJ';
        // Gera um hash baseado em bcrypt
        return crypt($parametro, '$2a$' . $cost. '$' . $salt . '$');
      } else {
        return FALSE;
      }
    }
  }
