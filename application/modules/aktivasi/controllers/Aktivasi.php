<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivasi extends CI_Controller {


   function __construct(){
     parent::__construct();
   }

   public function index(){
     $this->load->view('Frontend/header.php');
     $this->load->view('v_input');
		 $this->load->view('Frontend/footer.php');
   }

   function input(){

       $nama_pelanggan = $this->input->post('nama_pelanggan');
       $port_onu = $this->input->post('port_onu');
       $sn_modem = $this->input->post('port_onu');
       $no_onu = $this->input->post('no_onu');
       $jenis_onu = $this->input->post('jenis_onu');
       $user_pppoe = $this->input->post('user_pppoe');
       $password_pppoe = $this->input->post('password_pppoe');


   $data = array(
     'nama_pelanggan' => $nama_pelanggan,
     'port_onu' => $port_onu,
     'no_onu' => $no_onu,
     'jenis_onu' => $jenis_onu,
     'user_pppoe' => $user_pppoe,
     'password_pppoe' => $password_pppoe

     );
   $this->M_aktivasi->input_data($data, 'aktivasi');
   redirect('aktivasi');
   }
}
