<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Model {

		public function createkelas()
		{
			$object = array(
				'nama' => $this->input->post('nama')
			 );
			$this->db->insert('kelas',$object);
		}

		public function getkelas()
		{
			$query = $this->db->get('kelas');
			return $query->result();
		}


		public function getSiswa()
		{
			
		$query = $this->db->query("select a.id, a.nama, a.tanggal_lahir, a.foto, a.fk_kelas, b.nama as namakelas from siswa as a join kelas as b on a.fk_kelas = b.id");
			return $query->result();
		}

		public function insertSiswa()
		{
			$object = array(
				'nama' => $this->input->post('nama'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'foto' => $this->upload->data('file_name'),
				'fk_kelas' => $this->input->post('kelas') 
				);

			$this->db->insert('siswa',$object);
		}

		public function updatesiswa($id)
		{
			$object = array(
				'nama' => $this->input->post('nama'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'foto' => $this->upload->data('file_name'),
				'fk_kelas' => $this->input->post('kelas') 
				);
			$this->db->where('id',$id);
			$this->db->update('siswa',$object);
		}

		public function deletes($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('siswa');
		}

		public function getpict($id)
		{
			$row = $this->db->select('foto')->where('id',$id)->get('siswa')->row();
				$array = get_object_vars($row);
				return $row->foto;
		}

		public function deletekelas($id)
		{
			//$this->db->where('id',$id);
			//$this->db->delete('kelas');
		}

		public function getdata($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('siswa');
		return $query->result();

	}

	public function getsiswaKelas($id)
	{
		$this->db->where('fk_kelas', $id);
		$query = $this->db->get('siswa');
		return $query->result();
	}

}

/* End of file Siswa.php */
/* Location: ./application/models/Siswa.php */ ?>