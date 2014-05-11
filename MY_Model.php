<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
	protected $table = '';



	/**
	* Créé un nouvel enregistrement avec les valeurs passées en paramètre et retourne son id
	**/
	public function create($values) {
		if ($this->db->set($values)->insert($this->table)) return $this->db->insert_id();
		return null;
	}


	/**
	* Recherche les enregistrements correspondants aux condiditions passées en paramètres
	**/
	public function find($where = array()) {
		$req = $this->db->get_where($this->table, $where);
		return $req->result();
	}
	

	
	/**
	* Met à jour les enregistrements en fonction des condiditions passées en paramètres
	**/
	public function update($where, $value) {
		return $this->db->where($where)->update($this->table, $value);
	}
	


	/**
	* Supprime les enregistrements en fonction des condiditions passées en paramètres
	**/
	public function delete($where) {
		return $this->db->where($where)->delete($this->table);
	}


	
}
