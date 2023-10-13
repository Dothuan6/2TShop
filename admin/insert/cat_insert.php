<?php
require_once '../../class/Crud.php';
$obj = new Crud();

if(empty($_POST["category_name"])){
    echo "<script>alert('Nhập vào tên Danh Mục')</script>";
}else{
    $data = [
        'category_name'=> $_POST['category_name']
    ];
    $result=$obj->insert('category',$data);
}
echo json_encode($data);
?>