<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\clientPhysiqueModel;
class ClientPhysique extends Controller {
 
 
    public function index() {
         
        return view('clientPhysique/ajout');
    }
 
    public function liste() {
         
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
        $data['clients'] = $this->clientPhysiqueModel->get_all_clientPhysique();
        return view('clientPhysique/liste', $data);
    }

    public function clientPhysique_add() {
 
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $insert = $this->clientPhysiqueModel->clientPhysique_add($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_edit($id) {
 
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = $this->clientPhysiqueModel->get_by_id($id);
 
        echo json_encode($data);
    }
 
    public function clientPhysique_update() {
 
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new ClientPhysiqueModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $this->clientPhysiqueModel->clientPhysique_update(array('book_id' => $this->request->getPost('id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function clientPhysique_delete($id) {
 
        helper(['form', 'url']);
        $this->clientPhysiqueModel = new clientPhysiqueModel();
        $this->clientPhysiqueModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}