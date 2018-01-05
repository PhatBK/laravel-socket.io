<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Các Bình Luận
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <?php if(Session::has('xoabinhluanthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('xoabinhluanthanhcong')); ?></strong></div>
                <?php endif; ?>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="Nội Dung">Nội Dung</th>
                        <th style="overflow:hidden;" title="ID Món Ăn">ID Món Ăn</th>
                        <th style="overflow:hidden;" title="ID User">ID User</th>
                        <th style="overflow:hidden;" title="Created_at">Created_at</th>
                        <th style="overflow:hidden;" title="Updated_at">Updated_at</th>
                        <th style="overflow:hidden;" title="Xóa">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> id); ?>"><?php echo e($cmt -> id); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> noidung); ?>"><?php echo e($cmt -> noi_dung); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> noidung); ?>"><?php echo e($cmt -> id_monan); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> noidung); ?>"><?php echo e($cmt -> id_user); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> created_at); ?>"><?php echo e($cmt -> created_at); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cmt -> updated_at); ?>"><?php echo e($cmt -> updated_at); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo e(route('xoaBinhLuan', [$cmt -> id_monan, $cmt -> id])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"> Xóa</a></td>
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