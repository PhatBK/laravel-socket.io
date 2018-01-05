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
                        <h1 class="page-header">Xin Chào
                        <?php if($user->level == 1): ?>
                            <b style="color: green;">Admin-CT</b>
                        <?php endif; ?>
                        <?php if($user->level == 0): ?>
                            <b style="color: blue;">Super-Admin</b>
                        <?php endif; ?>
                        :<i style="color: red;"><?php echo e($user->tentaikhoan); ?></i>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <hr class="alert-danger">
                    <div style="text-align: center">
                        <h2>Sửa Tài Khoản</h2>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/sua/<?php echo e($user->id); ?>/<?php echo e($user->tentaikhoan); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Họ Và Tên</label>
                                <input class="form-control" value="<?php echo e($user->hovaten); ?>" name="fullname" placeholder="Họ và Tên" required="" />
                            </div>
                            <div class="form-group">
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
                                <input class="form-control" value="<?php echo e($user->tuoi); ?>" name="tuoi" placeholder="Tuổi" />
                            </div>
                            <div class="form-group">
                                <label>Công Việc Hiện Tại</label>
                                <input class="form-control" value="<?php echo e($user->congviec); ?>" name="congviec" placeholder="Công Việc" />
                            </div>
                            <hr class="alert-warning">
                            <div class="form-group">
                                <label>Địa Chỉ Gmail</label>
                                <input type="email" class="form-control" value="<?php echo e($user->email); ?>" name="email" disabled="" placeholder="Gmail" required="" />
                            </div>
                            <div class="form-group">
                                <label>Tên Tài Khoản</label>
                                <input type="text" class="form-control" value="<?php echo e($user->tentaikhoan); ?>" name="tentaikhoan" placeholder="Tên Đăng Nhập" required="" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePass" id="changePass">
                                <label>Đổi Mật Khẩu</label><br>
                                <label>Mật Khẩu Mới</label>
                                <input type="password" class="form-control password" name="password" placeholder="Mật Khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=":  Mật khẩu phải chứa ít nhất một ký tự thường,một ký tự hoa,một chứ số và mật khẩu phải dài hơn 8 ký tự" required disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Xác Nhận Mật Khẩu Mới</label>
                                <input type="password" class="form-control password" name="passwordAgain" placeholder="Nhập Lại Mật Khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
                                this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" title="Mật khẩu xác nhận không đúng..."  required="" disabled="" />
                            </div>
                            <hr class="alert-warning">
                            <label>Ảnh Đại Diện</label>
                            <br>
                            <div class="form-group">
                                <img src="<?php echo e($user->anhdaidien); ?>" alt="Kết nối Internet không ổn định" style="width: 580px;height: 350px">
                            </div>
                            <hr class="bg-danger">
                            <div class="form-group">
                                <label>Thay Đổi Ảnh Đại Diện<label>
                                <input type="file" name="anh" />
                            </div>

                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <input type="text" class="form-control" value="<?php echo e($user->noibat); ?>" name="noibat" placeholder=""/>
                            </div>
                            <div class="form-group" >
                                <label>Loại Tài Khoản : </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="1"
                                    <?php if($user->level == 1): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">Admin-CT
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoUser" value="0"
                                    <?php if($user->level == 0): ?>
                                        <?php echo e("checked"); ?>

                                    <?php endif; ?>
                                     type="radio">Super-Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Sưa Thông Tin Tài Khoản</button>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <button type="reset"  class="btn btn-warning" onclick="window.location='<?php echo e(URL::previous()); ?>'">Qay Lại</button>
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
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $("#changePass").change(function(){
                if($(this).is(":checked")){
                        $(".password").removeAttr('disabled');
                }else{
                        $(".password").attr('disabled','');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>