<?php
require_once '../../class/Crud.php';
$obj = new Crud();
//insert
if($_POST['form_type'] == 'save'){
    if(empty($_POST["category_name"])){
        echo "<script>alert('Nhập vào tên Danh Mục')</script>";
    }else{
        $data = [
            'category_name'=> $_POST['category_name']
        ];
        $result=$obj->insert('category',$data);
    }
    echo json_encode($data);
}
//update
if($_POST['form_type'] == 'edit'){
    if(empty($_POST["category_name"])){
        echo "<script>alert('Nhập vào tên Danh Mục')</script>";
    }else{
        $data = [
            'category_name'=> $_POST['category_name']
        ];
        $cat_id = $_POST['cat_id'];
        $result=$obj->update('category',$data,"where category_id = '$cat_id'");
    }
    echo json_encode($data);
}
?>