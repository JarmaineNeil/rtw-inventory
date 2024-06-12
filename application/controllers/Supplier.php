<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) { 
            redirect('login'); 
        }  
        $this->load->model('supplier_model');
    }

    public function index() { 
        $data['page_title'] = "Suppliers"; 
        $data['supplier'] = $this->supplier_model->get_supplier(); 
        $this->load->view('suppliers', $data, FALSE); 
    } 

    public function new_supplier() {
        $data['page_title'] = "New Supplier"; 
        $this->load->view('new_supplier', $data, FALSE); 
    }

    public function edit_supplier($id) {
        $data['page_title'] = "Edit Supplier"; 
        $data['supplier'] = $this->supplier_model->get_supplier($id);
        $this->load->view('edit_supplier', $data, FALSE); 
    }

    public function submit_edit_supplier($id) {
        $data = $this->input->post();
        $this->supplier_model->update_supplier($id, $data);
        redirect('supplier');
    }

    public function submit_new_supplier() {
        $data = $this->input->post();
        $this->supplier_model->insert_supplier($data);
        redirect('supplier');
    }

    public function delete_supplier($id) {
        $this->supplier_model->delete_supplier($id);
        redirect('supplier');
    }
}
