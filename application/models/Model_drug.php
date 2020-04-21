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

    public function count_row_by_category($category) { 
        $query = $this->db->where('category', $category)->get('drug');
        return $query->num_rows();
    }

    public function get_drug_limit_by_category($category, $limit,$start){ 
        return $this->db->where('category', $category)->get('drug',$limit, $start)->result();
    }
}
    
?>