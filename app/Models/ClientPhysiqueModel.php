<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
class ClientPhysiqueModel extends Model {
 
    var $table = 'clientphysique';
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('clientphysique');
    }
 
    public function get_all() {
//       $query = $this->db->table('compte');
       $query = $this->db->query('select * from clientphysique');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $sql = 'select * from clientphysique where id ='.$id ;
      $query =  $this->db->query($sql);
       
      return $query->getRow();
    }
 
    public function add($data) {
         
        $query = $this->db->table($this->table)->insert($data);
        
        return $this->db->insertID();
    }
 
    public function clientphysique_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
 
    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id' => $id)); 
    }
 
}