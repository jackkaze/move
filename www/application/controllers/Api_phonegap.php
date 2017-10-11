<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  header("Content-type:application/json");
  header("Access-Control-Allow-Origin: *");

  class Api_phonegap extends MY_Controller
  {
    public function __construct()
    {
      parent::__construct();
    }
    public function index()
    {
      $form_array = $this->input->post(NULL, true);
      $expire_time = time() + 86400;
      $encrypt_expire_time = $this->common_crypt->encrypt($expire_time);
      echo json_encode(array('status' => 'Y',
                             'data' => $form_array,
                             'encrypt_expire_time' => $encrypt_expire_time,
                             'server' => $_SERVER
      ));
      exit;
    }
  }