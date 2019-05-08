<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model
{

    public function findId($id)
    {
        $this->load->model('Modele');
        $ret = $this->Modele->findById("article", $id);
        return $ret;
    }

    public function findAll()
    {
        $this->load->model('Modele');
        $ret = $this->Modele->findAll("article");
        return $ret;
    }

    public function findArticle($idCat)
    {
        $this->load->model('Modele');
        $ret = $this->Modele->findArticle($idCat);
        return $ret;
    }

}