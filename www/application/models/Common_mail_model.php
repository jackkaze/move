<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_mail_model extends MY_Model{
  public function __construct() {
    parent::__construct();
    $this->load->library('email');
  }
  
  //mail_list, subject, content, file_attach
  public function send_mail($config = array())
  {
    if(isset($config['mail_list']) && isset($config['subject']) && isset($config['content'])){
      $mail_set = $this->config->item('mail_set');
      $this->email->from($mail_set['from'], $mail_set['from_name']);
      $this->email->to($config['mail_list']); 
      $this->email->cc($mail_set['cc']);
      $this->email->subject($config['subject']);
      $this->email->message($config['content']); 
      if(isset($config['file_attach']) && $config['file_attach'])
      {
        if(is_array($config['file_attach']))
        {
          foreach ($config['file_attach'] as $key => $value)
          { 
            $this->email->attach($value);
          }
        }
        else
        {
          $this->email->attach($config['file_attach']);
        }
      }
      $this->email->send();
    }
  }
}