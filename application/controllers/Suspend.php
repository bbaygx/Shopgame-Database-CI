<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Suspend extends Base_Controller {

    //field tabel
    var $data = [
        'nama' => '',
        'telpon' => ''
    ];

    //nama model
    var $context = 'suspend';

    function form(){
        $id = $this->uri->segment(3);
        if($id){
            $this->data = $this->suspend->find_by_id($id);
        }
        $this->load->view('/suspend/form',$this->data);
    }

    function save(){
        $id = $this->input->post('id');
        $this->form_validation->set_rules('nama','nama suspend','required');
        $this->form_validation->set_rules('telpon','telepon','required');
        $this->data = [
            'nama' =>  $this->input->post('nama'),
            'telpon' =>  $this->input->post('telpon'),
        ]; 
        if($this->form_validation->run() == FALSE){
            $this->load->view('/suspend/form',$this->data);
        }else{
            if($id == ''){
                $this->suspend->insert($this->data);
            }else{
                $this->suspend->update($id,$this->data);
            }
            redirect(base_url('suspend'));
        }
    }

}