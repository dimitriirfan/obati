<?php

class Model_drug extends CI_Model { 

    public function get_drug_by_category($category) {
        $query = $this->db->where('category', $category)->get('drug');
        return $query->result();    
    }

    public function get_drug_by_id($id) {
        $query = $this->db->where('idObat', $id)->get('drug');
        return $query->row();
    }
}
    
?>