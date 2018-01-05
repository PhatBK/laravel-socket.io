<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Các Bài Viết Liên Quan
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <?php if(Session::has('xoabaivietthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('xoabaivietthanhcong')); ?></strong></div>
                <?php endif; ?>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="Tiêu Đề">Tiêu Đề</th>
                        <th style="overflow:hidden;" title="Nội Dung">Nội Dung</th>
                        <th style="overflow:hidden;" title="Số Lượt Xem">Số Lượt Xem</th>
                        <th style="overflow:hidden;" title="Số Lượt Thích">Số Lượt Thích</th>
                        <th style="overflow:hidden;" title="Số Lượng Bình Luận">Số Lượng Bình Luận</th>
                        <th style="overflow:hidden;" title="ID Loại Món">ID Loại Món</th>
                        <th style="overflow:hidden;" title="ID User">ID User</th>
                        <th style="overflow:hidden;" title="Created_at">Created_at</th>
                        <th style="overflow:hidden;" title="Updated_at">Updated_at</th>
                        <th style="overflow:hidden;" title="Xóa">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bv_lienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bvlq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> id); ?>"><?php echo e($bvlq -> id); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> noidung); ?>"><?php echo e($bvlq -> tieude); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> noidung); ?>"><?php echo e($bvlq -> noidung); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> soluotxem); ?>"><?php echo e($bvlq -> soluotxem); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> soluotthich); ?>"><?php echo e($bvlq -> soluotthich); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> soluong_comment); ?>"><?php echo e($bvlq -> soluong_comment); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> id_loaimon); ?>"><?php echo e($bvlq -> id_loaimon); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> id_user); ?>"><?php echo e($bvlq -> id_user); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> created_at); ?>"><?php echo e($bvlq -> created_at); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($bvlq -> updated_at); ?>"><?php echo e($bvlq -> updated_at); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo e(route('XoaBaiVietLienQuan', [$bvlq -> id, $ma -> id] )); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"> Xóa</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /#page-wrapper -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>