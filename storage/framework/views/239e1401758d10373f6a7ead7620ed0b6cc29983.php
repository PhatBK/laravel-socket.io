<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php if(session('thongbao')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('thongbaoloi')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">..
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?> <br />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align: center;">Chi Tiết Tài Khoản:<b style="color: green;"><?php echo e($user->tentaikhoan); ?></b>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/sua/<?php echo e($user->id); ?>/<?php echo e($user->tentaikhoan); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Họ Và Tên</label>
                                <input class="form-control" value="<?php echo e($user->hovaten); ?>" name="fullname" placeholder="Họ và Tên" required="" disabled="" />
                            </div>
                            <div class="form-group" disabled="">
                                <label>Giới Tính : </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="1"
                                    <?php if($user->gioitinh == "Nam"): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                    type="radio">
                                    Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="2"
                                    <?php if($user->gioitinh == "Nữ"): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                        type="radio">
                                    Nữ
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoGT" value="3"
                                    <?php if($user->gioitinh == "Không Xác Định"): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">
                                     Không Xác Định
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Tuổi</label>
                                <input class="form-control" value="<?php echo e($user->tuoi); ?>" name="tuoi" placeholder="Tuổi" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Công Việc Hiện Tại</label>
                                <input class="form-control" value="<?php echo e($user->congviec); ?>" name="congviec" placeholder="Công Việc" disabled="" />
                            </div>
                            <hr class="alert-warning">
                            <div class="form-group">
                                <label>Địa Chỉ Gmail</label>
                                <input type="email" class="form-control" value="<?php echo e($user->email); ?>" name="email" disabled="" placeholder="Gmail" required="" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Tên Tài Khoản</label>
                                <input type="text" class="form-control" value="<?php echo e($user->tentaikhoan); ?>" name="tentaikhoan" placeholder="Tên Đăng Nhập" required="" disabled="" />
                            </div>
                            <hr class="alert-warning">
                            <label>Ảnh Đại Diện</label>
                            <br>
                            <div class="form-group">
                                <img src="<?php echo e($user->anhdaidien); ?>" alt="Kết nối Internet không ổn định" style="width: 580px;height: 350px">
                            </div>
                            <hr class="bg-danger">
                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <input type="text" class="form-control" value="<?php echo e($user->noibat); ?>" name="noibat" placeholder="" disabled="" />
                            </div>
                            <div class="form-group" >
                                <label>Loại Tài Khoản : </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="0"
                                    <?php if($user->level == 0): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">Super-Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="1"
                                    <?php if($user->level == 1): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">Admin-CT
                                </label>
                                 <label class="radio-inline">
                                    <input name="rdoUser" value="0"
                                    <?php if($user->level == 2): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">Customer
                                </label>
                            </div>
                            <a  class="btn btn-warning pull-right" href="admin/user/xoa/<?php echo e($user->id); ?>"
                             onclick="
                                <?php if($user->level==2): ?>
                                    return confirm('bạn chắc chắn muấn xóa..');
                                <?php endif; ?>
                                <?php if($user->level==1 && Auth::user()->level==0): ?>
                                    return confirm('bạn chắc chắn muấn xóa chứ..');
                                <?php endif; ?>
                                <?php if($user->level==0 && Auth::user()->level==0): ?>
                                    return confirm('bạn không thể xóa tài khoản này..');
                                <?php endif; ?>
                             ">Xóa Tài Khoản</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button  type="reset"  class="btn btn-warning pull-left" onclick="window.location='<?php echo e(URL::previous()); ?>'">Qay Lại</button>
                        <form>
                    </div>
                    <div class="col-md-5 alert-warning">
                        <label>Hướng Dẫn:</label>
                        <pre>
        Thêm Tài Khoản Người Dùng Mới


    B1:
    B2:
    B3:
    B4:
    B5:
    B6:
    B7:
    B8:
    B9:
    B10:
    B11:



                        </pre>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>