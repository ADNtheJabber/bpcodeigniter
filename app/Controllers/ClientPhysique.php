<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ClientPhysiqueModel;
class ClientPhysique extends Controller {
 
 
    public function index() {
         
        return view('clientPhysique/ajout');
    }
 
    public function liste() {
         
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
        $data['clients'] = $this->clientPhysiqueModel->get_all();
        return view('clientPhysique/liste', $data);
    }

    public function add() {
 
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = array(
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'email' => $this->request->getPost('email'),
            'tel' => $this->request->getPost('tel'),
            'adresse' => $this->request->getPost('adresse'),
            'identifiant' => $this->request->getPost('identifiant'),
            'profession' => $this->request->getPost('profession'),
            'salaire' => $this->request->getPost('salaire'),
            'infosEmp' => $this->request->getPost('info_employeur'),
        );
        $insert['inserts'] = $this->clientPhysiqueModel->add($data);

        //var_dump($resultat);
        //die;
        
        return view('clientPhysique/result', $insert);
    }
 
    public function ajax_edit($id) {
 
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = $this->clientPhysiqueModel->get_by_id($id);
 
        echo json_encode($data);
    }

    public function ajax_cni($identifiant) {
 
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = $this->clientPhysiqueModel->get_by_cni($identifiant);
 
        echo json_encode($data);
    }
 
    
    public function delete($id) {
 
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new clientPhysiqueModel();
        $this->clientPhysiqueModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}