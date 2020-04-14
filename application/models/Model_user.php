<?php

class Model_user extends CI_Model { 

    public function getUserByEmail($email) {
        $query = $this->db->where('email', $email)->get('user');
        return $query->row();
    }

    public function register($data) { 
        $this->db->insert('user', $data);

    }

}


?>