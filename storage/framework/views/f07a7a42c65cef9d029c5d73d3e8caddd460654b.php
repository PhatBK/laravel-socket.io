<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="text-align: center;">Kết Quả Thống Kê Hệ Thống
                        </h2>
                    </div>
                    <!-- /.col-lg-12 -->
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th  style="overflow:hidden;" title="Ngày">Ngày</th>
                                <th>Lượt Truy Cập</th>
                                <th>Món Ăn</th>
                                <th>Thể Loại</th>
                                <th>Loại Món</th>
                                <th>Công Dụng</th>
                                <th>Mục Đích</th>
                                <th>Vùng Miền</th>
                                <th>Tài Khoản</th>
                                <th>Tài Khoản Nhà Hàng</th>
                                <th>Ảnh</th>
                                <th>Video</th>
                                <th>Bài Đăng</th>
                                <th>Bình Luận</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td id="day" style="overflow:hidden;" title="Ngày"></td>
                                <td><?php echo e($luottruycaps); ?></td>
                                <td><?php echo e($monans); ?></td>
                                <td><?php echo e($theloais); ?></td>
                                <td><?php echo e($loaimons); ?></td>
                                <td><?php echo e($congdungs); ?></td>
                                <td><?php echo e($mucdichs); ?></td>
                                <td><?php echo e($vungmiens); ?></td>
                                <td><?php echo e($users); ?></td>
                                <td><?php echo e($nhahangs); ?></td>
                                <td><?php echo e($anhs); ?></td>
                                <td><?php echo e($videos); ?></td>
                                <td><?php echo e($baiviets); ?></td>
                                <td><?php echo e($comments); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
<script>
    var date = new Date();
    document.getElementById('day').innerHTML = date;
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>