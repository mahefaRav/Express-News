<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
        $this->load->model('Modele');
        $this->load->model('Article');
        $listeArticle = $this->Article->findAll();
        $listeCategorie = $this->Modele->findAll("categorie");
        $listeBreaking = $this->Modele->findAll("breakingnews");
		$page = $this->input->get('page');
		$send = array('page'=>$page, 'listeArticle'=>$listeArticle, 'listeCategorie'=>$listeCategorie, 'listeBreaking'=>$listeBreaking, 'title'=>'Express News');
		$this->load->view('index', $send);
	}

    public function allArticle(){
        $this->load->helper('url');
        $this->load->model('Modele');
        $this->load->model('Article');
        $listeArticle = $this->Article->findAll();
        $listeCategorie = $this->Modele->findAll("categorie");
        $listeBreaking = $this->Modele->findAll("breakingnews");
        $send = array('listeArticle'=>$listeArticle,'page'=>'home', 'listeCategorie'=>$listeCategorie, 'listeBreaking'=>$listeBreaking , 'title'=>'Breaking News');
        $this->load->view('index',$send);
    }

    public function allSports(){
        $this->load->helper('url');
        $this->load->model('Modele');
        $this->load->model('Article');
        $cat = $this->input->get('cat');
        $listeArticle = $this->Article->findArticle($cat);
        $listeCategorie = $this->Modele->findAll("categorie");
        $send = array('listeArticle'=>$listeArticle,'page'=>'sports', 'listeCategorie'=>$listeCategorie , 'title'=>'Express Breaking News');
        $this->load->view('index',$send);
    }

    public function ficheproduits(){
        $this->load->helper('url');
        $this->load->model('Modele');
        $this->load->model('Article');
        $id = $this->input->get('id');
        $article = $this->Article->findId($id);
        $listeArticle = $this->Article->findAll();
        $listeCategorie = $this->Modele->findAll("categorie");
        $send = array('article'=>$article,'page'=>'single', 'listeCategorie'=>$listeCategorie, 'listeArticle'=>$listeArticle, 'title'=>'Express Breaking News');
        $this->load->view('index',$send);
    }
}
