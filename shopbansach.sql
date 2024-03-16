-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 04:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(10) UNSIGNED NOT NULL,
  `truyen_id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `slug_chapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `truyen_id`, `tieude`, `tomtat`, `noidung`, `kichhoat`, `slug_chapter`) VALUES
(1, 2, 'Chapter 1 Mở đầugg', 'Mở đầu', 'Trạng Quỳnh là một nhân vật giai thoại trong các truyện kể văn học dân gian Việt Nam, nổi tiếng với tính cách trào lộng, hài hước với bối cảnh thời vua Lê chúa Trịnh. Nhân vật Trạng Quỳnh được cho là mang nhiều dáng dấp của một nhân vật lịch sử có thật, Nguyễn Quỳnh (1677 - 1748), một danh sĩ thời Lê Trung Hưng, người xã Hoằng Lộc, huyện Hoằng Hóa, Thanh Hóa, từng đỗ bậc Cống sĩ nên còn được gọi là Cống Quỳnh.\r\n\r\nMột nhân vật giai thoại khác trong các truyện kể văn học dân gian Việt Nam là Xiển Bột, cũng nổi tiếng với tính cách trào lộng, hài hước trong bối cảnh thời Nguyễn, được gán là hậu duệ (chắt) của nhân vật Trạng Quỳnh.', 0, 'chapter-1-mo-daugg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `customer_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `update_at`) VALUES
(1, 'hahaha', 'abcd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4881564045', NULL, NULL),
(2, 'abcdef', 'acbdef@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0125369847', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `slug_danhmuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `slug_danhmuc`, `mota`, `kichhoat`) VALUES
(1, 'Truyện kinh dị', 'truyen-kinh-di', 'Truyện kinh dị với những tình tiết đáng sợ và rùng rợn!', 0),
(2, 'Truyện trinh thám', 'truyen-trinh-tham', 'Cốt truyện hấp dẫn cũng những vụ án bí ẩn!', 0),
(4, 'Truyện ma', 'truyen-ma', 'Những câu chuyện kì bí cùng những thế lực siêu nhiên!', 0),
(11, 'Truyện cười', 'truyen-cuoi', 'Những câu chuyện thú vị đem đến những tràng cười sảng khoái!', 0),
(13, 'Hành động', 'hanh-dong', 'Truyện hành động là thể loại truyện bạo lực, mang những tình tiết đánh đấm hoặc sử dụng nhiều loại vũ khí. Thể loại này luôn đem đến cho độc giả những giây phút hồi hộp, gay cấn và kịch tính.', 0),
(14, 'Viễn tưởng', 'vien-tuong', 'Truyện viễn tưởng là một thể loại văn học hoặc điện ảnh sử dụng những mô tả mang tính tiên đoán và hư cấu dựa trên khoa học. Thường khám phá hoặc dự đoán những hệ quả, hậu quả tiềm tàng của những đổi mới trong khoa học, xã hội và công nghệ.', 0),
(15, 'Phiêu lưu', 'phieu-luu', 'Truyện phiêu lưu thường xoay quanh những cuộc hành trình, khám phá, và thách thức của nhân vật chính. Các tình tiết mạo hiểm, bí ẩn, và viễn tưởng thường xuất hiện trong thể loại này.', 0),
(16, 'Tình cảm', 'tinh-cam', 'Truyện tình cảm tập trung vào mối quan hệ giữa các nhân vật. Tình yêu, xung đột, và cảm xúc là những yếu tố quan trọng.', 0),
(17, 'Hài', 'hai', 'Truyện hài mang đến tiếng cười và vui vẻ cho độc giả. Những tình huống hài hước, nhân vật dí dỏm, và sự gặp gỡ ngẫu nhiên thường xuất hiện.', 0),
(18, 'Lịch sử', 'lich-su', 'Truyện lịch sử tái hiện các sự kiện, thời kỳ, và nhân vật quan trọng trong quá khứ. Nó giúp độc giả hiểu rõ hơn về lịch sử và văn hóa.', 0),
(19, 'Chiến tranh', 'chien-tranh', 'Truyện chiến tranh tập trung vào những cuộc xung đột, chiến đấu, và hậu quả của chiến tranh. Nó thường khám phá tâm lý và đạo đức của con người trong thời kỳ khó khăn.', 0),
(20, 'Đời thường', 'doi-thuong', 'Truyện đời thường thường mô tả cuộc sống hàng ngày của nhân vật, với những tình huống bình thường và thú vị.', 0),
(21, 'Drama', 'drama', 'Truyện drama tập trung vào những xung đột, bí mật, và mâu thuẫn trong cuộc sống của nhân vật. Nó thường có những tình tiết gay cấn và đầy cảm xúc.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('823dRl9ynMN7VLbfm6akQPBvIz1OhSMAJATNcuop', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidnRDZVRYdWJKd1djYlJwM0tnbU9JbGlSTDZremJZUHAzMmpuMDJqNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvYm9va3N0b3JlIjt9czoxMToiY3VzdG9tZXJfaWQiO2k6MjtzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjY6ImFiY2RlZiI7fQ==', 1710301802);

-- --------------------------------------------------------

--
-- Table structure for table `thuocdanh`
--

CREATE TABLE `thuocdanh` (
  `id` int(11) NOT NULL,
  `truyen_id` int(11) NOT NULL,
  `danhmuc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thuocdanh`
--

INSERT INTO `thuocdanh` (`id`, `truyen_id`, `danhmuc_id`) VALUES
(3, 9, 11),
(2, 9, 13),
(1, 9, 21),
(6, 10, 19),
(5, 10, 20),
(4, 10, 21);

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentruyen` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `slug_truyen` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `tacgia` varchar(200) NOT NULL,
  `giatien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id`, `tentruyen`, `tomtat`, `danhmuc_id`, `hinhanh`, `slug_truyen`, `kichhoat`, `tacgia`, `giatien`) VALUES
(2, 'Trạng Quỳnh2', 'lkl', 11, 'tuf163.jpg', 'trang-quynh2', 0, 'gggsa', '0'),
(3, 'IT1', 'ndsifsdfff', 17, 'tuf197.jpg', 'it1', 0, 'dảhhr', '0'),
(4, 'Overlord', 'Câu chuyện bắt đầu trong những giây phút cuối tại tại Yggdrasil, một game online đình đám sắp phải đóng cửa. Nhân vật chính Momonga của chúng ta quyết định ở lại đến tận những phút cuối cùng với trò chơi yêu thích của mình và chờ server down. Bất ngờ, server không shutdown và Momonga bị mắc kẹt trong nhân vật của chính mình và \"xuyên việt\" tới thế giới khác. “Overlord hùng mạnh” giờ đây lại tiếp tục đi khám phá thế giới mới và đối mặt với những thử thách mới. Không gia đình, bạn bè, địa vị xã hội, người đàn ông bình thường này sẽ cố gắng hết sức để thống trị thế giới mới này.', 21, '69d78f10eeeb43b51afa49.jpg', 'overlord', 0, 'ddd', '0'),
(5, 'hh', 'tha', 21, '5557.png', 'hh', 0, 'hh', '0'),
(6, 'đ1', 'gdgy', 16, 'tuf28.jpg', 'd1', 0, 'đgd', '0'),
(7, 'Sevens', 'Một người anh trai bị cô em gái của mình đánh bại trong cuộc chiến giành quyền thừa kế và bị đuổi khỏi nhà. Mất hết mọi thứ và bị thương nặng đến mức bất tỉnh, trong cơn mê man cậu nghe được những giọng nói mơ hồ, cùng với giọng của ông nội quá cố của bản thân (?), chuyện gì sẽ xảy ra với cậu?', 13, 'yae-ei32.jpg', 'sevens', 0, 'Mishima Yomu, Wai', '56.000đ'),
(8, 'Bậc thầy chế tạo ma thuật', 'Trên thế giới này chỉ có duy nhất một Magi Craft Meister. Sau cái chết cách đây hơn một nghìn năm của vị Magi cuối cùng, Jin Nidou được chuyển đến thế giới khác để hoàn thành tâm nguyện của bà ấy.\r\n\r\nSau khi có được kiến thức của Magi Craft Meister, Jin đã thử dùng cổng dịch chuyển nhưng lại gặp trục trặc, sau đó, nó quăng anh đến một thế giới xa lạ. Cùng với đó, con Automata mà anh vừa mới khôi phục cũng tỉnh giấc rồi bắt đầu hành trình tìm \"Cha\". Vậy là, chuyến hành trình chế tạo của vị tân Magi Craft Meister bắt đầu!', 15, 'yae miko82.jpg', 'bac-thay-che-tao-ma-thuat', 0, 'Akigitsune', '63.000đ'),
(9, 'dgdg', 'jdzdrjh', 1, 'simp99.jpg', 'dgdg', 0, 'dghsdh', '63.000đ'),
(10, 'sdfs', 'hte', 1, 'simp39.jpg', 'sdfs', 0, 'dfsdf', '63.000đ'),
(11, '15', 'ác', 16, 'simp68.jpg', '15', 0, 'x', '63.000đ'),
(12, 'fgaet', 'ầ', 15, 'yae-ei1.jpg', 'fgaet', 0, 'ádf', '63.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LÊ NGUYÊN THÀNH', 'cyberdz555@gmail.com', NULL, '$2y$12$i99IvRXeI5.kvRTjBZRSeOdbUQyG7Iqg/ZD3UmM90jt3a9.8mDQU2', NULL, '2024-01-25 21:48:59', '2024-01-25 21:48:59'),
(2, 'TRẦN MINH QUÂN', 'zxcvvbnm20@gmail.com', NULL, '$2y$12$QYBnn4tsormTtaftMenGsev4kdKWYIGT7B4LU.htM4KEYQ3pK6IbO', 'PBXBQP9ORbXma5LfAKE7d4W9mxDop0g3M0kOIDFolcJkE73G3UjPo7S0gdHv', '2024-02-27 11:53:18', '2024-02-27 11:53:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `truyen_id` (`truyen_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `thuocdanh`
--
ALTER TABLE `thuocdanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `truyen_id` (`truyen_id`,`danhmuc_id`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuocdanh`
--
ALTER TABLE `thuocdanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
