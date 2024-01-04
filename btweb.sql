-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2024 lúc 03:55 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'hung', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chuột', '2024-01-01 22:45:02', '2024-01-01 22:45:02'),
(2, 'Bàn phím', '2024-01-01 23:43:51', '2024-01-01 23:43:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_23_224034_create_admins_table', 1),
(6, '2023_12_24_024001_create_categories_table', 2),
(8, '2023_12_27_041614_create_products_table', 3),
(9, '2024_01_03_143241_create_orders_table', 4),
(10, '2024_01_03_143554_create_order_details_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price_product` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `img`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Chuột Galax Slider-04 RGB Gaming', 1, 99000.00, 'Slider-04.png', '<ul><li>DPI: 6400&nbsp;</li><li>Độ dài dây: 1.5m&nbsp;</li><li>Kết nối: USB&nbsp;</li><li>Polling rate: 125Hz&nbsp;</li><li>Màu led: 4 màu&nbsp;</li><li>Kích thước: 128x65x39mm&nbsp;</li><li>Cân nặng: 119.6g&nbsp;</li><li>Có dây</li></ul>', '2024-01-01 22:49:32', '2024-01-01 22:49:32'),
(2, 'Chuột Logitech G102 Gen II Lightsync', 1, 337000.00, 'G102.png', '<ul><li>Độ phân giải: 200 – 8.000&nbsp;</li><li>DPI với cảm biến được nâng cấp</li><li>&nbsp;Tần số phản hồi: 1000Hz (1ms)&nbsp;</li><li>Tích hợp công nghệ LIGHTSYNC Rainbow RGB 16.8 triệu màu (hiệu ứng theo âm thanh)&nbsp;</li><li>Tinh chỉnh thông qua phần mềm G Hub</li><li>&nbsp;Kích thước: 116.6mm x 62.15mm x 38.2mm&nbsp;</li><li>Trọng lượng: 85g</li></ul>', '2024-01-01 22:53:13', '2024-01-01 22:53:13'),
(3, 'Chuột Gaming Fuhlen G90', 1, 289000.00, 'G90.png', '<ul><li>Cảm biến: quang học Avago 3050&nbsp;</li><li>DPI: 3500&nbsp;</li><li>Kết nối: USB, dây dẫn bọc lưới chống cắt</li><li>&nbsp;Thiết kế công thái học, dành cho người sử dụng thuận tay phải.&nbsp;</li><li>LED cho nút cuộn và logo.&nbsp;</li><li>7 nút bấm Switch Magnet Driven (quang học) siêu bền, gần như không thể bị hỏng.</li></ul>', '2024-01-01 22:58:34', '2024-01-01 22:58:34'),
(4, 'Chuột Logitech G502 Hero Gaming', 1, 880000.00, 'G502.png', '<ul><li>Model: G502 Hero Gaming&nbsp;</li><li>Cảm biến: Logitech HERO 16K&nbsp;</li><li>DPI: 100-16000&nbsp;</li><li>Kết nối: USB 2.0 / 3.0, dây dẫn bọc lưới chống cắt&nbsp;</li><li>Led tích hợp: RGB 16.8 triệu màu&nbsp;</li><li>Chip xử lý: ARM 32-bit</li><li>&nbsp;Số nút: 11 nút lập trình được&nbsp;</li><li>Trọng lượng: 121g&nbsp;</li><li>Độ dài dây: 2,10 m&nbsp;</li></ul>', '2024-01-01 23:01:17', '2024-01-01 23:01:17'),
(5, 'Chuột Không Dây FD i720 Gaming Wireless', 1, 189000.00, 'i720.png', '<ul><li>Model : i720&nbsp;</li><li>Kết nối : Công Nghệ Không Dây&nbsp;</li><li>Wireless 2.4Ghz&nbsp;</li><li>Phạm vi kết nối : 20m&nbsp;</li><li>Tần số quét : R250 250HZ&nbsp;</li><li>Chất liệu : Nhựa ABS cao cấp&nbsp;</li></ul>', '2024-01-01 23:09:31', '2024-01-01 23:09:31'),
(6, 'Chuột không dây Silent Rapoo B2S', 1, 200000.00, 'b2s.png', '<ul><li>&nbsp;Tương thích:Windows</li><li>&nbsp;Độ phân giải tối đa: 1200 DPI</li><li>&nbsp;Cách kết nối: Đầu thu USB Receiver</li><li>&nbsp;Độ dài dây/Khoảng cách kết nối: 10 m&nbsp;</li><li>&nbsp;Đèn LED: Không có</li><li>&nbsp;Loại pin: 1 viên pin AA&nbsp;</li><li>&nbsp;Khối lượng: 60 g&nbsp;</li></ul>', '2024-01-01 23:20:03', '2024-01-01 23:20:03'),
(7, 'Chuột Sạc Bluetooth Silent Zadez M382Z', 1, 450000.00, 'M382Z.png', '<ul><li>Tương thích:Android,iOS,macOS (MacBook, iMac)&nbsp;</li><li>Độ phân giải tối đa: 2000 DPI&nbsp;</li><li>Cách kết nối: Bluetooth</li><li>Đầu thu USB Receiver&nbsp;</li><li>Độ dài dây/Khoảng cách kết nối:10 m&nbsp;</li><li>Đèn LED: RGB&nbsp;</li><li>Loại pin: Pin sạc</li><li>Thời gian: Dùng 1 - 3 tháng - Sạc 2 giờ</li><li>Cổng sạc: USB Type-C&nbsp;</li><li>Khối lượng: 72g</li></ul>', '2024-01-01 23:22:30', '2024-01-01 23:22:30'),
(8, 'Chuột Bluetooth Silent DareU LM115B', 1, 350000.00, 'LM115.JPG', '<ul><li>Độ phân giải tối đa: 1600 DPI</li><li>Cách kết nối:Bluetooth</li><li>Đầu thu USB Receiver&nbsp;</li><li>Độ dài dây/Khoảng cách kết nối: 10 m&nbsp;</li><li>Đèn LED Không có&nbsp;</li><li>Loại pin: 1 viên pin AA&nbsp;</li><li>Khối lượng: 90 g&nbsp;<br>&nbsp;</li></ul>', '2024-01-01 23:33:07', '2024-01-01 23:33:07'),
(9, 'Chuột Bluetooth Gaming Corsair Harpoon RGB', 1, 450000.00, 'RGB.jpg', '<ul><li>Độ phân giải tối đa:10000 DPI&nbsp;</li><li>Cách kết nối:BluetoothĐầu thu USB Receiver</li><li>&nbsp;Độ dài dây/Khoảng cách kết nối:</li><li>Dây dài 191.5 cm, khoảng cách kết nối 10 m (với đầu thu USB)&nbsp;</li><li>Đèn LED:RGB&nbsp;</li><li>Cổng sạc:Micro USB</li><li>&nbsp;Khối lượng:99 g&nbsp;<br>&nbsp;</li></ul>', '2024-01-01 23:42:55', '2024-01-01 23:42:55'),
(10, 'Bàn Phím Cơ Cooler Master SK622 Silver White', 2, 890000.00, 'sk622.png', NULL, '2024-01-01 23:46:15', '2024-01-01 23:46:15'),
(11, 'Bàn Phím Giả Cơ Fuhlen L500S Gaming', 2, 169000.00, 'L500.png', '<ul><li>Kiểu kết nối: Có dây</li><li>Chuẩn giao tiếp: USB</li><li>Phím chức năng: Standard&nbsp;</li><li>Màu: Đen-đỏ</li></ul>', '2024-01-01 23:58:53', '2024-01-01 23:58:53'),
(12, 'Bàn Phím Cơ Cooler Master SK650 RGB', 2, 829000.00, 'sk650.png', '<p>Bàn phím với Layout Fullsize độc đáo và nhỏ gọn cùng độ mỏng hoàn hảo để có thể mang đi bất cứ đâu Bàn phím sử dụng phím bấm Cherry MX Low Profile Red Switches. Sử dụng dây cáp rời USB Type-C tạo nên sự thuận tiện khi sử dụng. Bề mặt phím được chế tác bằng chất liệu nhôm Alumium với dãy đèn led 16.7 triệu màu chạy dọc thân phím Các phím bấm có thể được điều chỉnh thông qua phím bấm trực tiếp trên bàn phím hoặc thông qua phần mềm từ Cooler Master</p>', '2024-01-02 00:44:46', '2024-01-02 00:44:46'),
(13, 'Bàn phím cơ Gaming DAREU EK87', 2, 439000.00, 'ek87.png', '<ul><li>Phiên bản đổi tên từ DareU DK87&nbsp;</li><li>Đèn led tích hợp bên trong phím&nbsp;</li><li>Bàn phím 87 phím Kích thước nhỏ gọn&nbsp;</li><li>Chiều dài dây 1.8 mét&nbsp;</li><li>Cổng giao tiếp USB</li></ul>', '2024-01-02 01:03:59', '2024-01-02 01:03:59'),
(14, 'Bàn phím Cơ E-Dra EK387 TKL Dream Pink Gaming V2 Blue Switch', 2, 689000.00, 'EK387.png', '<ul><li>Cổng kết nối: USB&nbsp;</li><li>Số lượng phím: 87 phím&nbsp;</li><li>Cáp bàn phím dài: 1.6M bọc dù&nbsp;</li><li>Keycaps: ABS Double-shot Anti-ghosting: full antishosting keys&nbsp;</li><li>Cân nặng: 900g&nbsp;</li><li>Màu sắc: màu hồng Switch: Huano (2021)</li></ul>', '2024-01-02 01:25:12', '2024-01-02 01:25:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Em Hưng Cơm Gạo', 'lqhung882004@gmail.com', NULL, '$2y$12$GPhug.2.vHZu7oMtwY3Ot.HfywWytQ4T6vruXkP7r6gyEhPZCPeHy', NULL, '2024-01-01 10:59:39', '2024-01-01 10:59:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
