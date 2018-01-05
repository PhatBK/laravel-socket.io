<?php $__env->startSection('content'); ?>

<script>
    function checkImage(target) {
        if(target.files[0].type.indexOf("image") == -1) {
            alert("File bạn chọn không phải file ảnh");
            return false;
        } else {
            return true;
        }
    }

    function validateForm() {
        var a = document.forms["themBuocNau"]["noiDungBuoc"].value.trim();
        if (a == "") {
            alert("Bạn chưa nhập nội dung bước nấu");
            return false;
        }  else {
            return true;
        }
    }
</script>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Các bước nấu
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
                <?php if(Session::has('thembuocnauthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('thembuocnauthanhcong')); ?></strong></div>
                <?php elseif(Session::has('suabuocnauthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('suabuocnauthanhcong')); ?></strong></div>
                <?php elseif(Session::has('xoabuocnauthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('xoabuocnauthanhcong')); ?></strong></div>
                <?php endif; ?>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="ID Món Ăn">ID Món Ăn</th>
                        <th style="overflow:hidden;" title="Nội Dung">Nội Dung</th>
                        <th style="overflow:hidden;" title="Ảnh">Ảnh</th>
                        <th style="overflow:hidden;" title="Created_at">Created_at</th>
                        <th style="overflow:hidden;" title="Updated_at">Updated_at</th>
                        <th style="overflow:hidden;" title="Sửa">Sửa</th>
                        <th style="overflow:hidden;" title="Xóa">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cacbuocnau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cbn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> id); ?>"><?php echo e($cbn -> id); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> id_monan); ?>"><?php echo e($cbn -> id_monan); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> noidung); ?>"><?php echo e($cbn -> noidung); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> image); ?>"><img src="uploads/monan/<?php echo e($cbn -> image); ?>" style="height: 100px; width: 90px;"></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> created_at); ?>"><?php echo e($cbn -> created_at); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cbn -> updated_at); ?>"><?php echo e($cbn -> updated_at); ?></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo e(route('suaBuocNau', [$cbn -> id_monan, $cbn -> id])); ?>">Sửa</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo e(route('xoaBuocNau', [$cbn -> id_monan, $cbn -> id])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"> Xóa</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table><br><br>
            <?php if($sobuocnau < $monan -> so_buoc): ?>
            <div class="col-lg-7" style="padding-bottom:120px">
                <h3>Thêm bước nấu</h3>
                <form action="<?php echo e(route('themBuocNau', $monan -> id)); ?>" method="POST" name="themBuocNau" onsubmit="return validateForm()" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="noiDungBuoc" class="form-control" style="height: 250px"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Chọn ảnh</label>
                        <input type="file" name="image" multiple="multiple" onchange="checkImage(this)">
                    </div>
                    <div class="col-md-3"><button type="submit" class="btn btn-default">Thêm</button></div>
                    <div class="col-md-3"><a href="<?php echo e(route('danhSachMonAn')); ?>" class="btn btn-default">Cancel</a></div>
                <form>
            </div>
            <?php endif; ?>
                    <!-- /.row -->
        </div>
                <!-- /.container-fluid -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>