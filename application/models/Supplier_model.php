<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {
  
  public function get_suppliers() {
    return $this->db->get('supplier')->result_array();  
  }

  public function insert_supplier($data) {
    $this->db->insert('supplier', $data);
    return $this->db->affected_rows();
  }

  public function update_supplier($id, $data) {
    $this->db->where('supplier_id', $id);
    return $this->db->update('supplier', $data);
  }

  public function delete_supplier($id) {
    $this->db->where('supplier_id', $id);
    $this->db->delete('supplier');
    return $this->db->affected_rows();
  }

  public function get_supplier($id) {
    $this->db->where('supplier_id', $id);
    return $this->db->get('supplier')->row_array();
  }
}
