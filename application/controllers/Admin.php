 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
 
 public function index()
    {
		$this->load->helper('url');
        $this->load->model('Modele');
		$this->load->model('Article');
        $Modele = new Modele();
        $output = $Modele->findAllArticle();
		$listeArticle = $this->Article->findAll();
        $listeCategorie = $this->Modele->findAll("categorie");
        $listSch = $Modele->findAll("categorie");
        $view_data = array(
            'page' => 'departments',
            'output' => $output,
			'listeArticle'=>$listeArticle, 
			'listeCategorie'=>$listeCategorie,
			'title'=>'BackOffice',
            'listSch' => $listSch
        );
        $this->load->view('index',$view_data);
    }

    public function go_add()
    {
		$this->load->helper('url');
        $this->load->model('Modele');
        $Modele = new Modele();
        $listSch = $Modele->findAll();
        $view_data = array(
            'page' => 'create',
            'listSch' => $listSch
        );
        $this->load->view('back/index-back',$view_data);
    }

    public function addArticle()
    {
		$this->load->helper('url');
        $this->load->model('Modele');
        $Modele = new Modele();
        $data = array(
            'idarticle' => $this->input->post('idarticle'),
            'idcategorie' => $this->input->post('idcategorie'),
            'titre' => $this->input->post('titre'),
            'info' => $this->input->post('info'),
            'details' => $this->input->post('details'),
            'image' => $this->input->post('image'),
            'sortie' => $this->input->post('sortie')
        );
        $Modele->addArticle($data);
        redirect(base_url().'index.php?c=Admin', 'refresh');
    }

    public function updateArticle()
    {
		$this->load->helper('url');
        $this->load->model('Modele');
        $Modele = new Modele();
        $id = $this->input->post('idarticle');
        $data = array(
            'idcategorie' => $this->input->post('idcategorie'),
            'titre' => $this->input->post('titre'),
            'info' => $this->input->post('info'),
            'details' => $this->input->post('details'),
            // 'image' => $this->input->post('image'),
            'sortie' => $this->input->post('sortie')
        );
        $Modele->updateArticle($id,$data);
        redirect(base_url().'index.php?c=Admin', 'refresh');
    }

    public function deleteArticle()
    {
		$this->load->helper('url');
        $this->load->model('Modele');
        $Modele = new Modele();
        $id = $this->input->post('idarticle');
        $Modele->deleteArticle($id);
        redirect(base_url().'index.php?c=Admin', 'refresh');
    }
	
}