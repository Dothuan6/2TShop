<?php
require_once 'Db.php';
class Crud extends Db{
    public function insert($table_name,$data){
    if(!empty($data)){
        $fields = $placeholder = [];

        foreach($data as $field =>$value){
            $fields[] = $field;
            $placeholder[] = ":{$field}";
        }
    }

    $sql  = "insert into {$table_name} (".implode(',',$fields) .") values(". implode(',',$placeholder).")";
    $stmt = $this->db->prepare($sql);

    try{
        $this->db->beginTransaction();
        $stmt -> execute($data);
        $this->db->commit();
        $insert_id = $this->db->lastInsertId();
        return $insert_id;

    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
    } 
    }
    public function get(){
        $sql = "select * from category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
} 
?>