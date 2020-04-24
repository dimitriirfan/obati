<?php

class Model_article extends CI_Model { 

    
    public function get_article_by_id($id) {
        $query = $this->db->where('id', $id)->get('article');
        return $query->row();
    }

    public function get_article(){
        $query = $this->db->query('SELECT * FROM article');
        return $query->result();
    }

}