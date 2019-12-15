-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 03:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `Location` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Phone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Website` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `WorkTime` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`Location`, `Address`, `Phone`, `Email`, `Website`, `WorkTime`) VALUES
('Cafo Cần Thơ', '183 Võ Văn Kiệt, An Thới, Bình Thủy, Cần Thơ', '(0292) 373', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6'),
('Cafo Đà Nẵng', 'Tầng 9, Tòa nhà VietNam Post Đà Nẵng, 155 Nguyễn Văn Linh, P. Vĩnh Trung, Q. Thanh Khê, Đà Nẵng', '(0236) 3 6', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6'),
('Cafo Hà Nội', 'Tầng 3, Tòa nhà 101 Láng Hạ, 101 Láng Hạ, Đống Đa, Hà Nội', '(024) 3201', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6'),
('Cafo Hải Phòng', 'Tầng 6, 152 Hoàng Văn Thụ, Hồng Bàng, Hải Phòng', '(0225) 6 5', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6'),
('Cafo Huế', 'Tầng 7, tòa nhà HCC, 28 Lý Thường Kiệt, TP. Huế', '(0234) 6.5', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6'),
('Cafo TP. HCM', 'Lầu 8, Jabes Building, 244 Cống Quỳnh, Q.1, TP.HCM', '1900 6510', 'info@cafo.vn', 'www.cafo.vn', '9:00 AM - 6:00 PM từ Thứ 2 - Thứ 6');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `Rating` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED DEFAULT NULL,
  `Avatar` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Content` varchar(20000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`BlogID`, `Title`, `Time`, `LikeCount`, `Rating`, `UserID`, `Avatar`, `Content`) VALUES
(1, '(HCM) Top 10 Coffee shop cực chất khiến các tín đồ shopping điên đảo', '14:38 02/06/2018', 36, 5, 1, 'images/photo-post-1.jpg', '<p class=\"content-text-intro\">Bạn đã bao giờ tới những quán cafe kết hợp với shop thời trang chưa? Vừa được thưởng\r\n          thức những đồ uống ngon lành, trong không gian thật tuyệt lại thỏa thích mua sắm những món đồ cực chất, tại sao\r\n          lại không nhỉ?</p>\r\n\r\n        <h2 class=\"mt-3\" style=\"color: red\">1. L\'Usine cafe</h2>\r\n        <p class=\"content-text-para\">Nếu ai đã từng ghé L\'Usine cafe có lẻ sẽ khá hài lòng với không gian nơi này. Không\r\n          gian ở đây khá yên tĩnh, đây là nơi phù hợp để các bạn trẻ có thể làm việc và học tập. Sau khi thưởng thức đồ ăn\r\n          và thức uống tại đây, bạn có thể tham quan và mua sắm ở khu quần áo, có rất nhiều món hàng phụ kiện và thời trang\r\n          đặc sắc, tuy giá hơi cao nhưng bạn sẽ khó tìm được những món đồ tương tự ở nơi khác.</p>\r\n        <img class=\"img-fluid rounded\" src=\"images/photo-post-1.jpg\" alt=\"\" width=\"700\">\r\n        <p class=\"description-img mt-1\">Bạn sẽ tìm được những món đồ cực chất tại tầng trệt của quán</p>\r\n        <p>Xem chi tiết tại: <a href=\"#\">http://www.</a></p>\r\n\r\n        <h2 class=\"mt-3\" style=\"color: red\">2. Khanh Casa</h2>\r\n        <p class=\"content-text-para\">Khanh Casa có nhiều chi nhánh, và tất cả đều nằm ngay trung tâm quận 1. Quán có không\r\n          gian rộng rãi, thoáng mát, trang trí khá đẹp, hài hòa theo phong cách cổ điển. Có rất nhiều cây xanh xung quanh\r\n          cả trong và ngoài quán, tạo cảm giác dễ chịu, gần gũi với thiên nhiên. Khanh Casa thiết kế một khu riêng dành để\r\n          trưng bày và bán những bộ bình ly, chén đĩa được làm bằng gốm, sứ, thủy tinh đặc sắc.</p>\r\n        <img class=\"img-fluid rounded\" src=\"images/photo-post-2.jpg\" alt=\"\" width=\"700\">\r\n        <p class=\"description-img mt-1\">Bạn sẽ tìm được những bộ bình ly tuyệt đẹp tại đây</p>\r\n        <p>Xem chi tiết tại: <a href=\"#\">http://www.</a></p>\r\n\r\n        <h2 class=\"mt-3\" style=\"color: red\">3. Simple Workshop & Drink</h2>\r\n        <p class=\"content-text-para\">Quán là sự kết hợp giữa shop quần áo và tiệm cafe. Ấn tượng nhất có thể\r\n          nói là không gian đẹp, quần áo, giày dép của khá đẹp, đây chính là nơi hẹn hò lí tưởng cho những\r\n          tín đồ thời trang.</p>\r\n        <img class=\"img-fluid rounded\" src=\"images/photo-post-3.jpg\" alt=\"\" width=\"700\">\r\n        <p class=\"content-text-para\">Bật mí cho các bạn rằng quán đang áp dụng thẻ E card của Foody nha, chỉ cần\r\n          trình E card bạn sẽ được giảm từ 10% - 20% đó.</p>\r\n        <p>Xem chi tiết tại: <a href=\"#\">http://www.</a></p>\r\n\r\n        <p class=\"content-text-para\">*** Ngoài các quán trên, tại Sài Gòn có rất nhiều chuỗi coffee bán những món đồ đặc\r\n          trưng của shop như: Hollys, Phúc Long, Bene, Starbucks. Bạn có thể đến đây tìm mua những chiếc cốc xinh xắn hay\r\n          những túi cafe mang thương hiệu riêng của những nhãn hàng.</p>'),
(2, 'Top 3 địa điểm trên cao ngắm pháo hoa cực hot đêm giao thừa', '10:17 10/12/2019', 20, 5, 1, 'images/photo-post2-1.jpg', '<p class=\"content-text-intro\">Nếu bạn không muốn phải chen lấn giữa dòng người đông đúc, bạn có thể \r\n    lựa chọn ngồi ở các quán cà phê trên cao, vừa thu vào tầm mắt toàn bộ cảnh đêm huyền ảo của Hà Nội,\r\n    vừa dễ dàng ngắm nhìn những chùm pháo hoa sáng rực trên nền trời vào thời khắc giao thừa. \r\n    Foody gợi ý cho bạn 10 địa điểm trên cao để bạn có thể ngắm pháo hoa cùng người thương nha!</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-1.jpg\" alt=\"\" width=\"700\">\r\n\r\n    <h2 class=\"mt-3\" style=\"color: red\">1. Top of Ha Noi</h2>\r\n\r\n    <p class=\"content-text-para\">Nằm trên tầng cao nhất của toà nhà Lotte Hanoi Centre 65 tầng là Top of Hanoi - nơi đảm bảo tầm nhìn không giới hạn của bạn ra toàn thành phố. Hãy thưởng thức các món ăn hiện đại, tận hưởng bầu không khí trẻ trung, và thả mình vào không gian thoáng đãng đến choáng ngợp của Hà Nội về đêm tại Top of Hanoi.</p>\r\n    \r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-2.jpg\" alt=\"\" width=\"700\">\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-3.jpg\" alt=\"\" width=\"700\">\r\n\r\n    <p class=\"content-text-para\">Từ độ cao 270m, bạn có thể ngắm ôm trọn vẹn nhiều khu, kiến trúc như: Hồ Tây, Lăng Chủ tịch Hồ Chí Minh, tòa nhà Keangnam.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-4.jpg\" alt=\"\" width=\"700\">\r\n    <p class=\"content-text-para\">Với toàn bộ sàn, tường, trần đều là kính đem đến cho du khách trải nghiệm như đang lơ lửng từ trên cao.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-5.jpg\" alt=\"\" width=\"700\">\r\n\r\n    <h2 class=\"mt-3\" style=\"color: red\">2. 6 Degree Cafe</h2>\r\n    <p class=\"content-text-para\">6 Degrees Cafe nằm ở tầng 2 và 8 địa chỉ số 189 Nghi Tàm, Tây Hồ, Hà Nội. Với thiết kế trẻ trung và lãng mạn, bạn có thể choáng ngợp với không gian quán ban đầu, nhưng sẽ dần dần cảm thấy ấm cúng và thân thiện bởi ánh đèn vàng ấm áp tràn ngập.</p>\r\n    \r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-6.jpg\" alt=\"\" width=\"700\">\r\n    <p class=\"content-text-para\">6 Degrees có thể hạ gục bạn ngay từ lần hẹn hò đầu tiên bởi tay nghề của những đầu bếp. Đã thế, tầm nhìn trên cao ngay tại phố Nghi Tàm – Hồ Tây lộng gió thôi cũng đã đủ đẹp khi đèn lên.</p>\r\n    <p class=\"content-text-para\">Chủ quán đã hướng tới phong cách phương Tây từ thiết kế quán cafe, không gian từ bên ngoài và bên trong đến lên cao, rồi đến từng món ăn đều thể hiện hương vị Tây Âu rất đậm. Các món ăn được chế biến khá cầu kì, đẹp mắt. Nhưng đa phần mọi người vẫn thường lui tới đây để thưởng thức cafe, cocktail,… và các món tráng miệng hấp dẫn trong một khung cảnh Hà Nội lung linh, đầy mê hoặc.</p>\r\n    \r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-7.jpg\" alt=\"\" width=\"700\">\r\n    <h2 class=\"mt-3\" style=\"color: red\">3. Summit Lounge</h2>\r\n    <p class=\"content-text-para\">Nằm trên tầng 20 của khách sạn Sofitel Plaza, Summit Lounge có tầm nhìn đẹp bậc nhất tại Hà Nội. Quán chỉ mở cửa từ 16h mỗi ngày.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post2-8.jpg\" alt=\"\" width=\"700\">\r\n    <p class=\"content-text-para\">Nếu muốn thưởng thức trà hay cà phê, bạn nên đến trước 20h vì sau khoảng thời gian đó, quán sẽ chỉ phục vụ các loại rượu và cocktail. </p>\r\n    '),
(3, 'Đu đưa trở thành THÁNH FASTFOOD dzựt ngay 2 TRIỆU ĐỒNG', '10:17 10/12/2019', 44, 5, 3, 'images/photo-post3-1.jpg', '<p class=\"content-text-intro\">Đu đưa không phải là hư đu đưa là để lắc lư cho hết buồn.. Bởi vậy Cafo đi tìm truyền nhân \"THÁNH FASTFOOD\" để trao ngôi vị và trao luôn giải thưởng 2 TRIỆU ĐỒNG TIỀN MẶT nè, ai tự tin thấy mình trải nghiệm nhiều món fastfood nhất thì bơi nhanh hết vô đây đua kịch liền để trở thành \"Thánh FastFood\" nha!</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post3-1.jpg\" alt=\"\" width=\"700\">\r\n\r\n    <h2 class=\"mt-3\" style=\"color: red\">Thể lệ tham gia</h2>\r\n\r\n    <p class=\"content-text-para\">Bước 1: Đăng ký tham gia game \"THÁNH FASTFOOD\" bằng 2 cách:</p>\r\n    <p class=\"content-text-para\">+ Cách 1: Comment Link tài khoản của bạn dưới bài post này.</p>\r\n    <p class=\"content-text-para\">+ Cách 2: Comment Link tài khoản dưới bài post game \"THÁNH FASTFOOD\" trong group cộng đồng của các khu vực tại:</p>\r\n    '),
(4, '(HCM) Ghé Thăm “Izakaya” Xịn Nhất Khu Trung Tâm Chợ Bến Thành', '10:17 10/12/2019', 69, 4, 4, 'images/photo-post4-1.jpg', '<p class=\"content-text-intro\">Nằm ở hẻm 200 Lê Thánh Tôn, Kin Đee trở thành một đia điểm độc nhất vô nhị khi tọa lạc ngay gần khu chợ Bến Thành nhưng lại rời xa được những thanh âm ồn ào bên ngoài, giúp cho nơi đây trở thành một “izakaya” - một nơi \"trốn-để-chill\" khá hợp lý.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post4-1.jpg\" alt=\"\" width=\"700\">    \r\n    <p class=\"content-text-para\">Là mô hình kết hợp giữa Izakaya (quán nhậu Nhật) với nền ẩm thực đường phố của Thái, bạn tới Kin Đee sẽ cảm thấy ngay tính phóng khoáng trong cách thiết kế của nơi này. Không gian quán với tông màu xi măng mộc mạc kết hợp trần nhà được làm rất cao, rất thoáng đãng, mang tới một không gian mà mọi người bắt đầu cởi bỏ áp lực công việc, tạm quên những lo nghĩ và vui vẻ tham gia vào bữa tiệc nhỏ.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post4-2.jpg\" alt=\"\" width=\"700\">    \r\n    <p class=\"content-text-para\">Lấy cảm hứng như một Izakaya, Kin Đee với quầy bếp mở rộng, dù bạn ngồi ở góc nào, khi lia mắt về phía quầy đều thấy được những đầu bếp đang cần mẫn làm ra những món lai rai cho bạn nhé.</p>\r\n    <p class=\"content-text-para\">Tông màu xám với bề mặt gồ ghề làm chủ đạo đi liền mạch từ phủ tường đến lớp nền màu xi măng bụi bặm, được điểm nhấn bằng những bóng đèn neon đặc sắc. Chưa kể, nét phóng khoáng đó còn là khi đan xen ở giữa những bàn khách ngồi với nhau thì sẽ có thêm các hàng cửa lưới được giăng lên, như kiểu ngồi ở một khu nào đó ở đường phố của Thái Lan. Chỉ cần là một thực khách nhạy bén, nơi này ngoài là một nơi lai rai, còn hứa hẹn là nơi bạn thu về hàng trăm tấm ảnh đẹp để mang về nhà.</p>\r\n    <img class=\"img-fluid rounded\" src=\"images/photo-post4-3.jpg\" alt=\"\" width=\"700\">    \r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomment`
--

CREATE TABLE `blogcomment` (
  `CommentID` int(10) UNSIGNED NOT NULL,
  `BlogID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Content` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `LikeCount` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `blogcomment`
--

INSERT INTO `blogcomment` (`CommentID`, `BlogID`, `UserID`, `Content`, `Time`, `LikeCount`) VALUES
(1, 1, 2, 'hấp dẫn thật... good', '16:44 02/06/2018', 10),
(2, 1, 1, '                                test comment', '16:44 02/06/2018', 0),
(3, 1, 2, '                                test comment 2', '16:44 02/06/2018', 0),
(4, 2, 2, 'Hello mng', '16:44 02/06/2018', 0),
(5, 1, 10, '                                ahihihihihi', '16:44 02/06/2018', 0),
(6, 4, 10, '                                test', '16:44 02/06/2018', 0),
(7, 1, 1, '                                binh luan test', '16:44 02/06/2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cartfood`
--

CREATE TABLE `cartfood` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NameFood` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `LinkImage` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Price` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Amount` int(10) UNSIGNED DEFAULT NULL,
  `TotalPrice` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `cartfood`
--

INSERT INTO `cartfood` (`ID`, `NameFood`, `LinkImage`, `Price`, `Amount`, `TotalPrice`, `Status`) VALUES
(1, 'Bún Chả Cá', 'bunchaca_small.jpg', '15.000đ', 1, '15.000đ', 'Đã thêm'),
(2, 'Bánh Canh Chả Cá', 'banhcanhchaca.jpg', '20.000đ', 1, '20.000đ', 'Đã thêm');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PictureLink` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `ResID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `PictureLink`, `Name`, `Price`, `ResID`) VALUES
(1, '../images/foodimg/res21.jpg', 'Sữa tươi trân châu đường thốt nốt\r\n', 31500, 4),
(2, '../images/foodimg/res22.jpg', 'Trà sữa thái xanh', 27300, 4),
(3, '../images/foodimg/res23.jpg', 'Trà sữa thái xanh caramel', 40000, 4),
(4, '../images/foodimg/res24.jpg', 'Trà thái xanh macchiato', 28000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `ResID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `ResID` int(10) UNSIGNED NOT NULL,
  `Address` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Rating` float DEFAULT NULL,
  `WorkTime` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PictureRes` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`ResID`, `Address`, `Name`, `Rating`, `WorkTime`, `PictureRes`) VALUES
(1, '30 Hu?nh T?nh C?a, Qu?n 3, TP. HCM', 'The Coffee House', 8.4, '07:00-23:00', './images/coffee-house.jpg'),
(2, '29/24 Nguy?n Gia Trí (???ng D2), P. 25, Qu?n Bình Th?nh, TP.HCM', 'Highland Fruits', 8.4, '08:00-22:30', './images/highland-fruit.jpg'),
(3, '317/13 Thống Nhất, P. 11, Quận Gò Vấp, TP.HCM ', 'Cô Út - Bún Chả Cá', 8, '07:00 - 21:00 ', './images/cardhome3.jpg'),
(4, '388 Nguyễn Chí Thanh, P. 5,  Quận 10, TP. HCM', 'Sawadee Milk Tea', 8, '08:00 - 22:00', './images/cardhome2.jpg'),
(5, '98 Nguyễn Văn Đậu, P. 7,  Quận Bình Thạnh, TP. HCM', 'Bún Măng Vịt', 7.2, '07:00 - 21:00', './images/cardhome1.jpg'),
(6, '188 Nguyễn Thái Sơn, P. 4,  Quận Gò Vấp, TP. HCM', 'Cô Ba Sài Gòn', 7.8, '08:00 - 21:00', './images/cardhome4.jpg'),
(7, '188 Nguyễn Thái Sơn, P. 4,  Quận Gò Vấp, TP. HCM', 'Chasu', 7.9, '08:00 - 21:00', './images/cardhome5.jpg'),
(8, '195 Cao Đạt, P. 1,  Quận 5, TP. HCM', 'Dũng Cafe - Cao Đạt', 7.8, '07:00 - 22:00', './images/cardhome6.jpg'),
(9, '6 Trần Khắc Chân, P. Tân Định,  Quận 1, TP. HCM', 'Juice Me', 8.3, '07:30 - 21:30', './images/cardhome7.jpg'),
(10, '229 - 231 Đinh Tiên Hoàng, P. Tân Định,  Quận 1, TP. HCM', 'Gogi House', 6.7, '10:00 - 22:00', './images/cardhome8.jpg'),
(11, '454 Tên Lửa, P. Bình Trị Đông B,  Quận Bình Tân, TP. HCM', 'Mì Trộn Densan', 7.2, '08:00 - 23:59', './images/cardhome9.jpg'),
(12, '120F Đinh Tiên Hoàng, P. Đa Kao,  Quận 1, TP. HCM', 'Waffle Place', 7.8, '09:00 - 21:30', './images/cardhome10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ReviewerName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ReviewContent` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ReviewerAvatar` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ReviewPoint` float NOT NULL,
  `ReviewPicture` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ReviewComment` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ResID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `Title`, `ReviewerName`, `ReviewContent`, `ReviewerAvatar`, `ReviewPoint`, `ReviewPicture`, `ReviewComment`, `ResID`) VALUES
(1, 'None', 'Minh Phạm', 'Tch ở đây rộng rãi. Nhân viên nhiệt tình. Nước ổn, thích ngồi ở đây làm', './images/dog-avatar.jpg', 8.1, NULL, NULL, 1),
(2, 'None', 'Vinh Lê', 'The Coffee House thì quá quen thuộc với hầu hết mọi người rồi nhưng TCH đang có chương trình khuyến mãi đặc biệt', './images/cat-avatar.jpg', 8.9, NULL, NULL, 1),
(3, 'None', 'Edra Mode', 'Mình có dịp ghé qua quán do người bạn giới thiệu, mình là tín đồ của sầu riêng, và thế là như vớ được vàng :)))', './images/3-avatar.jpg', 7.5, NULL, NULL, 2),
(4, 'None', 'Kiều Kiều', 'Mình hay uống nước ép vì nguyên chất và không hề có đường, quán có món sinh tố Bơ sầu riêng thì siêu ngon', './images/4-avatar.jpg', 9, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `UserName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Sex` tinyint(1) DEFAULT NULL,
  `AccountName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `UserLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Sex`, `AccountName`, `Password`, `UserLevel`) VALUES
(1, 'xxx', 1, 'abc@gmail.com', '123456', 1),
(2, 'Cà phê giá sỉ', 1, 'uuukkk@gmail.com', '123456', 1),
(3, 'foodee_c95b0cfd', 1, 'afcsda@gmail.com', '123456', 1),
(4, 'Bơ sáp', 0, 'afgsdd@gmail.com', '123456', 1),
(10, 'tttt', 1, 'tttt@gmail.com', 'tttt', 0),
(11, 'Food', 0, 'abcxyz@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`Location`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `BlogID` (`BlogID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `cartfood`
--
ALTER TABLE `cartfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`,`ResID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`UserID`,`ResID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`ResID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogcomment`
--
ALTER TABLE `blogcomment`
  MODIFY `CommentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `ResID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD CONSTRAINT `blogcomment_ibfk_1` FOREIGN KEY (`BlogID`) REFERENCES `blog` (`BlogID`),
  ADD CONSTRAINT `blogcomment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `restaurant` (`ResID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`ResID`) REFERENCES `restaurant` (`ResID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`ResID`) REFERENCES `restaurant` (`ResID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
