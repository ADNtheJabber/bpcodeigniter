<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
class ClientMoralModel extends Model {
 
    var $table = 'clientmoral';
     
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('clientmoral');
    }
 
    public function get_all() {
//       $query = $this->db->table('compte');
       $query = $this->db->query('select * from clientmoral');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $sql = 'select * from clientmoral where id ='.$id ;
      $query =  $this->db->query($sql);
       
      return $query->getRow();
    }
 
    public function add($data) {
         
        $query = $this->db->table($this->table)->insert($data);
        
        return $this->db->insert();
    }
 
    public function clientMoral_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
 
    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('id' => $id)); 
    }
 
}