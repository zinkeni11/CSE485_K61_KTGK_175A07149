-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 12:08 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `175a071489_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_duan`
--

CREATE TABLE `db_duan` (
  `maduan` int(10) NOT NULL,
  `tenduan` varchar(200) NOT NULL,
  `namthuchien` year(4) NOT NULL,
  `linhvuc` varchar(200) NOT NULL,
  `nhiemvu` varchar(400) NOT NULL,
  `coquanthuchien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_duan`
--

INSERT INTO `db_duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Đánh giá mức độ biến đổi khí hậu và xây dựng kịch bản biến đổi khí hậu tỉnh Bắc Ninh', 2019, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu'),
(2, 'Đánh giá mức độ biến đổi khí hậu và xây dựng kịch bản biến đổi khí hậu tỉnh Hà Nam', 2017, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu'),
(3, 'Xây dựng và triển khai kế hoạch ứng phó biến đổi khí hậu ở tỉnh Hậu Giang', 2020, 'Biến đổi khí hậu', 'Xây dựng và triển khai kế hoạch ứng phó biến đổi khí hậu ở tỉnh Hậu Giang', 'Trung tâm Ứng phó biến đổi khí hậu'),
(4, 'đánh giá mức độ ô nhiễm không khí ở thành phố Hà Nội', 2021, 'Ô nhiễm môi trường', 'Đánh giá mức độ ô nhiễm không khí và cảnh báo về môi trường', 'Trung tâm Ứng phó biến đổi khí hậu'),
(5, 'Cập nhật kế hoạch thay đổi chất lượng môi trường ở khu vực miền Trung', 2017, 'Ô nhiễm môi trường', 'Đo đạc, tính toán và lên kế hoạch thay đổi chất lượng môi trường ở khu vực miền Trung', 'Trung tâm Ứng phó biến đổi khí hậu'),
(6, 'Đề án ngăn chặn ngập mặn khu vực đồng bằng sông cửu long', 2016, 'Phòng chống thiên tai', 'Đưa ra phương án ngăn chặn ngập mặn khu vực đồng bằng sông cửu long', 'Trung tâm Ứng phó biến đổi khí hậu'),
(7, 'Phương án phòng chống bão lụt ở tỉnh Hà Tĩnh năm 2022', 2021, 'Phòng chống thiên tai', 'Lên Phương án phòng chống bão lụt ở tỉnh Hà Tĩnh năm 2022', 'Trung tâm Ứng phó biến đổi khí hậu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_duan`
--
ALTER TABLE `db_duan`
  ADD PRIMARY KEY (`maduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
