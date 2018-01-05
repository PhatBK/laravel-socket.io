-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 12:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team1301`
--

-- --------------------------------------------------------

--
-- Table structure for table `cacbuocnau`
--

CREATE TABLE `cacbuocnau` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentmonan`
--

CREATE TABLE `commentmonan` (
  `id` int(10) UNSIGNED NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `noi_dung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentpost`
--

CREATE TABLE `commentpost` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_UserPost` int(10) UNSIGNED NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congdung`
--

CREATE TABLE `congdung` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congdung`
--

INSERT INTO `congdung` (`id`, `ten`, `tenkhongdau`, `anh`, `created_at`, `updated_at`) VALUES
(12, 'Chắc xương', 'chac-xuong', 'uploads/congdung/chacxuong.jpg', '2017-11-29 10:21:03', '2017-11-29 11:37:48'),
(13, 'Đẹp da', 'dep-da', 'uploads/congdung/depda.jpg', '2017-11-29 10:21:15', '2017-11-29 11:38:00'),
(14, 'giảm cân', 'giam-can', 'uploads/congdung/giamcan.jpg', '2017-11-29 10:21:24', '2017-11-29 10:21:24'),
(15, 'Tăng cân', 'tang-can', 'uploads/congdung/tangcan.jpg', '2017-11-29 10:21:36', '2017-11-29 10:21:36'),
(16, 'Bổ mắt', 'bo-mat', 'uploads/congdung/bomat.jpg', '2017-11-29 11:28:51', '2017-11-29 11:28:51'),
(17, 'Giải cảm cúm', 'giai-cam-cum', 'uploads/congdung/chacxuong.jpg', '2017-11-29 11:31:05', '2017-11-29 11:31:05'),
(18, 'Giảm béo', 'giam-beo', 'uploads/congdung/giambeo.jpg', '2017-11-29 11:33:01', '2017-11-29 11:33:01'),
(19, 'Tốt cho tim mạch', 'tot-cho-tim-mach', 'uploads/congdung/timmach.jpg', '2017-11-29 11:34:38', '2017-11-29 11:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `loaimon`
--

CREATE TABLE `loaimon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_theloai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaimon`
--

INSERT INTO `loaimon` (`id`, `ten`, `tenkhongdau`, `anh`, `id_theloai`, `created_at`, `updated_at`) VALUES
(6, 'Trà sữa', 'tra-sua', 'uploads/loaimon/trasua.jpg', 27, '2017-11-29 10:11:01', '2017-11-29 10:11:01'),
(7, 'Bánh mỳ', 'banh-my', 'uploads/loaimon/banhmy.jpg', 22, '2017-11-29 10:11:17', '2017-11-29 10:11:17'),
(8, 'Nước ép', 'nuoc-ep', 'uploads/loaimon/nuocep.jpg', 27, '2017-11-29 10:11:35', '2017-11-29 10:11:35'),
(9, 'Phở bò', 'pho-bo', 'uploads/loaimon/phobo.jpg', 26, '2017-11-29 10:11:47', '2017-11-29 10:11:47'),
(10, 'xôi', 'xoi', 'uploads/loaimon/xoi.jpg', 22, '2017-11-29 10:12:08', '2017-11-29 10:12:08'),
(11, 'Cá', 'ca', 'uploads/loaimon/ca.jpg', 23, '2017-11-29 11:26:55', '2017-11-29 11:26:55'),
(12, 'Thịt gà', 'thit-ga', 'uploads/loaimon/thitga.jpg', 23, '2017-11-29 11:27:18', '2017-11-29 11:27:18'),
(13, 'Thịt Lợn', 'thit-lon', 'uploads/loaimon/thitlon.jpg', 23, '2017-11-29 11:27:56', '2017-11-29 11:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_11_091704_create_MucDich_table', 1),
(4, '2017_10_11_091822_create_TheLoai_table', 1),
(5, '2017_10_11_091929_create_CongDung_table', 1),
(6, '2017_10_11_092135_create_VungMien_table', 1),
(7, '2017_10_11_093233_create_NhaHang_table', 1),
(8, '2017_10_11_091854_create_LoaiMon_table', 2),
(9, '2017_10_11_154053_create_MonAn_table', 3),
(10, '2017_10_11_095144_create_CommentMonAn_table', 4),
(11, '2017_10_11_155431_create_Video_table', 5),
(12, '2017_10_11_160152_create_CacBuocNau_table', 5),
(13, '2017_10_11_095238_create_UserPost_table', 6),
(14, '2017_10_11_155714_create_PostImage_table', 7),
(15, '2017_10_11_160119_create_CommentPost_table', 7),
(16, '2017_10_11_161849_create_ThongKe_table', 8),
(17, '2017_10_11_161142_create_NhaHangLienKet_table', 9),
(18, '2017_10_19_223212_create_Report_Comment_Post_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_monan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguyen_lieu_chinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguyen_lieu_phu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giavi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_kho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_buoc` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `so_luot_thich` int(11) NOT NULL,
  `id_mucdich` int(10) UNSIGNED NOT NULL,
  `id_loaimon` int(10) UNSIGNED NOT NULL,
  `id_congdung` int(10) UNSIGNED NOT NULL,
  `id_vungmien` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mucdich`
--

CREATE TABLE `mucdich` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mucdich`
--

INSERT INTO `mucdich` (`id`, `ten`, `tenkhongdau`, `anh`, `created_at`, `updated_at`) VALUES
(6, 'Ăn sáng', 'an-sang', 'uploads/mucdich/ansang.jpg', '2017-11-29 09:42:10', '2017-11-29 09:42:10'),
(7, 'Ăn trưa', 'an-trua', 'uploads/mucdich/antrua.jpg', '2017-11-29 09:42:42', '2017-11-29 09:42:42'),
(8, 'Ăn tối', 'an-toi', 'uploads/mucdich/antoi.jpg', '2017-11-29 09:42:55', '2017-11-29 09:42:55'),
(9, 'Ăn kiêng', 'an-kieng', 'uploads/mucdich/ankieng.jpg', '2017-11-29 09:43:09', '2017-11-29 09:43:09'),
(10, 'Ăn chay', 'an-chay', 'uploads/mucdich/anchay.jpg', '2017-11-29 09:43:22', '2017-11-29 09:43:22'),
(11, 'Ăn vặt', 'an-vat', 'uploads/mucdich/anvat.jpg', '2017-11-29 09:43:36', '2017-11-29 09:43:36'),
(12, 'Dành cho phái mạnh', 'danh-cho-phai-manh', 'uploads/mucdich/chophaimanh.jpg', '2017-11-29 09:44:04', '2017-11-29 09:46:33'),
(13, 'Giảm cân', 'giam-can', 'uploads/mucdich/giamcan.jpg', '2017-11-29 09:44:21', '2017-11-29 09:44:21'),
(14, 'Dành cho phái nữ', 'danh-cho-phai-nu', 'uploads/mucdich/thucancho_phainu.jpg', '2017-11-29 09:44:46', '2017-11-29 09:48:14'),
(15, 'Bữa tiệc', 'bua-tiec', 'uploads/mucdich/tiec.jpg', '2017-11-29 09:45:04', '2017-11-29 09:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `nhahang`
--

CREATE TABLE `nhahang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `lienhe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhahanglienket`
--

CREATE TABLE `nhahanglienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `id_nhahang` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postimage`
--

CREATE TABLE `postimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_comment_post`
--

CREATE TABLE `report_comment_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_CommentPost` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `ten`, `tenkhongdau`, `anh`, `created_at`, `updated_at`) VALUES
(22, 'Ăn nhanh', 'an-nhanh', 'uploads/theloai/annhanh.jpg', '2017-11-29 10:03:23', '2017-11-29 10:03:23'),
(23, 'Ăn mặn', 'an-man', 'uploads/theloai/anman.jpg', '2017-11-29 10:03:39', '2017-11-29 10:03:39'),
(24, 'Khai vị', 'khai-vi', 'uploads/theloai/khaivi.jpg', '2017-11-29 10:03:51', '2017-11-29 10:03:51'),
(25, 'Món nướng', 'mon-nuong', 'uploads/theloai/monnuong.jpg', '2017-11-29 10:04:05', '2017-11-29 10:04:05'),
(26, 'Bún - mì - phở', 'bun-mi-pho', 'uploads/theloai/mi.jpg', '2017-11-29 10:04:26', '2017-11-29 10:14:09'),
(27, 'Đồ uống', 'do-uong', 'uploads/theloai/douong.jpg', '2017-11-29 10:06:33', '2017-11-29 10:13:54'),
(28, 'Ăn tối', 'an-toi', 'uploads/theloai/antoi.jpg', '2017-11-29 11:15:05', '2017-11-29 11:15:05'),
(29, 'Món ngọt', 'mon-ngot', 'uploads/theloai/monngot.jpg', '2017-11-29 11:17:26', '2017-11-29 11:17:26'),
(30, 'Món tráng miệng', 'mon-trang-mieng', 'uploads/theloai/montrangmieng.jpg', '2017-11-29 11:20:43', '2017-11-29 11:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `id` int(10) UNSIGNED NOT NULL,
  `soluong_monan` int(11) NOT NULL,
  `soluong_theloai` int(11) NOT NULL,
  `soluong_truycap` int(11) NOT NULL,
  `soluong_taikhoan` int(11) NOT NULL,
  `soluong_anh` int(11) NOT NULL,
  `soluong_baipost` int(11) NOT NULL,
  `soluong_luotthich` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `soluotthich` int(11) NOT NULL,
  `soluong_comment` int(11) NOT NULL,
  `id_loaimon` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_nhahang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoi` int(11) DEFAULT NULL,
  `congviec` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentaikhoan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `noibat` int(11) DEFAULT NULL,
  `anhdaidien` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_facebook` int(11) DEFAULT NULL,
  `id_google` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hovaten`, `gioitinh`, `tuoi`, `congviec`, `email`, `tentaikhoan`, `password`, `level`, `noibat`, `anhdaidien`, `id_facebook`, `id_google`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Huy Phát', 'Nam', 21, 'Kỹ Sư', 'phatsn11081996@gmail.com', 'phatbk', '827ccb0eea8a706c4c34a16891f84e7b', 1, 10, 'phatdt', 0, 0, NULL, '2017-11-16 17:00:00', NULL),
(2, 'Nguyễn Văn Thắng', 'Không xác định', 21, 'Kỹ sư', 'thangdoto@gmail.com', 'thangdote', '827ccb0eea8a706c4c34a16891f84e7b', 2, 13, 'thang', 0, 0, NULL, '2017-11-16 17:00:00', NULL),
(3, 'aaaaaaaaaaaa', 'Nam', 21, 'ư1w1w1', 'sasq@gmail.com', 'sqdqd', '$2y$10$S5yUg40pbHqM2O7eRtsMk.cTEG/58jgXcPFNk2mLcsm9hmjfbMEJu', 2, 12, '', NULL, NULL, NULL, '2017-11-17 13:44:37', '2017-11-17 13:44:37'),
(4, 'Nguyễn Thị Tú Anh', 'Nữ', 21, 'Kỹ sư hóa dầu', 'tuanh96@gmail.com', 'tuanh', '$2y$10$ERbLCgrAXcPuaqdwJFIN6uF6NJGkDRnBJAiYEJ258HmyDjLUicaCW', 1, 20, '', NULL, NULL, NULL, '2017-11-17 14:52:39', '2017-11-17 14:52:39'),
(5, 'Hòa Phát', 'Nữ', 21, 'Nhân Viên', 'vp@gmail.com', 'vppt', '$2y$10$Nt6X6B66XEYe2P6j5cX6b.cLHAV.WJDNicNnuaF7u57aPJWUj6VhS', 2, 12, '', NULL, NULL, NULL, '2017-11-17 15:12:25', '2017-11-17 15:12:25'),
(6, 'Boy BKHN', 'Nam', 21, 'Sinh Vien', 'boybk@gmail.com', 'boybk', '$2y$10$OgCZ6de8oDKnavNRNJjDyeDD5OpoOmxvE5fLz9ixdcR5kvnVBlora', 2, 12, '', NULL, NULL, NULL, '2017-11-17 15:20:33', '2017-11-17 15:20:33'),
(7, 'Nguyễn Nguyễn Nguyễn', 'Nam', 21, 'Sinh Viên', 'nguyen@gmail.com', 'nguyen', '$2y$10$HvRQcL9k0v5lMsaYcZktFOHD3xU2UBiDdmdXbRtPRozlss7BvXps.', 2, 1, '', NULL, NULL, NULL, '2017-11-18 06:03:28', '2017-11-18 06:03:28'),
(9, 'qqqqqqqqqqqqqq', 'Nam', 12, 'aaaaaaaaaaaa', 'aaaaaaaaa@gmail.com', 'aa', '$2y$10$Oc2/WU5iwRmA1irkNyZdceLiVf1o3LsppNdFcq4jXejv2.KXBwL5K', 2, 12, '', NULL, NULL, NULL, '2017-11-18 06:05:22', '2017-11-18 06:05:22'),
(10, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'dannguyen2511@gmail.com', 'danbka', '$2y$10$GsOgobGSnNyGdJz.yTbDhegql.pOYlgAv9OwlkT7WtU5ocj/vrT4S', 2, NULL, '', NULL, NULL, NULL, '2017-11-20 20:58:04', '2017-11-20 20:58:04'),
(12, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'dannguyen25111@gmail.com', 'danbka', '$2y$10$wqaq0hVfnL9PD7FAHB/UE.dGhe.9wktGzkkqa8M/Uhea.mXD/07Vm', 2, NULL, '', NULL, NULL, NULL, '2017-11-20 21:13:54', '2017-11-20 21:13:54'),
(13, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'phatbka@gmail.com', 'phatgay', '$2y$10$usQ5pNp4xOUbMyHMZUnTdOBhCQklI0eympwwcZnqXRlR3XPHDIAz2', 2, NULL, '8978.jpg', NULL, NULL, NULL, '2017-11-20 21:28:41', '2017-11-20 21:28:41'),
(14, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'dannguyen252211@gmail.com', 'danbka', '$2y$10$viOfjAo.cS.saJdglWdAG.gjgj7I6U/NiO5AyXbW5HTXyozoRyYqK', 2, NULL, '4422.jpg', NULL, NULL, NULL, '2017-11-20 21:32:32', '2017-11-20 21:32:32'),
(15, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'danbka2511@gmail.com', 'dan2511', '$2y$10$6NaF4nfrmsiSO6GsHiqAgeexv9GgMa.pVYiHYbU.cnthPydT80CnW', 2, NULL, '2609.jpg', NULL, NULL, NULL, '2017-11-20 21:41:36', '2017-11-20 21:41:36'),
(16, 'Nguyễn Văn Đàn', 'Nam', 21, 'Sinh viên', 'danbka251121@gmail.com', 'dan2511', '$2y$10$SGadIQlQXF7sZMjtJcRDJ.AUFpNtJjdMCmH32dsW3PevWGfz8td5q', 2, NULL, '12299315_543524502479187_4237008336989122660_n.jpg.jpg', NULL, NULL, NULL, '2017-11-20 21:52:21', '2017-11-20 21:52:21'),
(17, 'Nguyễn Thị Nhương', 'Nam', 21, 'Sinh viên', 'dannguysen2511@gmail.com', 'danbka', '$2y$10$iYTQ5s4VVYQIfK0JvJSnter71tsucF4TazFbcZMNLlXlKCgC58wSe', 2, NULL, '12299315_543524502479187_4237008336989122660_n.jpg.jpg', NULL, NULL, NULL, '2017-11-20 23:59:32', '2017-11-20 23:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `soluotthich` int(11) NOT NULL,
  `id_monan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vungmien`
--

CREATE TABLE `vungmien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhongdau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vungmien`
--

INSERT INTO `vungmien` (`id`, `ten`, `tenkhongdau`, `vitri`, `gioithieu`, `anh`, `created_at`, `updated_at`) VALUES
(9, 'TP Hồ chí minh', 'tp-ho-chi-minh', 'Miền nam', 'TP Hồ chí minh', 'uploads/vungmien/tphcm.jpg', '2017-11-29 10:24:13', '2017-11-29 10:24:13'),
(10, 'Hà Nội', 'ha-noi', 'Miền Bắc', 'TP Hà Nội', 'uploads/vungmien/hanoi.jpg', '2017-11-29 10:24:42', '2017-11-29 10:24:42'),
(11, 'Đà Nẵng', 'da-nang', 'Miền trung', 'TP Đà Nẵng', 'uploads/vungmien/danang.jpg', '2017-11-29 10:25:10', '2017-11-29 10:25:10'),
(12, 'Ninh Bình', 'ninh-binh', 'Ninh bình', 'Ninh bình', 'uploads/vungmien/ninhbinh.jpg', '2017-11-29 11:40:54', '2017-11-29 11:40:54'),
(13, 'Hải Phòng', 'hai-phong', NULL, 'Thành Phố Hải phòng', 'uploads/vungmien/haiphong.jpg', '2017-11-29 11:42:45', '2017-11-29 11:42:45'),
(14, 'Huế', 'hue', NULL, 'Đặc sản bún bò huế', 'uploads/vungmien/hue.jpg', '2017-11-29 11:44:13', '2017-11-29 11:44:13'),
(15, 'Thanh Hoá', 'thanh-hoa', NULL, NULL, 'uploads/vungmien/thanhhoa.jpg', '2017-11-29 11:47:02', '2017-11-29 11:47:02'),
(16, 'Tràng An', 'trang-an', NULL, NULL, 'uploads/vungmien/trangan.jpg', '2017-11-29 11:48:16', '2017-11-29 11:48:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cacbuocnau_id_monan_foreign` (`id_monan`);

--
-- Indexes for table `commentmonan`
--
ALTER TABLE `commentmonan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentmonan_id_monan_foreign` (`id_monan`),
  ADD KEY `commentmonan_id_user_foreign` (`id_user`);

--
-- Indexes for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentpost_id_userpost_foreign` (`id_UserPost`),
  ADD KEY `commentpost_id_user_foreign` (`id_user`);

--
-- Indexes for table `congdung`
--
ALTER TABLE `congdung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaimon_id_theloai_foreign` (`id_theloai`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monan_id_mucdich_foreign` (`id_mucdich`),
  ADD KEY `monan_id_loaimon_foreign` (`id_loaimon`),
  ADD KEY `monan_id_congdung_foreign` (`id_congdung`),
  ADD KEY `monan_id_vungmien_foreign` (`id_vungmien`);

--
-- Indexes for table `mucdich`
--
ALTER TABLE `mucdich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhahang`
--
ALTER TABLE `nhahang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhahanglienket_id_monan_foreign` (`id_monan`),
  ADD KEY `nhahanglienket_id_nhahang_foreign` (`id_nhahang`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `postimage`
--
ALTER TABLE `postimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postimage_id_post_foreign` (`id_post`);

--
-- Indexes for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_comment_post_id_commentpost_foreign` (`id_CommentPost`),
  ADD KEY `report_comment_post_id_user_foreign` (`id_user`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpost_id_loaimon_foreign` (`id_loaimon`),
  ADD KEY `userpost_id_nhahang_foreign_idx` (`id_nhahang`),
  ADD KEY `userpost_id_user_foreign_idx` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id_monan_foreign` (`id_monan`);

--
-- Indexes for table `vungmien`
--
ALTER TABLE `vungmien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentmonan`
--
ALTER TABLE `commentmonan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentpost`
--
ALTER TABLE `commentpost`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `congdung`
--
ALTER TABLE `congdung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `loaimon`
--
ALTER TABLE `loaimon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mucdich`
--
ALTER TABLE `mucdich`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `nhahang`
--
ALTER TABLE `nhahang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postimage`
--
ALTER TABLE `postimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userpost`
--
ALTER TABLE `userpost`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vungmien`
--
ALTER TABLE `vungmien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cacbuocnau`
--
ALTER TABLE `cacbuocnau`
  ADD CONSTRAINT `cacbuocnau_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commentmonan`
--
ALTER TABLE `commentmonan`
  ADD CONSTRAINT `commentmonan_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`),
  ADD CONSTRAINT `commentmonan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commentpost`
--
ALTER TABLE `commentpost`
  ADD CONSTRAINT `commentpost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentpost_id_userpost_foreign` FOREIGN KEY (`id_UserPost`) REFERENCES `userpost` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loaimon`
--
ALTER TABLE `loaimon`
  ADD CONSTRAINT `loaimon_id_theloai_foreign` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_id_congdung_foreign` FOREIGN KEY (`id_congdung`) REFERENCES `congdung` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_loaimon_foreign` FOREIGN KEY (`id_loaimon`) REFERENCES `loaimon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_mucdich_foreign` FOREIGN KEY (`id_mucdich`) REFERENCES `mucdich` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `monan_id_vungmien_foreign` FOREIGN KEY (`id_vungmien`) REFERENCES `vungmien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nhahanglienket`
--
ALTER TABLE `nhahanglienket`
  ADD CONSTRAINT `nhahanglienket_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nhahanglienket_id_nhahang_foreign` FOREIGN KEY (`id_nhahang`) REFERENCES `nhahang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `postimage`
--
ALTER TABLE `postimage`
  ADD CONSTRAINT `postimage_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `userpost` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `report_comment_post`
--
ALTER TABLE `report_comment_post`
  ADD CONSTRAINT `report_comment_post_id_commentpost_foreign` FOREIGN KEY (`id_CommentPost`) REFERENCES `commentpost` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `report_comment_post_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userpost`
--
ALTER TABLE `userpost`
  ADD CONSTRAINT `userpost_id_loaimon_foreign` FOREIGN KEY (`id_loaimon`) REFERENCES `loaimon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userpost_id_nhahang_foreign` FOREIGN KEY (`id_nhahang`) REFERENCES `nhahang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userpost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_id_monan_foreign` FOREIGN KEY (`id_monan`) REFERENCES `monan` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
