<?php

class Model_user extends CI_Model { 

    public function get_user_by_email($email) {
        $query = $this->db->where('email', $email)->get('user');
        return $query->row();
    }

    public function get_user_by_id($id) { 
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

    public function upload_photo($id, $pic) {
        $query = $this->db->query("UPDATE user SET pic = '$pic' WHERE id = $id"); 

    }

    public function check_update_email($email, $new) { 
        $query = $this->db->query("SELECT * FROM user WHERE email LIKE '$new' AND email NOT LIKE '$email'");
        return $query->row();
    }

    public function update_profile($data, $id) { 
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

    public function delete_profile($id) { 
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function update_password($password, $email){
        $this->db->set('password',$password);
        $this->db->where('email',$email);
        $this->db->update('user');
    }

}


?>