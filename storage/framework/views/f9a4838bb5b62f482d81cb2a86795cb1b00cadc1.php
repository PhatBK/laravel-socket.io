<?php $__env->startSection('content'); ?>
<!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="error">
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($err); ?> <br />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài Khoản Nhà Hàng Liên Kết:<b style="color: green;"><?php echo e($nhahang->ten); ?></b>
                            <small style="color: red;">(sửa)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                <form action="admin/nhahang/sua/<?php echo e($nhahang->id); ?>/<?php echo e($nhahang->tenkhongdau); ?>" method="POST" enctype="multipart/form-data"  accept-charset="utf-8">

                    <div class="row" style="padding-bottom: 80px;">
                            <div class="col-lg-6" style="padding-bottom:40px;">
                                
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                    <div class="form-group">
                                        <label>Tên Nhà Hàng</label>
                                        <input class="form-control" name="fullname" required="" value="<?php echo e($nhahang->ten); ?>" />
                                    </div>
                                    <hr class="alert-warning">
                                    <div class="form-group">
                                        <label>Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" name="tendangnhap" value="<?php echo e($nhahang->username); ?>" required="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="changePass" id="changePass">
                                        <label>Đổi Mật Khẩu</label><br>
                                        <label>Mật Khẩu</label>
                                        <input id="pass" type="password" class="form-control password" name="password" placeholder="mật khẩu mới" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=":  Mật khẩu phải chứa ít nhất một ký tự thường,một ký tự hoa,một chứ số và mật khẩu phải dài hơn 8 ký tự" required="" disabled="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Xác Nhận Mật Khẩu</label>
                                        <input id="passa" type="password" class="form-control password" name="passwordAgain" placeholder="xác nhận mật khẩu mới" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
                                        this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" title="Mật khẩu xác nhận không đúng..." required="" disabled="" />
                                    </div>
                                    <hr class="alert-warning">
                                    <div class="form-group">
                                        <label>Liên Hệ Với Nhà Hàng</label>
                                        <textarea name="lienhe" class="form-control" rows="2" required><?php echo e($nhahang->lienhe); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Vị Trí Nhà Hàng</label>
                                        <textarea name="vitri" class="form-control" rows="2" required ><?php echo e($nhahang->vitri); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh Đại Diện<label>
                                        <img src="<?php echo e($nhahang->anh); ?>" alt="Kết nối Internet không ổn định" style="width: 400px;height: 300px;" >
                                    </div>
                                    <div class="form-group">
                                        <label>Thay Ảnh Đại Diện<label>
                                        <input type="file" name="anh" />
                                    </div>
                                    <div class="form-group">
                                        <label>Loại Tài Khoản : </label>
                                        <label class="radio-inline">
                                            <input name="rdoUser" value="3" checked="" type="radio">Nhà Hàng Liên Kết
                                        </label>
                                    </div>
                            </div>
                            <div class="col-lg-6" style="padding-bottom:20px;">
                                <div class="form-group">
                                    <label>Giới Thiệu Về Nhà Hàng</label>
                                    <textarea id="demo" name="gioithieu" class="form-control ckeditor"><?php echo e($nhahang->gioithieu); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nổi Bật</label>
                                    <input type="text" name="noibat" class="form-control" value="<?php echo e($nhahang->noibat); ?>" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Số Lượt Xem</label>
                                    <input type="text" name="luotxem" value="<?php echo e($nhahang->luotxem); ?>" class="form-control" disabled="">
                                </div>
                                <div class="form-group">
                                        <label>Giờ Mở Cửa</label>
                                        <input type="time" class="form-control" name="timeop" value="<?php echo e($nhahang->giomocua); ?>" placeholder="thời gian mở cửa.." required="" />
                                </div>
                                <div class="form-group">
                                        <label>Giờ Đóng Cửa</label>
                                        <input type="time" class="form-control" name="timeclo" value="<?php echo e($nhahang->giodongcua); ?>" placeholder="thời gian đóng cửa.." required="" />
                                </div>
                            </div>
                    </div>
                    <div class="">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <a class="btn btn-warning pull-top" href="admin/user/danhsach">Thoát</a>
                    </div>
                </form>
            </div>
                <!-- /.row -->
        </div>
<!-- /.container-fluid -->
</div>

<script type="text/javascript">

</script>
<!-- /#page-wrapper -->
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