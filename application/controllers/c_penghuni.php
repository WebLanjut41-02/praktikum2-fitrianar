<?php
class c_penghuni extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('postM');
		$this->load->helper('url');
	}

	public function index(){
		$data['penghuni'] = $this->postM->tampil_data()->result();
		$this->load->view('t_penghuni', $data);
	}

	public function tambah(){
		$this->load->view('penghuni');
	}

	public function prosesT(){
		$noKTP = $this->input->post('noKTP');
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');

		$data = array(
						'noKTP'=>$noKTP,
						'nama'=>$nama,
						'unit'=>$unit);

		$this->postM->input_data($data,'penghuni');
		redirect('c_penghuni/index');
	}
}
?>