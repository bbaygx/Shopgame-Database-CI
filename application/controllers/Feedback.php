<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'Base_Controller.php';
class Feedback extends Base_Controller {
//field tabel
var $data = [
        'nama' => '',
        'gmail' => '',
        'keluhan' => '',
        'tanggal' => '',
];

//nama model
var $context = 'feedback';
    public function __construct(){
    parent::__construct();
    $this->load->model('feedback_model','feedback');
    }
    function form(){
    $id = $this->uri->segment(3);
    if($id){
    $this->data = $this->feedback->find_by_id($id);
    }
    $this->data['feedbacks'] = $this->feedback->find_all();
    $this->load->view('feedback/form',$this->data);
}






  public function save(){
        $id = $this->input->post('id');
        // $file_name = $this->input->post('gambar_lama');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gmail', 'gmail', 'required');
        $this->data = [
            'nama' => $this->input->post('nama'),
            'gmail' => $this->input->post('gmail'),
            'keluhan' => $this->input->post('keluhan'),
            'tanggal' => $this->input->post('tanggal'),
        ];

        // //handling upload
        // if ($_FILES['gambar']['name'] != "") {
        //     $config = array(
        //         'upload_path' => "./assets/uploads/",
        //         'allowed_types' => "*",
        //         'overwrite' => TRUE,
        //         'file_name' => "gambar_" . date('YmdHis'),
        //         'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
        //     );

        //     $this->load->library('upload', $config);
        //     if ($this->upload->do_upload('gambar')) {
        //         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        //         $file_name = $upload_data['file_name'];
        //     } else {
        //         log_message('ERROR', 'error');
        //     }
        // }

        // $this->data['gambar'] = $file_name;

        if ($this->form_validation->run() == FALSE) {
            $this->form();
        } else {
            if ($id == '') {
                $this->feedback->insert($this->data);
            } else {
                $this->feedback->update($id, $this->data);
            }
            redirect(base_url('feedback'));
        }
    }


}
        