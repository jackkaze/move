<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  
  //取得指定條件的素材資料
  public function sso($form_array){
    $this->db->select('sn, password, type')
             ->from('admin')
             ->where('account', $form_array['account'])
             ->where('status', 1);
    $query = $this->db->get();
    $sql_result = $this->get_all_result($query);
    if(isset($sql_result['count']) && $sql_result['count'] > 0){
      $form_password = $form_array['password'];
      $correct_password = $sql_result['data'][0]['password'];
      if(password_verify($form_password, $correct_password)){
        $sn = $sql_result['data'][0]['sn'];
        $encrypt_sn = $this->common_crypt->encrypt($sn);
        $type = $sql_result['data'][0]['type'];
        $encrypt_type = $this->common_crypt->encrypt($type);
        $newdata = array(
                         'logged_in' => TRUE,
                         'login_type' => $encrypt_type,
                         'login_sn' => $encrypt_sn
        );

        $this->session->set_userdata($newdata);
        $data = array('last_logined' => date("Y-m-d H:i:s"));
        $where = array('sn' => $sn);
        $this->_update($data, $where);
        return true;
      }
    }
    return false;
  }
  private function _update($data = array(), $where = array()){
    $this->db->update('admin', $data, $where);
    //echo $this->db->last_query();
    return $this->db->affected_rows();
  }
}