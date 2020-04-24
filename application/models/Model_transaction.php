<?php

class Model_transaction extends CI_Model { 

    public function add_transaction($data) { 
        $this->db->insert('transaction', $data);
    }
}
    
?>