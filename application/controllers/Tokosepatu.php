<?php
defined('BASEPATH') or exit ('no direct script acces allowed');

class Tokosepatu extends CI_Controller{
    public function index()
    {
        $this->load->view('tokosepatu/v_input');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama','Nama pembeli' ,'requied|min_length[3]',
        array(
            'requied'=> '%s Harus diisi',
            'min_lenght'=> '%s terlalu pendek')

        );
        $this->form_validation->set_rules('nohp','Nomor HP' ,'requied|min_length[3]',
        array(
            'requied'=> '%s Harus diisi',
            
        ));
        $this->form_validation->set_rules('nohp','Nomor HP' ,'requied|min_length[3]',
        array(
            'requied'=> '%s Harus diisi',
            
        ));
        $this->form_validation->set_rules('ukuran','Ukuran Sepatu' ,'requied|min_length[3]',
        array(
            'requied'=> '%s Harus diisi',
        ));
        if($this->form_validation->run()== FALSE)

        {
            $this->load->view('tokosepatu/v_input');
        }  else {
            $data=[
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'merek' => $this->input->post('merek'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga'),
        ];
        if($this-> input->post('merek')=="Nike"){
            $data['harga']= 375000;
        }elseif($this->input->post('merek')=="Adidas"){
            $data['harga']=30000;
        }elseif($this->input->post('merek')=="Kicker"){
            $data['harga']=302300;
        }elseif($this->input->post('merek')=="Eiger"){
            $data['harga']=30200;
        }elseif($this->input->post('merek')=="Bucherri"){
            $data['harga']=300020;
        }
        $this->load->view('tokosepatu/V_output',$data);
        }     
    
    }
}