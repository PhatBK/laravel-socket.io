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
                        <h1 class="page-header">Nhà Hàng Liên Kết
                            <small>(danh sách)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th style="overflow:hidden;" title="ID">ID</th>
                                <th style="overflow:hidden;" title="Tên Nhà Hàng">Tên Nhà Hàng</th>
                                <th style="overflow:hidden;" title="Tên Không Dấu">Tên Không Dấu</th>
                                <th style="overflow:hidden;" title="Tên Đăng Nhập">Tên Đăng Nhập</th>
                                <th style="overflow:hidden;" title="Mật Khẩu">Mật Khẩu</th>
                                <th style="overflow:hidden;" title="Số Lượt Xem">Số Lượt Xem</th>
                                <th style="overflow:hidden;" title="Nổi Bật">Nổi Bật</th>
                                <th style="overflow:hidden;" title="Liên Hệ">Liên Hệ</th>

                                <th style="overflow:hidden;" title="Giờ Mở Của">Mở Cửa</th>
                                <th style="overflow:hidden;" title="Giờ Đóng Cửa">Đóng Cửa</th>

                                <th style="overflow:hidden;" title="Vị Chí">Bản Đồ</th>
                                <th style="overflow:hidden;" title="Giới Thiệu">Giới Thiệu</th>
                                <th style="overflow:hidden;" title="Ảnh Đại Diện">Ảnh Đại Diện</th>
                                <th style="overflow:hidden;" title="Ngày Lập Tài Khoản">Ngày Lập</th>
                                <th style="overflow:hidden;" title="Sửa Tài Khoản">Sửa Tài Khoản</th>
                                <th style="overflow:hidden;" title="Xóa Tài Khoản">Xóa Tài Khoản</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $nhahangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nhahang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->id); ?>"><?php echo e($nhahang->id); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->ten); ?>"><?php echo e($nhahang->ten); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->tenkhongdau); ?>"><?php echo e($nhahang->tenkhongdau); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->username); ?>"><?php echo e($nhahang->username); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->password); ?>"><?php echo e($nhahang->password); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->luotxem); ?>"><?php echo e($nhahang->luotxem); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->noibat); ?>"><?php echo e($nhahang->noibat); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->lienhe); ?>"><?php echo e($nhahang->lienhe); ?></td>

                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->giomocua); ?>"><time><?php echo e($nhahang->giomocua); ?></time></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->giodongcua); ?>"><time><?php echo e($nhahang->giodongcua); ?></time></td>

                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->vitri); ?>"><?php echo e($nhahang->vitri); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->gioithieu); ?>"><?php echo e($nhahang->gioithieu); ?></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->anh); ?>"><img src="<?php echo e($nhahang->anh); ?>" alt="" width="50px" height="50px"></td>
                                <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($nhahang->created_at); ?>"><?php echo e($nhahang->created_at); ?></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="admin/nhahang/sua/<?php echo e($nhahang->id); ?>/<?php echo e($nhahang->ten); ?>">Sửa</a></td>
                                <td class="center"><i class="fa fa-trash-o fa-fw"></i> <a href="admin/nhahang/xoa/<?php echo e($nhahang->id); ?>" onclick="return confirm('bạn có muốn xoá không?');">Xóa</a></td>
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