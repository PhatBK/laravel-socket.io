<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<script>
    function validateForm() {
        var x = document.forms["nguyenlieu"]["ten"].value.trim();
        if (x == "") {
            alert("Bạn chưa nhập tên nguyên liệu");
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
                <h1 class="page-header">Nguyên Liệu
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
                <form name="nguyenlieu" action="admin/nguyenlieu/them" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                    <div class="form-group ">
                        <label>Tên Nguyên Liệu</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên nguyên liệu" required="" />
                    </div>
                    <div class="form-group">
                          <label >Ảnh Nguyên Liệu</label>
                          <input required type="file" name="anh">
                    </div>
                    <div class="form-group ">
                        <label>Calos:</label>
                        <input class="form-control" name="calos" placeholder="Lượng calos cung cấp:" required="" type="number" />
                    </div>
                    <div class="form-group ">
                        <label>Carbon:</label>
                        <input class="form-control" name="carbon" placeholder="Lượng carbon cung cấp:" required="" type="number"/>
                    </div>
                    <div class="form-group ">
                        <label>Chất Xơ:</label>
                        <input class="form-control" name="xo" placeholder="Lượng xơ cung cấp:" required="" type="number"/>
                    </div>
                    <div class="form-group ">
                        <label>Chất Béo:</label>
                        <input class="form-control" name="fat" placeholder="Lượng chất béo cung cấp:" required="" type="number"/>
                    </div>
                    <div class="form-group ">
                        <label>Chất Béo Bão Hòa:</label>
                        <input class="form-control" name="fat_baohoa" placeholder="Lượng chất béo bão hòa cung cấp:" required="" type="number"/>
                    </div>
                    <div class="form-group ">
                        <label>Protein:</label>
                        <input class="form-control" name="protein" placeholder="Lượng Protein cung cấp:" required="" type="number"/>
                    </div>

                    <div class="form-group" >
                        <div class="col-md-4 col-md-offset-3 container-fluid">
                            <button type="submit" class="btn btn-primary pull-left">Thêm</button>
                            <a class="btn btn-warning pull-right" href="admin/nguyenlieu/danhsach">Huỷ bỏ</a>
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