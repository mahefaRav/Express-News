<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Modele extends CI_Model
{
	public function findAll($table)
	{
		$sql = "SELECT * FROM %s" ;
        $sql = sprintf($sql,$table);
        $resultat = $this->db->query($sql);             
		$ret = $resultat->result_array();
		return $ret;
	}

    public function findArticle($cat)
    {
        $sql = "SELECT * FROM article where idcategorie='%s'" ;
        $sql = sprintf($sql,$cat);
        $resultat = $this->db->query($sql);
        $ret = $resultat->result_array();
        return $ret;
    }

    public function findById($table, $id)
    {
        $sql = "SELECT * FROM %s where idarticle=%s" ;
        $sql = sprintf($sql,$table,$id);
        $resultat = $this->db->query($sql);
        $ret = $resultat->row_array();
        return $ret;
    }
}