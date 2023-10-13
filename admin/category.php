<?php
require_once 'includes/header.php';
require_once '../class/Crud.php';
$obj = new Crud(); 

 ?>
<div class="container">

    <section class="category-section">
        <h1 class="text-uppercase border-bottom shadow-5">Danh Mục</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <input type="hidden" id="cat_id" name="id">
                        <input type="hidden" name="form_type" id="form_type">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary save">Lưu</button>
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
            foreach($obj->get() as $row){
            ?>
            <tr>
                <td><?php echo $num ++ ?></td>
                <td><?php echo $row['category_name'] ?></td>
                <td class="text-center w-25"><button class="btn btn-outline bg-warning"><i
                            class="fa-solid fa-pen-to-square"></i></button></td>
                <td class="text-center w-25"><button class="btn btn-outline bg-danger"><i
                            class="fa-solid fa-trash text-white"></i></button>
                </td>
            </tr>
            <?php } ?>
        </table>

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
});
</script>