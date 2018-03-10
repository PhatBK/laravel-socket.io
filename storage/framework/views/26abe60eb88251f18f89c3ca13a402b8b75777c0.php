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
                    <?php if(session('thongbaoloi')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('thongbaoloi')); ?>


                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Món Ăn Của Nhà Hàng
                            <small>(tổng số:<b style="color: red;"><?php echo e(count($nhahangmonans)); ?></b>)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th>ID-Món Ăn</th>
                                <th>Tên Món</th>
                                <th>Ảnh</th>
                                <th>Nội Dung</th>
                                <th>Giá</th>
                                <th>Khuyến Mại</th>
                                <th>Ngày Đăng</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $nhahangmonans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                <td><?php echo e($monan->id); ?></td>
                                <td><?php echo e($monan->tenmon); ?></td>
                                <td><img src="<?php echo e($monan->image); ?>" alt="" width="50px" height="50px"></td>
                                <td><?php echo e($monan->noidung); ?></td>
                                <td><?php echo e($monan->gia); ?></td>
                                <td><?php echo e($monan->khuyenmai); ?></td>
                                <td><?php echo e($monan->created_at); ?></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="nhahang/monan/sua/<?php echo e($monan->id); ?>">Sửa</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="nhahang/monan/xoa/<?php echo e($monan->id); ?>">Xóa</a></td>
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
<?php echo $__env->make('nhahang.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>