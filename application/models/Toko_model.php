<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model {
	public function getAllBarang()
	{
		return $this->db->get('tb_barang')->result_array();
	}
}
