<?php

class Model_cart extends CI_Model { 

    public function insert_cart($data) { 
        $this->db->insert('cart', $data);
    }

    public function get_cart_by_userid($id) { 
        $query = $this->db->where('idUser', $id)->get('cart');
        return $query->result();
    }
    public function is_exist_medicine($id) {
        $query = $this->db->where('idMedicine', $id)->get('cart');
        if ($query->result()) { 
            return TRUE;
        }else { 
            return false;
        }
    }

    public function get_medicine_qty($id) {
        $query = $this->db->where('idMedicine', $id)->select('qty')->get('cart');
        return $query->row()->qty;
    }

    public function update_medicine_qty($id, $qty) { 
        $this->db->set('qty', $qty);
        $this->db->where('idMedicine', $id);
        $this->db->update('cart');
    }

    public function delete_item_by_id($id) { 
        $this->db->where('id', $id);
        $this->db->delete('cart');
    }

    public function clear_cart($id) { 
        $this->db->where('idUser', $id)->delete('cart');
    }

    public function add_item_by_id($id) { 
        $this->db->set('qty', 'qty+1', FALSE);
        $this->db->where('id', $id);
        $this->db->update('cart');
    }

    public function sub_item_by_id($id) { 
        $this->db->set('qty', 'qty-1',false);
        $this->db->where('id', $id);
        $this->db->update('cart');
    }
}

?>