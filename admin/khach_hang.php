<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Tài Khoản</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search" required>
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng thống kê Khách Hàng</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên khách hàng</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Hình ảnh</th>
                                    <th class="border-top-0">Vai trò</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $taikhoan): ?>
                                <tr>
                                    <td>
                                        <?php echo $taikhoan['maTK']?>
                                    </td>
                                    <td>
                                        <?php echo $taikhoan['tenTK']?>
                                    </td>
                                    <td>
                                        <?php echo $taikhoan['email']?>
                                    </td>
                                     <td>
                                        <img src="../img/<?php echo $taikhoan['anh']?>" alt="" width="50" height="50">
                                    </td>
                                    <td>
                                        <?php 
                                            if($taikhoan['maVaiTro'] == 1){
                                                echo "Khách hàng vãng lai";
                                            }else if($taikhoan['maVaiTro'] == 2){
                                                echo "Khách hàng";
                                            }else if($taikhoan['maVaiTro'] ==3){
                                                echo "Nhân viên";
                                            }else{
                                                echo "Quản trị viên";
                                            }
                                        ?>
                                    </td>
                                   
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>