<?php

class DokterModel
{

	private $table = 'dokter';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllDokter()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getDokterByid($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDokter($data)
	{
		$query = "INSERT INTO Dokter (id, Nama, lokasi, spesialis) VALUES(:id, :nama, :lokasi, :spesialis)";
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('lokasi', $data['lokasi']);
		$this->db->bind('spesialis', $data['spesialis']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataDokter($data)
	{
		$query = "UPDATE Dokter SET id=:id, nama=:nama, lokasi=:lokasi, spesialis=:spesialis WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('lokasi', $data['lokasi']);
		$this->db->bind('spesialis', $data['spesialis']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteDokter($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariDokter()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id LIKE :key");
		$this->db->bind('key', "%$key%");
		return $this->db->resultSet();
	}
}
