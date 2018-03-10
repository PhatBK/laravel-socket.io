 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="alert-info">
                            <a href="trangchu"><i class="fa fa-dashboard fa-fw"></i> --- Trở Về Trang Chủ</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('danhSachMonAn')); ?>"><i class="fa fa-bar-chart-o fa-fw"></i> --- Món Ăn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachMonAn')); ?>">Danh Sách Các Món Ăn</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themMonAn')); ?>">Thêm Món Ăn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo e(route('danhSachTheLoai')); ?>"><i class="fa fa-bar-chart-o fa-fw"></i> --- Thể Loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachTheLoai')); ?>">Danh Sach Các Thể Loại</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themTheLoai')); ?>">Thêm Thể Loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo e(route('danhSachLoaiMon')); ?>"><i class="fa fa-cube fa-fw"></i> --- Loại Món<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachLoaiMon')); ?>">Danh Sách Các Loại Món</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themLoaiMon')); ?>">Thêm Loại Món</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo e(route('danhSachCongDung')); ?>"><i class="fa fa-bars"></i> --- Công Dụng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachCongDung')); ?>">Danh Sách Các Công Dụng</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themCongDung')); ?>">Thêm Công Dụng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo e(route('danhSachMucDich')); ?>"><i class="fa fa-adjust"></i> --- Mục Đích<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachMucDich')); ?>">Danh Sách Các Mục Đích</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themMucDich')); ?>">Thêm Mục Đích</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo e(route('danhSachVungMien')); ?>"><i class="glyphicon glyphicon-globe"></i>  --- Vùng Miền<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(route('danhSachVungMien')); ?>">Danh Sách Các Vùng Miền</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('themVungMien')); ?>">Thêm Vùng Miền</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/nhahang/danhsach"><i class="fa fa-home"></i> ---  Nhà Hàng Liên Kết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/nhahang/danhsach">Danh Sach Nhà Hàng Liên Kết</a>
                                </li>
                                <li>
                                    <a href="admin/nhahang/them">Thêm Nhà Nhà Hàng Liên Kết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/info"><i class="fa fa-users fa-fw"></i> --- Tài Khoản Người Dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/user/danhsach">Danh Sách Tài Khoản Người Dùng</a>
                                </li>
                                <li>
                                    <a href="admin/user/them">Thêm Tài Khoản Người Dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-comment-o"></i> --- Bài Viết Của Thành Viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/baiviet/danhsach">Danh Sách Bài Viết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="admin/thongke/lichsu"><i class="fa fa-bar-chart"></i> --- Thống Kê <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin/thongke/thuchientk">Thống Kê</a></li>
                                <li><a href="admin/thongke/lichsu">Lịch Sử Thống Kê</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
</div>