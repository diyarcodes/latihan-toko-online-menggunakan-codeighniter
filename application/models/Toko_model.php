<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko_model extends CI_Model
{
	public function getAllBarang()
	{
		return $this->db->get('tb_barang')->result_array();
	}

	public function tambahDataBarang()
	{
		$data = [
			'nama_brg' => htmlspecialchars($this->input->post('nama_brg')),
			'keterangan' => htmlspecialchars($this->input->post('keterangan')),
			'kategori' => $this->input->post('kategori'),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'stok' => htmlspecialchars($this->input->post('stok')),
			'gambar' => $this->_uploadGambar()
		];

		$this->db->insert('tb_barang', $data);
	}

	private function _uploadGambar()
	{
		$config['upload_path']          = './assets/img/uploadBarang/';
		$config['allowed_types']        = 'jpeg|jpg|png|gif';
		$config['max_size']             = '5000';

		$this->upload->initialize($config);

		if ($this->upload->do_upload('gambar_brg')) {
			return $this->upload->data('file_name');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
		}
	}

	public function getAllBarangById($id)
	{
		return $this->db->get_where('tb_barang', ['id_brg' => $id])->row_array();
	}

	public function editDataBarang()
	{
		$data = [
			'nama_brg' => htmlspecialchars($this->input->post('nama_brg')),
			'keterangan' => htmlspecialchars($this->input->post('keterangan')),
			'kategori' => htmlspecialchars($this->input->post('kategori')),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'stok' => htmlspecialchars($this->input->post('stok')),
			'gambar' => $this->_ubahUploadGambar()
		];

		$this->db->where('id_brg', $this->input->post('id_brg'));
		$this->db->update('tb_barang', $data);
	}

	private function _ubahUploadGambar()
	{
		if (empty($_FILES['gambar']['name'])) {
			$gambar = $this->input->post('gambarLama');
			return $gambar;
		} else {
			$config['upload_path']          = './assets/img/uploadBarang/';
			$config['allowed_types']        = 'jpeg|jpg|png|gif';
			$config['max_size']             = '5000';

			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
				return $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
			}
		}
	}

	public function hapusDataBarang($id)
	{
		$this->db->where('id_brg', $id);
		$this->db->delete('tb_barang');
	}
}
