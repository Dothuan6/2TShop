   <?php 
   include_once ('includes/header.php');
    ?>


   <section class="working-panel w-100">
       <!-- <h1>Giao Diện Quản Lý</h1> -->
       <div class="container-fluid">
           <h1 class="display-4">Giao Diện Quản Lý Thuận</h1>
           <hr>
           <div class="row">
               <!-- categories -->
               <div class="col-md-3">
                   <div class="card bg-orange-g text-white">
                       <div class="card-body">
                           <h4 class="font-weight-light"><i class="fa-solid fa-cart-flatbed"></i> Danh Mục</h4>
                           <hr>
                           <h5><b>12345</b></h5>
                       </div>
                   </div>
               </div>
               <!-- brand -->
               <div class="col-md-3">
                   <div class="card bg-green-g text-white">
                       <div class="card-body">
                           <h4 class="font-weight-light"><i class="fa-solid fa-dolly"></i> Nhan Hang</h4>
                           <hr>
                           <h5><b>12345</b></h5>
                       </div>
                   </div>
               </div>
               <!-- user -->
               <div class="col-md-3">
                   <div class="card bg-golden-g text-white">
                       <div class="card-body">
                           <h4 class="font-weight-light"><i class="fa-solid fa-user"></i> Khach Hang</h4>
                           <hr>
                           <h5><b>12345</b></h5>
                       </div>
                   </div>
               </div>
               <!-- order -->
               <div class="col-md-3">
                   <div class="card bg-primary-g text-white">
                       <div class="card-body">
                           <h4 class="font-weight-light"><i class="fa-solid fa-basket-shopping"></i> Don Hang</h4>
                           <hr>
                           <h5><b>12345</b></h5>
                       </div>
                   </div>
               </div>
           </div>
           <!-- table -->
           <div class="all-order  mt-4">
               <table class="table table-bordered">
                   <h2>Don Hang Moi</h2>
                   <thead>
                       <tr class="bg-dark text-white">
                           <th scope="col">STT</th>
                           <th scope="col">Ten Don Hang</th>
                           <th scope="col">So Luong</th>
                           <th scope="col">Ngay</th>
                           <th scope="col">Trang Thai Don</th>
                           <th scope="col">Trang Thai Thanh Toan </th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>3</td>
                           <td>Otto</td>
                           <td><span class="badge badge-danger">Unpaid</span></td>
                           <td><span class="badge badge-cuccess">Hoan thanh</span></td>

                       </tr>
                       <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>4</td>
                           <td>Thornton</td>
                           <td><span class="badge badge-success">paid</span></td>
                           <td><span class="badge badge-info">Dang giai quyet</span></td>

                       </tr>
                       <tr>
                           <th scope="row">3</th>
                           <td>Larry the Bird</td>
                           <td>5</td>
                           <td>abc</td>
                           <td><span class="badge badge-warning">moi</span></td>
                           <td><span class="badge badge-warning">moi</span></td>


                       </tr>
                   </tbody>
               </table>
           </div>
           <!--  -->
           <div class="order-pagination">
               <nav aria-label="Page navigation example">
                   <ul class="pagination">
                       <li class="page-item">
                           <a class="page-link" href="#" aria-label="Previous">
                               <span aria-hidden="true">&laquo;</span>
                           </a>
                       </li>
                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                       <li class="page-item">
                           <a class="page-link" href="#" aria-label="Next">
                               <span aria-hidden="true">&raquo;</span>
                           </a>
                       </li>
                   </ul>
               </nav>
           </div>
       </div>
   </section>
   </div>

   <?php include_once 'includes/footer.php'; ?>