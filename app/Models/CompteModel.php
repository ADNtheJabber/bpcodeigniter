<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
class CompteModel extends Model {
 
    var $table = 'compte';
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('compte');
    }
 
    public function get_all() {
//       $query = $this->db->table('compte');
       $query = $this->db->query('select * from compte');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $sql = 'select * from compte where id ='.$id ;
      $query =  $this->db->query($sql);
       
      return $query->getRow();
    }
 
    public function add($data) {
         
        $query = $this->db->table($this->table)->insert($data);
        
        return $this->db->insertID();
    }
 
    
    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id' => $id)); 
    }
 
}