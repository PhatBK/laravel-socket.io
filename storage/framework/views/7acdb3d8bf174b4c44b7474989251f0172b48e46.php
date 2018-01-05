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
                        <h1 class="page-header">Tài Khoản Người Dùng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                            <thead>
                                <tr align="center">
                                    <th style="overflow:hidden;" title="ID">ID</th>
                                    <th style="overflow:hidden;" title="Họ và Tên">Họ-Tên</th>
                                    <th style="overflow:hidden;" title="Giới Tính">Giới Tính</th>
                                    <th style="overflow:hidden;" title="Tuổi">Tuổi</th>
                                    <th style="overflow:hidden;" title="Nghề Nghiệp">Nghề Nghiệp</th>
                                    <th style="overflow:hidden;" title="Tài Khoản Gmail">Gmail</th>
                                    <th style="overflow:hidden;" title="Tên Tài Khoản">Tên Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Password">Pass-Word</th>
                                    <th style="overflow:hidden;" title="Loại Tài Khoản">Loại Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Nổi Bật">Nổi Bật</th>
                                    <th style="overflow:hidden;" title="Ảnh Đại Diện">Ảnh Đại Diện</th>
                                    <th style="overflow:hidden;" title="Ngày Lập Tài Khoản">Ngày Lập</th>
                                    <th style="overflow:hidden;" title="Xem Chi Tiết">Xem Chi Tiết</th>
                                    <th style="overflow:hidden;" title="Sửa Tài Khoản">Sửa Tài Khoản</th>
                                    <th style="overflow:hidden;" title="Xóa Tài Khoản">Xóa Tài Khoản</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX"align="center">
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo e($us->id); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" data-toggle="tooltip" data-placement="top" title="<?php echo e($us->hovaten); ?>"><?php echo e($us->hovaten); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->gioitinh); ?>"><?php echo e($us->gioitinh); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->tuoi); ?>"><?php echo e($us->tuoi); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->congviec); ?>"><?php echo e($us->congviec); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->email); ?>"><?php echo e($us->email); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->tentaikhoan); ?>" id="<?php echo e($us->id); ?>"><?php echo e($us->tentaikhoan); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->password); ?>"><?php echo e($us->password); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo e($us->level); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo e($us->noibat); ?></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><img src="<?php echo e($us->anhdaidien); ?>" alt="" width="50px" height="50px"></td>
                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;" title="<?php echo e($us->created_at); ?>"><?php echo e($us->created_at); ?></td>

                                    <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><i class="fa fa-pencil fa-fw"></i><a href="admin/user/xemchitiet/<?php echo e($us->id); ?>/<?php echo e($us->tentaikhoan); ?>">Chi Tiết</a></td>

                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/<?php echo e($us->id); ?>/<?php echo e($us->tentaikhoan); ?>"  onclick="
                                        <?php if($us != Auth::user()): ?>
                                            return confirm('bạn không thể sửa tài khoản khác !!');
                                        <?php endif; ?>
                                        "
                                        >Sửa</a></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/<?php echo e($us->id); ?>" onclick="
                                    <?php if($us->level == 1 || $us->level == 0): ?>
                                        return confirm('bạn không thể xóa : Super-admin hoặc Admin khác !!');
                                    <?php endif; ?>
                                    <?php if($us->level == 2): ?>
                                        return confirm('bạn có muốn xoá tài khoản thành viên thật không?');
                                    <?php endif; ?>
                                    ">Xóa</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                </div>
                <!-- /.row -->
            </div>
<!-- /.container-fluid -->
<script type="text/javascript"charset="utf-8"async defer>
</script>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>