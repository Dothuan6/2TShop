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
    public function get($table_name, $offset,$records_per_page){
        $sql = "select * from $table_name limit $offset,$records_per_page";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function custom_get($table_name,$where='')
    {
        $sql = "SELECT * FROM $table_name ";
        if(!empty($where)){
            $sql .= $where;
        }
        // prepare our query
        $stmt = $this->db->prepare($sql);
        // executation our prepared method
        $stmt->execute();
        //fetch all data from the table
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function pagination($table,$no_of_records_per_page){
        $query = "select COUNT(*) from $table";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $total_records= $stmt->fetchColumn();

        $total_pages = ceil($total_records/$no_of_records_per_page);
        return $total_pages;
    }

    //cap nhat
    public function update($table,$data,$where){
        if(!empty($data)) {
            $fields = '';
            $x =1;
            $fieldscount = count($data);
            foreach($data as $field => $value){
                $fields .= "{$field}=:{$field}";
                if($x < $fieldscount) {
                    $fields .= ", ";
                }
                $x++;
            }
        }
        $sql = "UPDATE $table SET {$fields} $where";
        $stmt = $this->db->prepare($sql);
        try {
            $this->db->beginTransaction();
            $stmt->execute($data);
            $this->db->commit();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->db->rollback();
        }

    }

    public function delete($table_name,$where){
        $sql= "delete from $table_name $where";
        $stmt = $this->db->prepare($sql);
        try{
            $this->db->beginTransaction();
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
            $this->db->rollBack(); 
        }
    }
}
?>