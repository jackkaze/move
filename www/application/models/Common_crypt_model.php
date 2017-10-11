<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_crypt_model extends MY_Model{
  public function __construct() {
    parent::__construct();
    $this->load->library('encryption');
    //取得32字元長度的密鑰，放在config的encryption_key
    //$key = bin2hex($this->encryption->create_key(32));
  }
  
  public function encrypt($word = ''){
    return $this->encryption->encrypt($word);
  }
  public function decrypt($encrypt_word = ''){
    return $this->encryption->decrypt($encrypt_word);
  }
}