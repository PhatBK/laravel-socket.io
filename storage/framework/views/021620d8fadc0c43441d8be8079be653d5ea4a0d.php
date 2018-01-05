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
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi Tiết Bài Viết:
                            <small style="color: red;"><?php echo e($baiviet->tieude); ?></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row" style="padding-bottom: 130px;">
                            <div class="col-lg-6" style="padding-bottom:40px;">
                                
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                    <div class="form-group">
                                        <label>ID Bài Viết:</label>
                                        <input class="form-control" name="fullname" value="<?php echo e($baiviet->id); ?>" disabled="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Tiêu Đề:</label>
                                        <textarea  class="form-control" rows="2" disabled=""><?php echo e($baiviet->tieude); ?></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Loại Món Liên Quan:</label>
                                        <input class="form-control" name="fullname" value="<?php echo e($baiviet->loaimon->ten); ?>" disabled="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Người Đăng:</label>
                                         <input class="form-control" name="fullname" value="<?php echo e($baiviet->user->tentaikhoan); ?>" disabled="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Số Lượt Xem</label>
                                        <input type="text"  class="form-control" value="<?php echo e($baiviet->soluotxem); ?>" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label>Số Lượt Thích</label>
                                        <input type="text" class="form-control" value="<?php echo e($baiviet->soluotthich); ?>" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Đăng:</label>
                                        <input class="form-control" name="fullname" value="<?php echo e($baiviet->created_at); ?>" disabled="" />
                                    </div>
                            </div>
                            <div class="col-lg-6" style="padding-bottom:40px;">
                                <div class="form-group">
                                    <label>Nội Dung</label><br>
                                    <textarea id="demo" name="gioithieu" class="form-control ckeditor" disabled=""><?php echo e($baiviet->noidung); ?></textarea>
                                </div>
                            </div>
                            <div class="">
                                <a class="btn btn-danger pull-left" href="admin/baiviet/xoa/<?php echo e($baiviet->id); ?>">Xóa Bài Viết</a>
                            </div>
                    </div>
                </div>
                <!-- /.row -->
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Comment Bài Viết
                            <small>(danh sách)</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?>

                        </div>
                    <?php endif; ?>
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                        <thead>
                            <tr align="center">
                                <th>ID Comment</th>
                                <th>ID Bài Viết</th>
                                <th>Người Comment</th>
                                <th>Nội Dung</th>
                                <th>Số Lượng Report-Comment</th>
                                <th>Ngày đăng</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd gradeX" align="center">
                                <td><?php echo e($comment->id); ?></td>
                                <td><?php echo e($baiviet->id); ?></td>
                                <td><?php echo e($comment->user->tentaikhoan); ?></td>
                                <td><?php echo e($comment->noidung); ?></td>
                                <td><?php echo e(count($comment->reportcommentpost)); ?></td>
                                <td><?php echo e($comment->created_at); ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/baiviet/comment/xoa/<?php echo e($comment->id); ?>/<?php echo e($baiviet->id); ?>">Xóa</a></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                 </div>
        </div>
<!-- /.container-fluid -->
</div>

<script type="text/javascript">
</script>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>