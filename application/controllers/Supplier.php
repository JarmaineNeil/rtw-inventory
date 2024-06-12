<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) { 
            redirect('login'); 
        }  
        $this->load->model('Supplier_model'); // Changed to uppercase for consistency
    }

    public function index() { 
        $data['page_title'] = "Suppliers"; 
        $data['suppliers'] = $this->Supplier_model->get_suppliers(); // Changed method name


        $this->load->view('delivery', $data); // Corrected view file name
    } 
    public function submit_supplier()
    {
        $data = $this->input->post();
    
        $result = $this->supplier_model->insert_supplier($data); 
        if ($result > 0) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span><i class="fas fa-check"></i> Successfully Added.</span>
                </div>
            ');
    
            $logs = array(
                'user_id' => $this->session->userdata('user_id'),
                'description' => 'Create supplier',
                'date' => date('Y-m-d H:i:s')
            );
    
            $this->user_model->insert_logs($logs);
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <span><i class="fas fa-exclamation"></i> Supplier already exists. Please try again.</span>
                </div>
            ');
        }
        redirect('supplier');
    }
    
    public function new_supplier() {
        $data['page_title'] = "New Supplier"; 
        $this->load->view('new_supplier', $data, FALSE); 
    }

    public function edit_supplier($id) {
        $data['page_title'] = "Edit Supplier"; 
        $data['supplier'] = $this->Supplier_model->get_supplier($id);
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
        redirect('delivery');
    }

    public function delete_supplier($id) {
        $this->supplier_model->delete_supplier($id);
        redirect('supplier');
    }
}
