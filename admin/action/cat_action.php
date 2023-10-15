<?php
require_once '../../class/Crud.php';

$obj = new Crud();
if($_POST['action'] == 'edit'){
    $cat_id = $_POST['cat_id'];
    $a = $obj->custom_get('category',"WHERE `category_id` = '$cat_id'");

    foreach($a as $row){
        echo json_encode($row);
    }
}
?>