<?php $__env->startSection('content'); ?>
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
                        <h1 class="page-header">
                            Danh Sách Bài Viết Của Người Dùng
                            <small>(danh sach)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                    <th style="overflow:hidden;" title="ID">ID</th>
                                    <th style="overflow:hidden;" title="Tiêu Đề">Tiêu Đề</th>
                                    <th style="overflow:hidden;" title="Nội Dungg">Nội Dung</th>
                                    <th style="overflow:hidden;" title="Số Lượt Xem">Số Lượt Xem</th>
                                    <th style="overflow:hidden;" title="Số Lượt Thích">Số Lượt Thích</th>
                                    <th style="overflow:hidden;" title="Số Lượng ảnh">Số Lượng Ảnh</th>
                                    <th style="overflow:hidden;" title="Số Lượng Comment">Số Lượng Comment</th>
                                    <th style="overflow:hidden;" title="Loại Món">Loại Món</th>
                                    <th style="overflow:hidden;" title="Người Đăng">Người Đăng</th>
                                    <th style="overflow:hidden;" title="Ngày Đăng">Ngày Đăng</th>
                                    <th style="overflow:hidden;" title="Xem Chi Tiết">Xem Chi Tiết</th>
                                    <th style="overflow:hidden;" title="Xóa Bài Viết">Xóa Bài Viết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $baiviets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baiviet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo e($baiviet->id); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($baiviet->tieude); ?>"><?php echo e($baiviet->tieude); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->noidung); ?>"><?php echo e($baiviet->noidung); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->soluotxem); ?>"><?php echo e($baiviet->soluotxem); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->soluotthich); ?>"><?php echo e($baiviet->soluotthich); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title=""><?php echo e(count($baiviet->postimage )); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title=""><?php echo e(count($baiviet->commentpost)); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->loaimon->ten); ?>"><?php echo e($baiviet->loaimon->ten); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->user->tentaikhoan); ?>"><?php echo e($baiviet->user->tentaikhoan); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($baiviet->created_at); ?>"><?php echo e($baiviet->created_at); ?></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/baiviet/xemchitiet/<?php echo e($baiviet->id); ?>">Xem Chi Tiết</a></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/baiviet/xoa/<?php echo e($baiviet->id); ?>">Xóa Bài Viết</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>