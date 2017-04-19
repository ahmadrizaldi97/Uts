<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->model('Siswa');
		$data['datakelas'] = $this->Siswa->getKelas();
		$this->load->view('kelas', $data);	
	}

	public function indexsiswa()
	{
		$this->load->model('Siswa');
		$data['datasiswa'] = $this->Siswa->getSiswa();
		$this->load->view('datasiswa', $data);	
	}

	public function tambahsiswa()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');

		$this->load->model('Siswa');	

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';
		$config['max_width']  = '4024';
		$config['max_height']  = '3200';
		
		$this->load->library('upload', $config);
		
		

		if($this->form_validation->run()==FALSE){

			$data['datakelas'] = $this->Siswa->getKelas();
			$this->load->view('tambah_siswa',$data);

		}else{
				if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				$data['datakelas'] = $this->Siswa->getKelas();
				$this->load->view('tambah_siswa',$data);
			}
			else{
				$this->Siswa->insertSiswa();
				$data['datasiswa'] = $this->Siswa->getSiswa();
				$this->load->view('datasiswa', $data);	
			}
		}
	}


	public function edit($id)
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');

		$this->load->model('Siswa');	

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1000000';
		$config['max_width']  = '4024';
		$config['max_height']  = '3200';
		
		$this->load->library('upload', $config);
		
		

		if($this->form_validation->run()==FALSE){

			$data['datakelas'] = $this->Siswa->getKelas();
			$data['datasiswa'] = $this->Siswa->getdata($id);
			$this->load->view('editsiswa',$data);

		}else{
				if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				$data['datakelas'] = $this->Siswa->getKelas($id);
				$this->load->view('editsiswa',$data);
				echo $error;
			}
			else{
				$this->Siswa->updatesiswa($id);
				$data['datasiswa'] = $this->Siswa->getSiswa();
				$this->load->view('datasiswa', $data);	
			}
		}
	}

	public function deletes($id)
	{
		$this->load->model('Siswa');
		$this->load->helper("file");
		
		$ss = $this->Siswa->getpict($id);

		$this->Siswa->deletes($id);

		$file = "assets/uploads/";
		$file .= $ss;

		if (is_readable($file) && unlink($file)) {
		   
			$data['datasiswa'] = $this->Siswa->getSiswa();
			$this->load->view('datasiswa', $data);	}
		
	}


	public function tambahkelas()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
				

		$this->load->model('Siswa');	

		if($this->form_validation->run()==FALSE){

			$this->load->view('tambah_kelas');

		}else{
			$this->Siswa->createkelas();
			$data['datakelas'] = $this->Siswa->getKelas();
			$this->load->view('kelas', $data);	
		}
	}

	public function deleteskelas($id)
	{
		$this->load->model('Siswa');
		$this->Siswa->deletekelas($id);

		$data['datakelas'] = $this->Siswa->getKelas();
			$this->load->view('kelas', $data);	
	}

	public function kelassiswa($id)
	{
		$this->load->model('Siswa');

		$data['datasiswa'] = $this->Siswa->getsiswaKelas($id);
		$this->load->view('kelassiswa', $data);	
	}




	//---

	

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>