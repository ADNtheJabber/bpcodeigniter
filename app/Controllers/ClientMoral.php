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
        $data['clients'] = $this->clientMoralModel->get_all_clientPhysique();
        return view('clientPhysique/liste', $data);
    }

    public function clientPhysique_add() {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $insert = $this->clientMoralModel->clientPhysique_add($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_edit($id) {
 
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = $this->clientMoralModel->get_by_id($id);
 
        echo json_encode($data);
    }
 
    public function clientPhysique_update() {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $this->clientMoralModel->clientPhysique_update(array('book_id' => $this->request->getPost('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function clientPhysique_delete($id) {
 
        helper(['form', 'url']);
        $this->clientMoralModel = new ClientMoralModel();
        $this->clientMoralModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}