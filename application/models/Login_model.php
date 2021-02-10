<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function cekDataAdmin($username)
    {   #cek data admin
        $sql = "SELECT * from login where username = '$username' ";
        $result = $this->db->query($sql);
        return $result->row_array();
    }
}
