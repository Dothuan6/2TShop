<?php
require_once 'includes/header.php';
require_once '../class/Crud.php';
$obj = new Crud(); 
$no_of_records_per_page =2;

if(isset($_GET['pageno'])){
    $pageno =$_GET['pageno'];

}else{
    $pageno = 1;
}
$offset = ($pageno-1)*$no_of_records_per_page;

 ?>
<div class="container">

    <section class="category-section">
        <h1 class="text-uppercase border-bottom shadow-5">Danh Mục</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info add_category" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm danh mục
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-regular fa-circle-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="cat_form">
                            <div class="form-group">
                                <label for="category_name">
                                    Tên danh mục
                                </label>
                                <input type="text" name="category_name" id="category_name" class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="cat_id" name="cat_id">
                        <input type="hidden" name="form_type" id="form_type">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary save" id="submit">Lưu</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <table class="table table-bordered mt-3">
            <tr class="bg-info">
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Chỉnh Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php 
            $num = 1;
            foreach($obj->get('category',$offset,$no_of_records_per_page) as $row){
            ?>
            <tr id="category_<?php echo $row['category_id']; ?>">
                <td><?php echo $num ++ ?></td>
                <td><?php echo $row['category_name'] ?></td>
                <td class="text-center w-25"><button id="<?php echo $row['category_id']; ?>"
                        class="btn btn-outline bg-warning edit" name="edit" type="button"><i
                            class="fa-solid fa-pen-to-square"></i></button></td>
                <td class="text-center w-25"><a href="category.php?delete_id=<?php echo $row['category_id']; ?>"
                        class="btn btn-outline btn-danger delete" name='delete'>
                        <i class="fa-solid fa-trash text-white"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <ul class="pagination">
            <?php
                $total_pages = $obj->pagination('category',$no_of_records_per_page);
                for($i=1;$i<=$total_pages;$i++){
                    echo "<li class='page-item'><a href='?pageno=$i'class='page-link'> $i </a></li>";
                } 
         ?>

        </ul>

    </section>
</div>

<?php include_once 'includes/footer.php'; ?>

<script>
$(document).ready(function() {
    $(document).on("submit", "#cat_form", function(e) {
        e.preventDefault();

        var fd = new FormData(this);

        $.ajax({
            url: 'insert/cat_insert.php',
            type: 'POST',
            data: fd,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                $('#cat_form')[0].reset();
                $('#exampleModal').modal('hide');
                // window.reload();
                location.reload();
            }
        });
    });
    $('.edit').click(function() {
        var cat_id = $(this).attr('id');
        var btn = "edit";
        $('#exampleModal').modal('show');
        $('.modal-title').text('Cập nhật Danh Mục');
        $('#submit').removeClass('btn btn-primary btn-outline save').addClass(
            'btn btn-warning btn-outline update').text('update');
        // tồn tại edit thì hiện 'cập nhật' // không thì chạy qua bên main.js để xuất hiện 'lưu' 
        $('#form_type').val('edit');
        $.ajax({
            url: "action/cat_action.php",
            method: "POST",
            data: {
                cat_id: cat_id,
                action: btn,
            },
            dataType: "json",
            success: function(res) {
                //truyền giá trị name vào input
                $('#cat_id').val(res.category_id);
                $('#category_name').val(res.category_name);
            }
        });

    });
});
</script>
<?php
if(isset($_GET['delete_id'])){
    $cat_id = $_GET['delete_id'];
    $delete = $obj->delete('category',"where category_id = '$cat_id'");
    if($delete){
        echo "<script>alert('Xóa thành công!')</script>";
    }
}
?>