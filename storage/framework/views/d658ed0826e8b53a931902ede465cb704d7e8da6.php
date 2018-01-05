<?php $__env->startSection('content'); ?>
<!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($err); ?> <br />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <h1 class="page-header">Tài Khoản Nhà Hàng Liên Kết
                            <small style="color: red;">(Thêm)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                <form action="admin/nhahang/them" method="POST" enctype="multipart/form-data"  accept-charset="utf-8">
                    <div class="row" style="padding-bottom: 130px;">
                            <div class="col-lg-6" style="padding-bottom:40px;">
                                
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                    <div class="form-group">
                                        <label>Tên Nhà Hàng</label>
                                        <input class="form-control" name="fullname" placeholder="Nhập tên nhà hàng liên kết" required="" />
                                    </div>
                                    <hr class="alert-warning">
                                    <div class="form-group">
                                        <label>Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" name="tendangnhap" placeholder="Tên Đăng Nhập" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mật Khẩu</label>
                                        <input id="pass" type="password" class="form-control" name="password" placeholder="Mật Khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=":  Mật khẩu phải chứa ít nhất một ký tự thường,một ký tự hoa,một chứ số và mật khẩu phải dài hơn 8 ký tự" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Xác Nhận Mật Khẩu</label>
                                        <input id="passa" type="password" class="form-control" name="passwordAgain" placeholder="Nhập Lại Mật Khẩu" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
                                        this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" title="Mật khẩu xác nhận không đúng..." required />
                                    </div>
                                    <hr class="alert-warning">
                                    <div class="form-group">
                                        <label>Liên Hệ Với Nhà Hàng</label>
                                        <textarea name="lienhe" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Mở Cửa</label>
                                        <input type="time" class="form-control" name="timeop" placeholder="thời gian mở cửa.." required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Đóng Cửa</label>
                                        <input type="time" class="form-control" name="timeclo" placeholder="thời gian đóng cửa.." required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Vị Trí Nhà Hàng</label>
                                        <textarea name="vitri" class="form-control" rows="2" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh Đại Diện<label>
                                        <input type="file" name="anh" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Loại Tài Khoản : </label>
                                        <label class="radio-inline">
                                            <input name="rdoUser" value="3" checked="" type="radio">Nhà Hàng Liên Kết
                                        </label>
                                    </div>
                            </div>
                            <div class="col-lg-6" style="padding-bottom:40px;">
                                <div class="form-group">
                                    <label>Giới Thiệu Về Nhà Hàng</label>
                                    <textarea id="demo" name="gioithieu" class="form-control ckeditor"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nổi Bật</label>
                                    <input type="text" name="noibat" class="form-control" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Số Lượt Xem</label>
                                    <input type="text" name="luotxem" class="form-control" disabled="">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <a class="btn btn-warning pull-right" href="admin/user/danhsach">Huỷ Bỏ</a>
                            </div>
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

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>