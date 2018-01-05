<?php $__env->startSection('content'); ?>
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
                        <h1 class="page-header">Công Dụng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php if(isset($congdung)): ?>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th style="overflow:hidden;" title="Tên">Tên</th>
                                <th style="overflow:hidden;" title="Tên Không dấu">Tên không dấu</th>
                                 <th style="overflow:hidden;" title="ảnh">ảnh</th>
                                 <th style="overflow:hidden;" title="Ngày tạo">ngày tạo</th>
                                <th style="overflow:hidden;" title="Xoá Công Dụng">Xoá</th>
                                <th style="overflow:hidden;" title="Sửa Công Dụng">Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $congdung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even gradeC" align="center">
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cd->ten); ?>"><?php echo e($cd->ten); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cd->tenkhongdau); ?>"><?php echo e($cd->tenkhongdau); ?></td>
                                <td><img src="<?php echo e($cd->anh); ?>" alt="" width="50px" height="50px"></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($cd->created_at); ?>"><?php echo e($cd->created_at); ?></td>
                                <td class="text-info" ><i class="fa fa-trash-o fa-fw"></i><a href="<?php echo e(route('xoaCongDung',$cd->id)); ?>" onclick="return confirm('bạn có muốn xoá không?');">Xoá</a></td>
                                <td class="text-info"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo e(route('suaCongDung',$cd->id)); ?>">Sửa</a></td>
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