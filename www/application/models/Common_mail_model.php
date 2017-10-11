<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_mail_model extends MY_Model{
  public function __construct() {
    parent::__construct();
    $this->load->library('email');
  }
  
  public function send_mail($to = "jackkaze@gmail.com", $subject = "subject", $content = "content", $file = false)
  {
    $mail_set = $this->config->item('mail_set');
    $this->email->from($mail_set['from'], $mail_set['from_name']);
    $this->email->to($to); 
    $this->email->cc($mail_set['cc']);
    $this->email->subject($subject);
    $this->email->message($content); 
    if($file)
    {
      if(is_array($file))
      {
        foreach ($file as $key => $value)
        { 
          $this->email->attach($value);
        }
      }
      else
      {
        $this->email->attach($file);
      }
    }
    $this->email->send();
  }
}