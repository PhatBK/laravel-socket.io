<?php $__env->startSection('content'); ?>
<script>
    function validateForm() {
        var x = document.forms["loaimon"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên loại món");
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
                        <h1 class="page-header">Loại Món
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
                        <form name="loaimon" action="<?php echo e(route('suaLoaiMon',$loaimon->id)); ?>" enctype="multipart/form-data"  method="POST" onsubmit="return validateForm()">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="ten" required  value="<?php echo e($loaimon->ten); ?>" placeholder="nhập tên loại món"/>
                            </div>
                             <div class="form-group">
                                <label>thể Loại</label>
                               <select name="idtheloai" class="form-control form-control-sm">
                                   <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($tl->id); ?>" <?php if($tl->id==$loaimon->id_theloai): ?> selected <?php endif; ?>><?php echo e($tl->ten); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </select>

                            </div>
                             <div class="form-group">
                              <label >Chọn ảnh đại diện</label>
                              <input  value="<?php echo e($tl->anh); ?>" type="file" name="anh">
                             </div>
                             <div class="form-group">
                                <td><img src="<?php echo e($loaimon->anh); ?>" alt="" width="150px" height="150px"></td>
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
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>