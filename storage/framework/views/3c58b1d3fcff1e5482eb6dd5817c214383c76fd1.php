<?php $__env->startSection('content'); ?>

<script>
    function checkVideo(target) {
        if(target.files[0].type.indexOf("video") == -1) {
            alert("File bạn chọn không phải file video");
            return false;
        } else {
            return true;
        }
    }
</script>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(count($errors) > 0): ?>
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($err); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-12">
                <?php if(Session::has('themvideothanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('themvideothanhcong')); ?></strong></div>
                <?php elseif(Session::has('suavideothanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('suavideothanhcong')); ?></strong></div>
                <?php elseif(Session::has('xoavideothanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('xoavideothanhcong')); ?></strong></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <?php if($video != null): ?>
                <strong><p style="margin-left: 2em;">Tên Video: <?php echo e($video -> ten); ?></p></strong><br>
                <video src="uploads/video/<?php echo e($video -> ten); ?>" controls="" style="width: 580px; margin-left: 2em;"></video><br><br>
                <div class="col-lg-2"><i class="fa fa-pencil fa-fw"></i><a href="<?php echo e(route('suaVideo', [$monan -> id, $video -> id])); ?>">Sửa</a></div>
                <i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo e(route('xoaVideo', [$monan -> id, $video -> id])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a><br><br><br><br><br><br>
                <?php else: ?>
                <strong><p style="margin-left: 2em;">Không có video nào</p></strong><br><br><br><br>
                <div class="col-lg-7" style="padding-bottom:120px">
                <h3>Thêm Video</h3>
                <form action="<?php echo e(route('themVideo', $monan -> id)); ?>" method="POST" name="themVideo" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group">
                        <label>Chọn Video</label>
                        <input type="file" name="video" multiple="multiple" onchange="checkVideo(this)">
                    </div>
                    <div class="col-md-3"><button type="submit" class="btn btn-default">Thêm</button></div>
                    <div class="col-md-3"><a href="<?php echo e(route('danhSachMonAn')); ?>" class="btn btn-default">Cancel</a></div>
                </form>
            </div>
                <?php endif; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>