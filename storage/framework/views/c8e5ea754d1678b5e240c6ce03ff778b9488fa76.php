<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món Ăn
                    <small>Xem chi tiết</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="" name="suaMonAn" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên món ăn</label>
                        <div class="form-control" name="tenMonAn"><?php echo e($monan -> ten_monan); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu</label>
                        <div class="form-control" style="height: 100px;" name="gioiThieu"><?php echo e($monan -> gioithieu); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu chính</label>
                        <div class="form-control" style="height: 100px;" name="nLChinh"><?php echo e($monan -> nguyen_lieu_chinh); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Nguyên liệu phụ</label>
                        <div class="form-control" style="height: 100px;" name="nLPhu"><?php echo e($monan -> nguyen_lieu_phu); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Gia vị</label>
                        <div class="form-control" style="height: 100px;" name="giaVi"><?php echo e($monan -> giavi); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Thời gian thực hiện</label>
                        <div class="form-control" name="thoiGian"><?php echo e($monan -> thoigian); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Độ khó</label>
                        <div class="form-control" name="doKho"><?php echo e($monan -> do_kho); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Số bước thực hiện</label>
                        <div class="form-control" name="soBuoc"><?php echo e($monan -> so_buoc); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Tên mục đích</label>
                        <div class="form-control" name="mucDich"> 
                            <?php if($mucdich -> id == $monan -> id_mucdich): ?>
                                <?php echo e($mucdich -> ten); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tên loại món</label>
                        <div class="form-control" name="loaiMon">
                            <?php if($loaimon -> id == $monan -> id_loaimon): ?>
                                <?php echo e($loaimon -> ten); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tên công dụng</label>
                        <div class="form-control" name="congDung">
                            <?php if($congdung -> id == $monan -> id_congdung): ?>
                                <?php echo e($congdung -> ten); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tên vùng miền</label>
                        <div class="form-control" name="vungMien">
                            <?php if($vungmien -> id == $monan -> id_vungmien): ?>
                                <?php echo e($vungmien -> ten); ?>

                            <?php endif; ?>             
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ảnh món ăn</label>
                        <?php if($monan -> anh_monan != null): ?>
                        <div class="form-control" name="tenAnh"><?php echo e($monan -> anh_monan); ?></div><br>
                        <img src="uploads/monan/<?php echo e($monan -> anh_monan); ?>" style="height: 200px; width: 200px;">
                        <?php else: ?>
                        <h4 class="form-control">Không có ảnh nào!</h4><br>
                        <?php endif; ?>
                    </div><br>
                    <a href="<?php echo e(route('danhSachMonAn')); ?>" class="btn btn-default">Cancel</a>
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