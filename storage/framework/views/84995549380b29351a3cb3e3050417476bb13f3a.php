<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php if(session('thongbao')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="text-align: center;">Lịch Sử Thống Kê Hệ Thống
                        </h2>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th style="overflow:hidden;" title="Ngày">Ngày</th>
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
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $thongkes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thongke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td style="overflow:hidden;" title="<?php echo e($thongke->created_at); ?>"><?php echo e($thongke->created_at); ?></td>
                                <td><?php echo e($thongke->soluong_truycap); ?></td>
                                <td><?php echo e($thongke->soluong_monan); ?></td>
                                <td><?php echo e($thongke->soluong_theloai); ?></td>
                                <td><?php echo e($thongke->soluong_loaimon); ?></td>
                                <td><?php echo e($thongke->soluong_congdung); ?></td>
                                <td><?php echo e($thongke->soluong_mucdich); ?></td>
                                <td><?php echo e($thongke->soluong_vungmien); ?></td>
                                <td><?php echo e($thongke->soluong_taikhoan); ?></td>
                                <td><?php echo e($thongke->soluong_nhahanglienket); ?></td>
                                <td><?php echo e($thongke->soluong_anh); ?></td>
                                <td><?php echo e($thongke->soluong_video); ?></td>
                                <td><?php echo e($thongke->soluong_baipost); ?></td>
                                <td><?php echo e($thongke->soluong_comment); ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/thongke/xoa/<?php echo e($thongke->id); ?>">Xóa</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>