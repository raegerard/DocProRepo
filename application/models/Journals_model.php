<?php
class Journals_model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    
    public static function get(){
        $query = self::$db->get('journals');
        return $query->result();
    }
    
  	 public static function add($data){
        self::$db->insert('journals', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }

     public static function edit($id, $data){
        self::$db->where('journ_id', $id)->update('journals', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }

     public static function update($data){
        self::$db->insert('journals', $data);        
        return self::$db->affected_rows() > 0 ? true : false;
    }
}