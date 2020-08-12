<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
class ClientMoralModel extends Model {
 
    var $table = 'clientMoral';
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('clientMoral');
    }
 
    public function get_all() {
//       $query = $this->db->table('compte');
       $query = $this->db->query('select * from clientMoral');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $sql = 'select * from clientMoral where id ='.$id ;
      $query =  $this->db->query($sql);
       
      return $query->getRow();
    }

    public function get_by_cni($identifiant) {
        $sql = 'select * from clientMoral where identifiant ='.$identifiant ;
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