<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CompteModel;
class Compte extends Controller {
 
 
    public function index() {
         
        return view('compte/ajout');
    }
 
    public function liste() {
         
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
        $data['comptes'] = $this->CompteModel->get_all();
        return view('compte/liste', $data);
    }

    public function add() {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();

        if ($_POST['typeCompte']==1) {
            
            $data = array(
                'numCompte' => $this->request->getPost('numeroCompte'),
                'fraisOuv' => $this->request->getPost('fraisOuverture'),
                'typeCompte' => ('Courant'),
                'remuneration' => $this->request->getPost('remuneration'),
                'solde' => $this->request->getPost('depotInitial'),
                'agios' => $this->request->getPost('agios'),
                'dateOuverture' => $this->request->getPost('dateOuverture'),
                'dateDeblocage' => $this->request->getPost('dateDeblocage'),
                //'idClientEntreprise' => $this->request->getPost('searchEntreprise'),
                //'idClientPhysique' => $this->request->getPost('searchPhysique'),
            );
        } 
        else if ($_POST['typeCompte']==2) {
           
            $data = array(
                'numCompte' => $this->request->getPost('numeroCompte'),
                'fraisOuv' => $this->request->getPost('fraisOuverture'),
                'typeCompte' => ('Epargne'),
                'remuneration' => $this->request->getPost('remuneration'),
                'solde' => $this->request->getPost('depotInitial'),
                'agios' => $this->request->getPost('agios'),
                'dateOuverture' => $this->request->getPost('dateOuverture'),
                'dateDeblocage' => $this->request->getPost('dateDeblocage'),
                //'idClientEntreprise' => $this->request->getPost('searchEntreprise'),
                //'idClientPhysique' => $this->request->getPost('searchPhysique'),
            );
        } 
        else if ($_POST['typeCompte']==3) {
            
            $data = array(
                'numCompte' => $this->request->getPost('numeroCompte'),
                'fraisOuv' => $this->request->getPost('fraisOuverture'),
                'typeCompte' => ('Bloque'),                'remuneration' => $this->request->getPost('remuneration'),
                'solde' => $this->request->getPost('depotInitial'),
                'agios' => $this->request->getPost('agios'),
                'dateOuverture' => $this->request->getPost('dateOuverture'),
                'dateDeblocage' => $this->request->getPost('dateDeblocage'),
                //'idClientEntreprise' => $this->request->getPost('searchEntreprise'),
                //'idClientPhysique' => $this->request->getPost('searchPhysique'),
            );
        }
 
        
        $insert['inserts'] = $this->CompteModel->add($data);
        return view('compte/result', $insert);
    }
 
    public function ajax_edit($id) {
 
        $this->CompteModel = new CompteModel();
 
        $data = $this->CompteModel->get_by_id($id);
 
        echo json_encode($data);
    }
 
    public function update() {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
 
        $data = array(
            'numcompte' => $this->request->getPost('numerocompte'),
            'fraisOuv' => $this->request->getPost('fraisOuverture'),
            'remuneration' => $this->request->getPost('remuneration'),
            'solde' => $this->request->getPost('depotInitial'),
            'agios' => $this->request->getPost('agios'),
            'dateOuverture' => $this->request->getPost('dateOuverture'),
            'dateDeblocage' => $this->request->getPost('dateDeblocage'),
            'searchEntreprise' => $this->request->getPost('searchEntreprise'),
            'searchPhysique' => $this->request->getPost('searchPhysique'),
        );
        $this->CompteModel->compte_update(array('book_id' => $this->request->getPost('book_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function delete($id) {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
        $this->CompteModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}