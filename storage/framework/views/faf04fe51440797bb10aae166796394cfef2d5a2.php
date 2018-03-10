<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<script type="text/javascript">
    function checkout(){
            return confirm('bạn có muốn xoá không?');
        }

</script>
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
                        <h1 class="page-header">Loại Món
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php if(isset($loaimon)): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th style="overflow:hidden;" title="Tên">Tên</th>
                                <th style="overflow:hidden;" title="Tên không dấu">Tên không dấu</th>
                                <th style="overflow:hidden;" title="Thuộc thể loại">Thuộc thể loại</th>
                                 <th style="overflow:hidden;" title="ảnh">Ảnh</th>
                                 <th style="overflow:hidden;" title="Ngày tạo">ngày tạo</th>
                                <th style="overflow:hidden;" title="Xoá loại món">Xoá</th>
                                <th style="overflow:hidden;" title="Sửa loại món">Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $loaimon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even gradeC" align="center">
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($lm->ten); ?>"><?php echo e($lm->ten); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($lm->tenkhongdau); ?>"><?php echo e($lm->tenkhongdau); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($tl->id == $lm->id_theloai): ?>
                                            <?php echo e($tl->ten); ?>

                                            <?php break; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><img src="<?php echo e($lm->anh); ?>" alt="" width="50px" height="50px"></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($lm->created_at); ?>"><?php echo e($lm->created_at); ?></td>
                                <!-- <td>Ẩn</td> -->
                                <td class="center text-info"><i class="fa fa-trash-o fa-fw"></i><a href="<?php echo e(route('xoaLoaiMon',$lm->id)); ?>" onclick="return confirm('bạn có muốn xoá không?');">Xoá</a></td>
                                <td class="center text-info"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo e(route('suaLoaiMon',$lm->id)); ?>">Sửa</a></td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                        <h3 class="text-muted">không có loại công dụng nào</h3>
                    <?php endif; ?>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>