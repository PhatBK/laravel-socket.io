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
                        <h1 class="page-header" style="text-align: center;">Xin Chào :<b style="color: green;"><?php echo e(Auth::guard('nhahang')->user()->ten); ?></b>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                <form action="nhahang/sua/<?php echo e(Auth::guard('nhahang')->user()->id); ?>/<?php echo e(Auth::guard('nhahang')->user()->tenkhongdau); ?>" method="POST" enctype="multipart/form-data"  accept-charset="utf-8">
                    <div class="row" style="padding-bottom: 20px;">
                            <div class="col-lg-6" style="padding-bottom:10px;">
                                
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                    <div class="form-group">
                                        <label>Tên Nhà Hàng</label>
                                        <input class="form-control" name="fullname" required="" value="<?php echo e(Auth::guard('nhahang')->user()->ten); ?>" />
                                    </div>
                                    <hr class="alert-warning">
                                    <div class="form-group">
                                        <label>Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" name="tendangnhap" value="<?php echo e(Auth::guard('nhahang')->user()->username); ?>" required="" />
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
                                    <label>Ảnh Đại Diện</label>
                                    <br>
                                    <div class="form-group">
                                        <img src="<?php echo e(Auth::guard('nhahang')->user()->anh); ?>" alt="Kết nối Internet không ổn định" style="width: 500px;height: 400px;" >
                                    </div>
                                    <div class="form-group">
                                        <label>Thay Ảnh Đại Diện<label>
                                        <input type="file" name="anh" />
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Mở Cửa</label>
                                        <input type="time" class="form-control" name="timeop" value="<?php echo e(Auth::guard('nhahang')->user()->giomocua); ?>" placeholder="thời gian mở cửa.." required="" />
                                    </div>
                                    <div class="form-group">
                                            <label>Giờ Đóng Cửa</label>
                                            <input type="time" class="form-control" name="timeclo" value="<?php echo e(Auth::guard('nhahang')->user()->giodongcua); ?>" placeholder="thời gian đóng cửa.." required="" />
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
                                    <label>Liên Hệ Với Nhà Hàng</label>
                                    <textarea name="lienhe" class="form-control" rows="2" required><?php echo e(Auth::guard('nhahang')->user()->lienhe); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Vị Trí Nhà Hàng</label>
                                    <textarea name="vitri" class="form-control" rows="2" required ><?php echo e(Auth::guard('nhahang')->user()->vitri); ?></textarea>
                                </div>
                                <div class="form-group alert-info">
                                    <label>Giới Thiệu Về Nhà Hàng</label>
                                    <textarea name="gioithieu" class="form-control" rows="20" required ><?php echo e(Auth::guard('nhahang')->user()->gioithieu); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nổi Bật</label>
                                    <input type="text" name="noibat" class="form-control" value="<?php echo e(Auth::guard('nhahang')->user()->noibat); ?>" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Số Lượt Xem</label>
                                    <input type="text" name="luotxem" value="<?php echo e(Auth::guard('nhahang')->user()->luotxem); ?>" class="form-control" disabled="">
                                </div>
                            </div>
                    </div>
                    <div class="row" style="padding-bottom:80px;">
                         <button type="submit" class="btn btn-success" style="margin-left: 40%;">Sửa Thông Tin Nhà Hàng</button>
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

<?php echo $__env->make('nhahang.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>