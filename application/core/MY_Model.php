<?php
Class MY_Model extends CI_Model {
  public function __construct(){
  	parent::__construct();
    $this->load->helper('formatacao_data_helper');
    $this->load->helper('formatacao_string_helper');
//    $CI = &get_instance();
//    $this->websystem = $CI->load->database('websystem', TRUE);
  }
}
?>
