<?php
class LoginModel extends CI_Model
{
  public function can_login($email, $password)
  {
    $query = $this->db->select('f_name,l_name,id')->get_where('user', array('email' => $email, 'password' => $password));
   // print_r($query->result_array()); die;
    if($row = $query->result_array())
    {
        
        return $row[0];
     
    }
    else
    {
      return false;
    }
   
  }
}

?>