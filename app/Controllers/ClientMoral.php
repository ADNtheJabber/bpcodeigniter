<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ClientMoralModel;
class ClientMoral extends Controller {
 
 
    public function index() {
         
        return view('clientMoral/ajout');
    }
 
    public function liste() {
         
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
        $data['clients'] = $this->clientMoralModel->get_all();
        return view('clientMoral/liste', $data);
    }

    public function add() {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = array(
            'nom' => $this->request->getPost('nom'),
            'raisonSociale' => $this->request->getPost('raisonSociale'),
            'email' => $this->request->getPost('email'),
            'tel' => $this->request->getPost('tel'),
            'adresse' => $this->request->getPost('adresse'),
            'ninea' => $this->request->getPost('ninea'),
            'regiscom' => $this->request->getPost('registreCommerce'),
        );
        $insert['inserts'] = $this->clientMoralModel->add($data);
        return view('ClientMoral/result', $insert);
    }
 
    public function ajax_edit($id) {
 
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = $this->clientMoralModel->get_by_id($id);
 
        echo json_encode($data);
    }

    public function ajax_cni($identifiant) {
 
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = $this->clientMoralModel->get_by_cni($identifiant);
 
        echo json_encode($data);
    }
 
    public function update() {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = array(
            'nom' => $this->request->getPost('nom'),
            'raisonSociale' => $this->request->getPost('raisonSociale'),
            'email' => $this->request->getPost('email'),
            'tel' => $this->request->getPost('tel'),
            'adresse' => $this->request->getPost('adresse'),
            'ninea' => $this->request->getPost('ninea'),
            'registreCommerce' => $this->request->getPost('registreCommerce'),
        );
        $this->clientMoralModel->clientMoral_update(array('id' => $this->request->getPost('id')), $data);
        return view('ClientMoral/liste');
    }
 
    public function delete($id) {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
        $this->clientMoralModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}