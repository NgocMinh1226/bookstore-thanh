-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 06:51 AM
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
(2, 'abcdef', 'acbdef@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0125369847', NULL, NULL),
(3, 'Thành', '123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '758968988', NULL, NULL);

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
(21, 'Drama', 'drama', 'Truyện drama tập trung vào những xung đột, bí mật, và mâu thuẫn trong cuộc sống của nhân vật. Nó thường có những tình tiết gay cấn và đầy cảm xúc.', 0),
(22, 'Thám tử lừng danh Conan', 'tham-tu-lung-danh-conan', '...', 0),
(23, 'Shin - cậu bé bút chì', 'shin-cau-be-but-chi', '...', 0),
(24, 'Dragon ball - 7viên ngọc rồng', 'dragon-ball-7vien-ngoc-rong', '...', 0),
(25, 'Doraemon', 'doraemon', '...', 0),
(26, 'Naruto', 'naruto', '...', 0);

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
('K8SPDDD8R0LeHkfPDIaLbKdVCxCFfeHFUQq0279y', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic1BwMmZ1QkhUbmRrVG9vNGxwcVM3aWZUdHdRQjNjc3JNSE1rNlplQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvYm9va3N0b3JlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMToiY3VzdG9tZXJfaWQiO2k6MztzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjY6IlRow6BuaCI7fQ==', 1710560439);

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
(4, 'Overlord', 'Câu chuyện bắt đầu trong những giây phút cuối tại tại Yggdrasil, một game online đình đám sắp phải đóng cửa. Nhân vật chính Momonga của chúng ta quyết định ở lại đến tận những phút cuối cùng với trò chơi yêu thích của mình và chờ server down. Bất ngờ, server không shutdown và Momonga bị mắc kẹt trong nhân vật của chính mình và \"xuyên việt\" tới thế giới khác. “Overlord hùng mạnh” giờ đây lại tiếp tục đi khám phá thế giới mới và đối mặt với những thử thách mới. Không gia đình, bạn bè, địa vị xã hội, người đàn ông bình thường này sẽ cố gắng hết sức để thống trị thế giới mới này.', 13, '69d78f10eeeb43b51afa49.jpg', 'overlord', 0, 'Maruyama Kugane', '70.000'),
(7, 'Sevens', 'Một người anh trai bị cô em gái của mình đánh bại trong cuộc chiến giành quyền thừa kế và bị đuổi khỏi nhà. Mất hết mọi thứ và bị thương nặng đến mức bất tỉnh, trong cơn mê man cậu nghe được những giọng nói mơ hồ, cùng với giọng của ông nội quá cố của bản thân (?), chuyện gì sẽ xảy ra với cậu?', 13, 'da358f148fc623987ad71988.jpg', 'sevens', 0, 'Mishima Yomu, Wai', '56.000đ'),
(8, 'Bậc thầy chế tạo ma thuật', 'Trên thế giới này chỉ có duy nhất một Magi Craft Meister. Sau cái chết cách đây hơn một nghìn năm của vị Magi cuối cùng, Jin Nidou được chuyển đến thế giới khác để hoàn thành tâm nguyện của bà ấy.\r\n\r\nSau khi có được kiến thức của Magi Craft Meister, Jin đã thử dùng cổng dịch chuyển nhưng lại gặp trục trặc, sau đó, nó quăng anh đến một thế giới xa lạ. Cùng với đó, con Automata mà anh vừa mới khôi phục cũng tỉnh giấc rồi bắt đầu hành trình tìm \"Cha\". Vậy là, chuyến hành trình chế tạo của vị tân Magi Craft Meister bắt đầu!', 15, '0552dc78dcaa70f429bb204.jpg', 'bac-thay-che-tao-ma-thuat', 0, 'Akigitsune', '63.000đ'),
(13, 'Kono Subarashii Sekai Ni Shukufuku o!', 'Cuộc sống của chàng trai hikikomori cực kì yêu thích game - Satou Kazuma, đã gặp phải một tai nạn thảm khốc (!?) Tất cả thế là hết... tuy cậu đã nghĩ như vậy nhưng, khi mở mắt ra, một thiếu nữ xinh đẹp đang ở trước mắt cậu và tự xưng là nữ thần. \"Nè, tôi có một chuyện thú vị muốn bàn với cậu đây. Cậu có muốn đến thế giới khác không? Cậu có thể chọn mang theo một vật tùy thích khi đến đó\", \"...Vậy, tôi chọn cô\". Thế là cuộc phiêu lưu lên đường tìm diệt ma vương thật ở thế giới khác bắt đầu! Tuy Kazuma muốn được sống bình yên nhưng nhỏ nữ thần này cứ liên tục gây ra một chuỗi rắc rối, rốt cuộc đã khiến đội quân ma vương để mắt đến!?', 17, 'af29450345d1e98fb0c02139.jpg', 'kono-subarashii-sekai-ni-shukufuku-o', 0, 'Akatsuki Natsume', '63.000'),
(14, 'The Gate Of Abyss', 'Crikteol là một loại bệnh độc xuất hiện và lây lan trên toàn thế giới. Chỉ trong ba tháng, nó đã tiêu diệt một phần ba dân số thế giới.\r\nReo rắc bệnh độc là những quái vật Crikteonian. Chúng xuất hiện sau đó một thời gian ngắn, thông qua những cánh cổng ma quái. Chúng cắn nuốt nhân loại và mọi loài sinh vật, khiến đất đai trở nên cằn cỗi và chết chóc.\r\nMột số người nhiễm Crikteol nhưng không chết mà trở thức tỉnh sức mạnh, bọn họ tụ tập với nhau, lập ra tổ chức Alliance. Hợp tác với những đồng minh mạnh mẽ đến từ cùng một nơi với lũ Crikteonian, bọn họ quyết tâm chống lại, đánh đuổi lũ quái vật về nơi chúng vốn thuộc về, bảo vệ Trái Đất khỏi sự diệt vong.\r\nCâu chuyện đơn giản về những con người nhỏ bé nhưng không tầm thường trước cuộc chiến chống lại kẻ xâm lược ngoài Trái Đất.', 15, '6d4db660b6b21aec43a3220.jpg', 'the-gate-of-abyss', 0, 'Artemiru', '70.000'),
(15, 'Song Hỏa Băng Quyền', 'Một học sinh bình thường chuẩn bị tham gia một cuộc thi, tuy nhiên trong một ngày cậu ta bị sét đánh chết mà chuyển sinh đến một thế giới khác. Bây giờ cậu hay cô ấy sẽ phải làm gì để tồn tại ở cái thế giới biến động này?', 14, 'cce813c51317bf49e6062370.jpg', 'song-hoa-bang-quyen', 0, 'Commander', '56.000đ'),
(16, 'Quản Lý Hàng Đầu', 'Jung Sunwoo là một nhân viên làm công ăn lương bình thường, anh nhận công việc đầu tiên ở W&U - một công ty quản lý người nổi tiếng. Nhờ đó Jung Sunwoo có thể đạt được ước mơ trở thành quản lí viên cho một siêu sao. Nhưng vào ngày đầu đi làm, anh ấy đã mơ một giấc mơ kỳ lạ về tương lai mình, sau đó Sunwoo nhận ra đó không chỉ đơn thuần là một giấc mơ...', 21, 'e577385a388894d6cd992461.jpg', 'quan-ly-hang-dau', 0, 'Long Umbrella, 장우산, U-san', '70.000'),
(17, 'Conan', 'Thám tử lừng danh Conan (名探偵コナン (Danh thám trinh Conan) Meitantei Konan?) là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 105 tập tankōbon tính đến tháng 4 năm 2024. Truyện xoay quanh một cậu thám tử trung học có tên là Kudo Shinichi trong lúc đang điều tra một Tổ chức Áo đen bí ẩn đã bị ép phải uống một loại thuốc độc có thể gây chết người. May mắn là đã sống sót nhưng cơ thể thì lại bị teo nhỏ như một đứa bé 6-7 tuổi. Kể từ đó để tránh bị lộ thân phận thực sự của mình, Shinichi đã lấy tên là Edogawa Conan và chuyển đến sống ở nhà của cô bạn thời thơ ấu Mori Ran cùng với cha của cô ấy là một thám tử tư tên Mori Kogoro với hy vọng một ngày nào đó cậu có thể hạ gục Tổ chức Áo Đen và lấy lại hình dáng ban đầu.', 22, '240669de940c3852611d1350.jpg', 'conan', 0, 'Aoyama Gosho', '63.000đ'),
(18, 'Conan1', '1', 22, '2e04a5e75835f46bad241578.jpg', 'conan1', 0, 'Aoyama Gosho', '63.000'),
(19, 'Conan2', '2', 22, '6d7be898154ab914e05b1439.jpg', 'conan2', 0, 'Aoyama Gosho', '63.000'),
(20, 'Shin cậu bé bút chì1', '1', 23, 'shin138.jpg', 'shin-cau-be-but-chi1', 0, 'Usui Yoshito', '63.000đ'),
(21, 'Shin cậu bé bút chì8', '8', 23, 'shin84.jpg', 'shin-cau-be-but-chi8', 0, 'Usui Yoshito', '63.000'),
(22, 'Shin cậu bé bút chì50', '50', 23, 'shin5037.jpg', 'shin-cau-be-but-chi50', 0, 'Usui Yoshito', '63.000'),
(23, 'Naruto', '1', 26, '592ad7bb28698437dd781268.jpg', 'naruto', 0, 'Kishimoto Masashi', '63.000'),
(24, 'Naruto2', '2', 26, '71cbfe5a0188add6f4991132.jpg', 'naruto2', 0, 'Kishimoto Masashi', '63.000'),
(25, 'Naruto3', '1', 26, '84850614f9c655980cd71038.jpg', 'naruto3', 0, 'Kishimoto Masashi', '63.000'),
(26, 'Naruto4', '4', 26, '0897880677d4db8a82c5961.jpg', 'naruto4', 0, 'Kishimoto Masashi', '63.000'),
(27, 'Dragon Ball', '1', 24, 'a35a78e9883b24657d2a550.jpg', 'dragon-ball', 0, 'Toriyama Akira', '63.000'),
(28, 'Dragon Ball18', '18', 24, 'a6a5741684c4289a71d5715.jpg', 'dragon-ball18', 0, 'Toriyama Akira', '63.000'),
(29, 'Dragon Ball8', '8', 24, 'drgb891.jpg', 'dragon-ball8', 0, 'Toriyama Akira', '63.000'),
(30, 'Dragon Ball12', '12', 24, 'drgb127.jpg', 'dragon-ball12', 0, 'Toriyama Akira', '63.000'),
(31, 'Doraemon1', '1', 25, 'drm134.jpg', 'doraemon1', 0, 'Fujiko F. Fujio', '63.000'),
(32, 'Doraemon2', '2', 25, 'drm237.jpg', 'doraemon2', 0, 'Fujiko F. Fujio', '63.000'),
(33, 'Doraemon8', '8', 25, 'drm85.jpg', 'doraemon8', 0, 'Fujiko F. Fujio', '63.000'),
(34, 'Doraemon9', '9', 25, 'drm940.jpg', 'doraemon9', 0, 'Fujiko F. Fujio', '63.000'),
(35, 'Doraemon10', '10', 25, 'drm1039.jpg', 'doraemon10', 0, 'Fujiko F. Fujio', '63.000'),
(36, 'Doraemon11', '11', 25, 'drm1148.jpg', 'doraemon11', 1, 'Fujiko F. Fujio', '63.000'),
(37, 'Doraemon15', '15', 25, 'drm1529.jpg', 'doraemon15', 1, 'Fujiko F. Fujio', '63.000');

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
(2, 'TRẦN MINH QUÂN', 'zxcvvbnm20@gmail.com', NULL, '$2y$12$QYBnn4tsormTtaftMenGsev4kdKWYIGT7B4LU.htM4KEYQ3pK6IbO', 'DQupaRSSFBAxQ5YjCT3OWf2C3cSLzrvwA9R10Cy7Nehs9ns82Jj5NJt5GolK', '2024-02-27 11:53:18', '2024-02-27 11:53:18');

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
