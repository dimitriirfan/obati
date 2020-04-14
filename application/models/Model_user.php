<?php

class Model_user extends CI_Model { 

    public function getUserByEmail($email) {
        $query = $this->db->where('email', $email)->get('user');
        return $query->row();
    }

    public function register($data) { 
        $this->db->insert('user', $data);

    }

    public function login($email, $password) { 
        $this->db->like('email', $email);
        $this->db->like('password', $password);
        $query = $this->db->get('user'); 
        if ($query->row() != NULL) { 
            return true;
        }else { 
            return false;
        }
    }

}


?>