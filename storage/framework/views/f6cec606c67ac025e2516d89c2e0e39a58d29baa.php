<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["suaTheLoai"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên thể loại");
            return false;
        } else {
            return true;
        }
    }
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Sửa</small>
                </h1>
            </div>
            <?php if(count($errors) > 0): ?>
            <div class="col-lg-12">
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
            </div>
            <?php endif; ?>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form name="suaTheLoai" action="<?php echo e(route('suaTheLoai', $theloai -> id)); ?>" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="ten" value="<?php echo e($theloai -> ten); ?>" required />
                    </div>
                    <div class="form-group">
                              <label >Chọn ảnh đại diện</label>
                              <input value="<?php echo e($theloai->anh); ?>" type="file" name="anh">
                    </div>
                    <div class="form-group">
                                <td><img src="<?php echo e($theloai->anh); ?>" alt="" width="150px" height="150px"></td>
                             </div>
                    <div class="form-group" >
                                <div class="col-md-4 col-md-offset-3 container-fluid">
                                    <button type="submit" class="btn btn-primary pull-left">Lưu</button>
                                    <button type="button" class="btn btn-warning pull-right" onclick="window.location='<?php echo e(URL::previous()); ?>'">Huỷ bỏ</button>
                                </div>
                            </div>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>