<?php

class Model_user extends CI_Model { 

    public function getUserByEmail($email) {
        $query = $this->db->where('email', $email)->get('user');
        return $query->row();
    }

    public function getUserById($id) { 
        $query = $this->db->where('id', $id)->get("user");
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

    public function uploadPhoto($id, $pic) {
        $query = $this->db->query("UPDATE user SET pic = '$pic' WHERE id = $id"); 

    }

    public function checkUpdateEmail($email, $new) { 
        $query = $this->db->query("SELECT * FROM user WHERE email LIKE '$new' AND email NOT LIKE '$email'");
        return $query->row();
    }

    public function updateProfile($data, $id) { 
        $query = $this->db->query("
            UPDATE user SET 
            name = '$data->name', 
            email = '$data->email',
            address = '$data->address',
            birth = '$data->birth',
            gender = '$data->gender',
            no_hp = '$data->no_hp'

            WHERE id = $id;
        ");
    }

}


?>