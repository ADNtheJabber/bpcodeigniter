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
        $data['comptes'] = $this->CompteModel->get_all_compte();
        return view('compte_view', $data);
    }

    public function compte_add() {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $insert = $this->CompteModel->compte_add($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_edit($id) {
 
        $this->CompteModel = new CompteModel();
 
        $data = $this->CompteModel->get_by_id($id);
 
        echo json_encode($data);
    }
 
    public function compte_update() {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
 
        $data = array(
            'book_isbn' => $this->request->getPost('book_isbn'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author' => $this->request->getPost('book_author'),
            'book_category' => $this->request->getPost('book_category'),
        );
        $this->CompteModel->compte_update(array('book_id' => $this->request->getPost('book_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function compte_delete($id) {
 
        helper(['form', 'url']);
        $this->CompteModel = new CompteModel();
        $this->CompteModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
}