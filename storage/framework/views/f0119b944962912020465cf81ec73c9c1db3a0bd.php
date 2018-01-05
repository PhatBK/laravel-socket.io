<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["themVungMien"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên vùng miền");
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
                        <h1 class="page-header">Vùng Miền
                            <small>Thêm</small>
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
                        <form name="themVungMien" action="<?php echo e(route('themVungMien')); ?>" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                          
                            <div class="form-group">
                                <label>Tên vùng miền</label>
                                <input class="form-control" name="ten" required placeholder="nhập tên vùng miền"/>
                            </div>
                            <div class="form-group">
                                  <label >Chọn ảnh đại diện</label>
                                  <input required type="file" name="anh">
                             </div>
                            <div class="form-group">
                                <label>vị trí</label>
                                <input class="form-control" name="vitri" placeholder="vị trí"/>
                            </div>
                            <div class="form-group">
                                <label>giới thiệu</label><br>
                                <textarea cols="80" rows="6" name="gioithieu" ></textarea>
                            </div>
                           <div class="form-group" >
                                <div class="col-md-4 col-md-offset-3 container-fluid">
                                    <button type="submit" class="btn btn-primary pull-left">Thêm</button>
                                    <a class="btn btn-warning pull-right"" href="<?php echo e(route('danhSachVungMien')); ?>">Huỷ bỏ</a>
                                </div>
                            </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>