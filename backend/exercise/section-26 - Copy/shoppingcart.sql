-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 03:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_title`) VALUES
(1, 'Điện thoại'),
(2, 'Macbook');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `page_title`, `page_content`, `created_at`) VALUES
(1, 'GIỚI THIỆU', '<p>[GIỚI THIỆU], ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo sapiente repellat voluptate cupiditate optio, repudiandae maxime est aliquid suscipit culpa eos quia numquam ipsa, amet labore ratione quam. Aliquid!</p><br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis excepturi dolore quam voluptatum aspernatur veniam impedit et asperiores laborum! Dolorum rerum, perferendis natus corrupti nesciunt nulla qui quidem error facilis. Voluptate.</p>', '2020-02-12'),
(2, 'LIÊN HỆ', '<p>[LIÊN HỆ], ipsum dolor sit amet consectetur adipisicing elit. Placeat explicabo sapiente repellat voluptate cupiditate optio, repudiandae maxime est aliquid suscipit culpa eos quia numquam ipsa, amet labore ratione quam. Aliquid!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis excepturi dolore quam voluptatum aspernatur veniam impedit et asperiores laborum! Dolorum rerum, perferendis natus corrupti nesciunt nulla qui quidem error facilis. Voluptate.</p>', '2020-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_code` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_thumb` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_title`, `product_price`, `product_code`, `product_desc`, `product_thumb`, `product_content`, `cat_id`) VALUES
(1, 'iPhone 11 Pro Max 64GB', 34000000, 'U#1', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', 'https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-green-400x400.jpg', '<p>Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-6.jpg\'></p>', 1),
(2, 'Xiaomi Redmi Note 8 (4GB/64GB)', 4000000, 'U#2', 'Xiaomi Redmi Note 8 4GB/64GB là chiếc smartphone tầm trung mới nhất của Xiaomi, chiếc máy này gây ấn tượng với cấu hình phần cứng mạnh mẽ, hệ thống 4 camera sau chất lượng và đi kèm giá bán cực kỳ hấp dẫn.', 'https://cdn.tgdd.vn/Products/Images/42/209535/xiaomi-redmi-note-8-white-400x400.jpg', '<p>Xiaomi Redmi Note 8 4GB/64GB là chiếc smartphone tầm trung mới nhất của Xiaomi, chiếc máy này gây ấn tượng với cấu hình phần cứng mạnh mẽ, hệ thống 4 camera sau chất lượng và đi kèm giá bán cực kỳ hấp dẫn.Xiaomi Redmi Note 8 4GB/64GB là chiếc smartphone tầm trung mới nhất của Xiaomi, chiếc máy này gây ấn tượng với cấu hình phần cứng mạnh mẽ, hệ thống 4 camera sau chất lượng và đi kèm giá bán cực kỳ hấp dẫn.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/42/209535/xiaomi-redmi-note-8-64gb-8.jpg\'></p>', 1),
(3, 'Samsung Galaxy A51', 5000000, 'U#3', 'Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hương tới giới trẻ hiện đại, thời thượng. Máy', 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-white-400x400.jpg', '<p>Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hương tới giới trẻ hiện đại, thời thượng. Máy sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện trên smartphone Galaxy, màn hình tràn viền vô cực cùng mặt lưng họa tiết kim cương nổi bật.\r\n        Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hương tới giới trẻ hiện đại, thời thượng. Máy sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện trên smartphone Galaxy, màn hình tràn viền vô cực cùng mặt lưng họa tiết kim cương nổi bật.\r\n        </p><p><img src=\'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-nguye%CC%82nkho%CC%82%CC%81i.jpg\'></p>', 1),
(4, 'MacBook Air 2017 128GB (MQD32SA/A)', 20000000, 'U#4', 'MacBook Air 2017 i5 128GB là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định, thời lượng pin cực lâu 12 giờ, phù hợp cho hầu hết các nhu cầu làm việc và giải trí. ', 'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-600x600.jpg', '<p>MacBook Air 2017 i5 128GB là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định, thời lượng pin cực lâu 12 giờ, phù hợp cho hầu hết các nhu cầu làm việc và giải trí. MacBook Air 2017 i5 128GB là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng.  </p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-4.jpg\'></p>', 2),
(5, 'Macbook Air 2019 1.6GHz 128GB (MVFM2SA/A)', 30000000, 'U#5', 'MacBook Air 2019 128 GB i5 đã ra mắt giữ nguyên các ưu điểm vốn có của dòng MacBook Air: Mỏng nhẹ, cấu hình khỏe và pin trâu. Mẫu MacBook mới con được trang bị màn hình True Tone và cải tiến bàn phím Butterfly thế hệ mới, ổn định và gõ êm hơn.', 'https://cdn.tgdd.vn/Products/Images/44/207682/apple-macbook-air-2019-i5-16ghz-8gb-128gb-mvfm2sa-13-32-600x600.jpg', '<p>MacBook Air 2019 128 GB i5 đã ra mắt giữ nguyên các ưu điểm vốn có của dòng MacBook Air: Mỏng nhẹ, cấu hình khỏe và pin trâu. Mẫu MacBook mới con được trang bị màn hình True Tone và cải tiến bàn phím Butterfly thế hệ mới, ổn định và gõ êm hơn.MacBook Air 2019 128 GB i5 đã ra mắt giữ nguyên các ưu điểm vốn có của dòng MacBook Air: Mỏng nhẹ, cấu hình khỏe và pin trâu.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/207682/apple-macbook-air-2019-i5-16ghz-8gb-128gb-mvfm2sa-14.jpg\'></p>', 2),
(6, 'Macbook Pro Touch 2019 128GB (MUHN2SA/A)', 40000000, 'U#6', 'Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro. Khoác lên mình vẻ ngoài đẳng cấp, cấu hình mạnh mẽ cùng nhiều tính năng hiện đại, chiếc laptop Apple MacBook Pro là một trong những chiếc laptop cao cấp - sang trọng đáng sở hữu nhất hiện nay.', 'https://cdn.tgdd.vn/Products/Images/44/207683/apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m-2-2-600x600.jpg', '<p>Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro. Khoác lên mình vẻ ngoài đẳng cấp, cấu hình mạnh mẽ cùng nhiều tính năng hiện đại, chiếc laptop Apple MacBook Pro là một trong những chiếc laptop cao cấp - sang trọng đáng sở hữu nhất hiện nay.\r\n        Laptop Apple MacBook Pro Touch 2019 i5 (MUHN2SA/A) là thế hệ laptop mới của dòng MacBook Pro. Khoác lên mình vẻ ngoài đẳng cấp, cấu hình mạnh mẽ cùng nhiều tính năng hiện đại, chiếc laptop Apple MacBook Pro là một trong những chiếc laptop cao cấp - sang trọng đáng sở hữu nhất hiện nay.\r\n        </p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/207683/apple-macbook-pro-touch-2019-i5-14ghz-8gb-128gb-m3.jpg\'></p>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
