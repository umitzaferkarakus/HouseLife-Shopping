-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 May 2020, 13:11:49
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eshopping`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `about_content` text COLLATE utf16_turkish_ci NOT NULL,
  `about_video` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `about_vision` varchar(500) COLLATE utf16_turkish_ci NOT NULL,
  `about_mission` varchar(500) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_content`, `about_video`, `about_vision`, `about_mission`) VALUES
(0, '   HouseLife Your Life     ', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tincidunt justo. Nam tristique cursus eros in volutpat. Donec id tortor tellus. Cras maximus a lorem sed tristique. Aliquam quis metus orci. Quisque ultrices quam nulla. Donec malesuada posuere semper. Fusce ultricies quam non nisi scelerisque placerat. Mauris congue neque scelerisque tellus tristique mollis. Nulla facilisi. Maecenas commodo vel erat non pretium.  Praesent at ipsum non urna laoreet dapibus sit amet ac felis. Maecenas consectetur felis a cursus finibus. Mauris vitae commodo augue. Pellentesque nec dolor sed turpis interdum imperdiet ut eget ipsum. Duis hendrerit, turpis sit amet malesuada luctus, sem dolor vulputate est, at mollis felis est ac ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean sed turpis eros. Mauris facilisis odio in purus feugiat ultrices nec sit amet dolor. In eget elementum ex. Mauris nec nulla at arcu venenatis interdum.  Nulla lacinia tempus ultrices. Integer diam nulla, interdum consequat commodo nec, hendrerit eu urna. Pellentesque pulvinar est eget magna gravida, sit amet volutpat nulla commodo. Maecenas placerat lacinia mattis. Maecenas volutpat risus vitae purus facilisis laoreet. Cras non auctor arcu. In quis erat id urna eleifend lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam a vehicula dolor.  Pellentesque fringilla sed eros ac pretium. In tempus eget eros quis malesuada. Fusce convallis felis eget libero elementum pretium. In hac habitasse platea dictumst. Cras sed dolor vel sem commodo ultrices. Nunc porttitor laoreet cursus. In euismod nibh quis eros vulputate vestibulum. Vestibulum eu sodales nisl, eu placerat tortor.  Donec in libero mi. Aenean sed lorem a urna rutrum dictum eu eget sem. Ut commodo augue id mi venenatis iaculis. Fusce tincidunt tellus nec est ullamcorper, non finibus nisl commodo. Phasellus rutrum nec lacus non pretium. Integer sollicitudin ex in lectus pharetra iaculis. Fusce tincidunt libero eu suscipit dignissim. Duis pretium, leo non dictum efficitur, urna nisl pretium nibh, ac molestie arcu est eget eros. Nam eleifend fringilla nisi eget ultrices. Maecenas in congue lacus, vitae viverra nulla. Pellentesque quis vehicula tortor. Donec at lobortis ex. Aenean at urna elit. Sed at tellus elit.  Praesent euismod tempor risus vel luctus. Aliquam erat volutpat. Nulla pharetra odio lacus, eu malesuada justo sagittis fringilla. Sed id lacus id elit gravida consectetur in a massa. Duis convallis elementum ornare. Sed eget dignissim magna. Sed non dictum augue, quis porta nunc. Nullam risus sapien, porta a sodales non, malesuada vel risus. Aenean ultricies pellentesque diam, id pretium ligula.  Suspendisse gravida velit sed pharetra ornare. Nulla libero dolor, vestibulum molestie metus vel, eleifend consectetur nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce ullamcorper purus at pulvinar varius. Etiam ornare est augue. Donec cursus ante fermentum, venenatis erat eu, molestie ipsum. Nulla a turpis faucibus, tincidunt odio nec, suscipit justo. Morbi at efficitur metus, at eleifend nulla. Nulla sed varius quam. Aenean turpis risus, mollis a magna vel, vehicula vulputate nisi. Duis ullamcorper scelerisque iaculis.  ', '   video kodu     ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tincidunt justo. Nam tristique cursus eros in volutpat. Donec id tortor tellus. Cras maximus a lorem sed tristique. Aliquam quis metus orci. Quisque ultrices quam nulla. Donec malesuada posuere semper. Fusce ultricies quam non nisi scelerisque placerat. Mauris congue neque scelerisque tellus tristique mollis. Nulla facilisi. Maecenas commodo vel erat non pretium.  Praesent at ipsum non urna laoreet dapibus sit amet ac felis. Ma', '   Nulla lacinia tempus ultrices. Integer diam nulla, interdum consequat commodo nec, hendrerit eu urna. Pellentesque pulvinar est eget magna gravida, sit amet volutpat nulla commodo. Maecenas placerat lacinia mattis. Maecenas volutpat risus vitae purus facilisis laoreet. Cras non auctor arcu. In quis erat id urna eleifend lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam a vehicula dolor.  Pellentesque fringilla sed eros ac pretium. In tempus ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `bank_iban` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `bank_account` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `bank_status` enum('0','1') COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_iban`, `bank_account`, `bank_status`) VALUES
(1, 'Ziraat Bankası', '123456', 'zafer', '1'),
(3, 'Garanti Bankası', '123456789', 'zafer', '1'),
(4, 'Yapı Kredi Bankası', '123456789', 'zafer', '1'),
(5, 'VakıfBank', '123456789', 'zafer', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product_quantity`) VALUES
(1, 0, 38, 1),
(2, 0, 44, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `category_top` int(2) NOT NULL,
  `category_seourl` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `category_row` int(2) NOT NULL,
  `category_status` enum('0','1') COLLATE utf16_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_top`, `category_seourl`, `category_row`, `category_status`) VALUES
(1, 'Living Room', 0, 'living-room', 0, '1'),
(2, 'Restroom', 0, 'restroom', 1, '1'),
(5, 'Kitchen', 0, 'kitchen', 3, '1'),
(6, 'Bedroom', 0, 'bedroom', 2, '1'),
(7, 'Children\'s room', 0, 'children-s-room', 4, '1'),
(8, 'Carpets', 0, 'carpets', 5, '1'),
(9, 'Household Appliances', 0, 'household-appliances', 6, '1'),
(10, 'Garden', 0, 'garden', 7, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_top` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `menu_name` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `menu_detail` text COLLATE utf16_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `menu_row` int(2) NOT NULL,
  `menu_status` enum('0','1') COLLATE utf16_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_top`, `menu_name`, `menu_detail`, `menu_url`, `menu_row`, `menu_status`, `menu_seourl`) VALUES
(4, NULL, 'About Us ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'about.php', 3, '1', 'about-us'),
(5, NULL, 'Contact', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '', 4, '1', 'contact'),
(6, NULL, 'Categories', '<p>zafer</p>\r\n', 'category', 2, '1', 'categories');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_name` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `product_seourl` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `product_detail` text COLLATE utf16_turkish_ci NOT NULL,
  `product_price` int(9) NOT NULL,
  `product_keyword` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_status` enum('0','1') COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_time`, `product_name`, `product_seourl`, `product_detail`, `product_price`, `product_keyword`, `product_stock`, `product_status`) VALUES
(19, 6, '2020-05-27 12:06:09', 'Victorian Bed', 'victorian-bed', '<p>If your sleep Guston belongs to luxury ... in the perfection of craftsmanship, a unique sleep luxury that will be enjoyed by Penelope for the first time in the world by the Thindown &reg; and the three-storey special spring system built into the cotton bags.</p>\r\n', 12750, 'bed', 20, '1'),
(20, 6, '2020-05-27 12:08:24', 'Smart Bed', 'smart-bed', '<p>FULL COT<br />\r\nMASSAGE SYSTEM<br />\r\nMOVABLE MOTOR BEARING MECHANISM<br />\r\nSOUND SYSTEM<br />\r\nSAFE (HIDDEN))<br />\r\nCONNECTING BLUETOOTH<br />\r\nUSB PORT<br />\r\nMULTIPLE SOCKETS<br />\r\nPHONE CHARGING<br />\r\nTHINKING<br />\r\nDRAWER<br />\r\nPUFF<br />\r\nMAKEUP MIRROR<br />\r\nJEWELRY DEPARTMENT<br />\r\nBOOK READING LAMP<br />\r\n160 * 200 IS THE FULL SYSTEM PRICE A</p>\r\n', 10000, 'bed,smart', 50, '1'),
(21, 6, '2020-05-27 12:09:52', 'Benigno Bedroom Suite', 'benigno-bedroom-suite', '<p>Benigno bedroom, khaki and walnut color harmony with those who prefer the bedroom suite will be a product that will be used fondly. With its quality and design, you will love to use the coveted Benigno bedroom suite. - Flotal mirror and self-doweled minifix fastener are used in this product. - Chipboard and mdf were used in the production of the product. - The team has cot+ dresser + closet + nightstand x2. It is the tool price of the product. You can buy in different combinations if you wish. - Profile sliding cabinet offering wide storage. - Only the cabinet doors used decelerating hinges, and the cover life was extended and fast bumps were prevented. - 160 * 200 beds will fit the cot. - The cot in the suit Price is baseless. Baza is an optional product. It is also priced at. - Our team comes to your house disassembled and assembled in your home. - The supply period is maximum 4 weeks but you can contact for detailed information. - The Product Is Baseless. Baza Is Optional. You can take the bedroom as a team and you can take it in pieces.</p>\r\n', 7450, 'beningo,bed', 100, '1'),
(22, 6, '2020-05-27 12:11:54', 'LOFT BEDROOM SUITE', 'loft-bedroom-suite', '<p>Team content the team content consists of 1 wardrobe, 1 cot, 2 bedside tables and 1 dresser + mirror.<br />\r\nThe material is made of Suntalam material.<br />\r\nBed Type Pool With Base<br />\r\nCot Type With No Base Higher Than The Ground<br />\r\nLighting feature there is no lighting feature.<br />\r\nColor Atlantic Pine<br />\r\nDisassembled parts all parts are sent disassembled.<br />\r\nAdditional information baseless cot pooled. The based cot is high above the ground, standing.<br />\r\nThe mirror is a smoked blackout.<br />\r\nProduct Group Bedroom</p>\r\n', 10000, 'bedroom', 100, '1'),
(23, 6, '2020-05-27 12:14:05', 'Nokim Bedroom Suite', 'nokim-bedroom-suite', '<p>- The bedroom is manufactured to E1 quality standard, which does not contain carcinogenic substances that are harmless to the environment and health. - Flotal mirror and self-doweled minifix fastener are used in this product. - Mdf was used in product production. - Team (2x nightstand + closet + cot + dresser) is available. It is the tool price of the product. You can buy in different combinations if you wish. - Optional modules are not included in the tool price, they are sold separately. - Sliding cabinet with profile cover offering wide storage. - Our team comes to your house disassembled and assembled in your home. - Maximum term duration is 4 weeks but you can contact for detailed information. - Spring beds are sold separately not included in the set. . You can take the bedroom as a team and you can take it in pieces.</p>\r\n', 15750, 'bedroom', 50, '1'),
(24, 1, '2020-05-27 12:18:31', 'Lexus Saloon Team', 'lexus-saloon-team', '', 14250, 'livingroom', 60, '1'),
(25, 1, '2020-05-27 12:20:07', 'Diana Hall Team', 'diana-hall-team', '<p>Diana lounge suite; one triple seat (with bed) - one triple seat (without bed) - one single seat is included in the suite price.</p>\r\n\r\n<p>You Can Order The Triple Seats Of Our Product As A Single. The product dimensions are as follows:</p>\r\n', 7540, 'livingroom', 100, '1'),
(26, 1, '2020-05-27 12:22:21', 'Everest Hall Team', 'everest-hall-team', '<p>The Everest seat set consists of one triple seat - one double seat - one single seat.<br />\r\nYou can buy it in the singular.<br />\r\nModule prices are calculated by collecting individual purchases and team module reductions.<br />\r\nModern Design.<br />\r\nThe triple seat on the team is non-motorized. You can purchase a triple-engined seat as an option if you wish, and you can combinate as desired.<br />\r\nIt is made of hornbeam skeleton.<br />\r\nIt features wooden feet.<br />\r\nAdopting a simple lifestyle means being calmer and more harmonious.<br />\r\nMotorized triple seat can be a bed with a single bed system.<br />\r\nThe motorized triple seat has a USB port. You can use the USB charging feature.<br />\r\nNubuk and derivative fabrics were used.<br />\r\nMiddle trestle and side trestle are not included in the price. It can be purchased separately as an option.<br />\r\nAlternative colour and fabric options are available.<br />\r\nOur product is 1.Manufactured with grade material.<br />\r\nIt is produced with non-carcinogenic materials in E1 standards.</p>\r\n', 9650, 'livingroom', 100, '1'),
(27, 1, '2020-05-27 12:24:48', 'Pesaro Hall Team', 'pesaro-hall-team', '<p>Pesaro Dining Room team as a concept model of the Pesaro Living Room team 3-3-B-B team structure has been taken to our series.</p>\r\n\r\n<p>Our Pesaro Salon Team model, where the avant-garde lines are interpreted with modern understanding, will create a stylish atmosphere in the halls with its elegant posture.</p>\r\n\r\n<p>A visual richness was presented by applying vertical splitting on the curved back of our new salon team.</p>\r\n\r\n<p>In our new model, which is dominated by Soft lines, the structure of an outer winding arm is designed and an aesthetic model is prepared in the original line.</p>\r\n\r\n<p>In the lower base part of our Pesaro Salon Suite model, the clap made of wood is used and the clap combined with Lukens form wooden feet has added a rich visual to the product.</p>\r\n\r\n<p>A comfortable and comfortable session is presented with the 32 DNS soft sponge used in the font part of our product.</p>\r\n\r\n<p>In addition to combinatorics and main patterned arm folds, the Pesaro triple seat unit al</p>\r\n', 18750, 'livingroom', 20, '1'),
(28, 2, '2020-05-27 12:26:15', 'Orka Restroom', 'orka-restroom', '<p>Body: thermoform surface coating over MDF<br />\r\nCovers: thermoform surface coating over MDF<br />\r\nBench: Ceramic Sink<br />\r\nMirror: Led backlit (80x65) Flotal Mirror</p>\r\n', 4250, 'restroom', 250, '1'),
(29, 2, '2020-05-27 12:27:39', 'Malta Restroom', 'malta-restroom', '<p>Body: thermoform surface coating over MDF<br />\r\nCovers: thermoform surface coating over MDF<br />\r\nBench: Ceramic Sink<br />\r\nMirror: Led backlit (80x65) Flotal Mirror</p>\r\n', 7640, 'restroom', 50, '1'),
(30, 5, '2020-05-27 12:29:42', 'Black Kitchen', 'black-kitchen', '', 22550, 'kitchen', 50, '1'),
(31, 5, '2020-05-27 12:30:30', 'Pruple Kitchen', 'pruple-kitchen', '', 6400, 'kitchen', 50, '1'),
(32, 5, '2020-05-27 12:31:56', 'White Kitchen', 'white-kitchen', '', 4250, 'kitchen', 250, '1'),
(33, 7, '2020-05-27 12:33:18', 'Marina', 'marina', '', 6750, 'children', 250, '1'),
(34, 7, '2020-05-27 12:34:10', 'Pink', 'pink', '', 4250, 'children', 250, '1'),
(35, 1, '2020-05-27 12:35:34', 'Pink Car', 'pink-car', '', 5800, 'children', 200, '1'),
(36, 8, '2020-05-27 12:37:02', 'Elsa Carpet', 'elsa-carpet', '', 750, 'carpet', 250, '1'),
(37, 8, '2020-05-27 12:38:02', 'Confetti Carpet', 'confetti-carpet', '', 675, 'carpet', 250, '1'),
(38, 1, '2020-05-27 12:39:25', 'Smart Carpet', 'smart-carpet', '', 1750, 'carpet', 100, '1'),
(39, 9, '2020-05-27 12:41:04', 'White ', 'white', '', 8250, 'household', 75, '1'),
(40, 9, '2020-05-27 12:43:04', 'Grey', 'grey', '', 6500, 'household', 150, '1'),
(41, 9, '2020-05-27 12:43:51', 'Black', 'black', '', 9250, 'household', 250, '1'),
(42, 10, '2020-05-27 12:44:55', 'Verando', 'verando', '', 550, 'garden', 75, '1'),
(43, 10, '2020-05-27 12:45:50', 'Wood ', 'wood', '', 6750, 'garden', 250, '1'),
(44, 10, '2020-05-27 12:46:46', 'Lüx Wood', 'lux-wood', '', 4250, 'garden', 100, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `productfoto`
--

CREATE TABLE `productfoto` (
  `profoto_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `profoto_picway` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `profoto_raw` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `productfoto`
--

INSERT INTO `productfoto` (`profoto_id`, `product_id`, `profoto_picway`, `profoto_raw`) VALUES
(2, 18, 'dimg/product/28990270062425823073urun-resmi-yok-e1516270604783.png', 0),
(3, 18, 'dimg/product/24995201362362031163urun-resmi-yok-e1516270604783.png', 0),
(4, 18, 'dimg/product/28896260822146230722urun-resmi-yok-e1516270604783.png', 0),
(5, 18, 'dimg/product/20585210352115628101urun-resmi-yok-e1516270604783.png', 0),
(6, 18, 'dimg/product/26690271222232630426urun-resmi-yok-e1516270604783.png', 0),
(7, 19, 'dimg/product/21574319142470328260victorian-yatak-1108-39-B.png', 0),
(8, 19, 'dimg/product/30286312102665328528urun-resmi-yok-e1516270604783.png', 0),
(9, 19, 'dimg/product/24255316072867324460urun-resmi-yok-e1516270604783.png', 0),
(10, 20, 'dimg/product/25607207292588824681akilli-karyola-3-yatak-ve-baza-grubu-hatemhome-moblya-585-17-O.jpg', 0),
(11, 20, 'dimg/product/26467282053142431817urun-resmi-yok-e1516270604783.png', 0),
(12, 20, 'dimg/product/24960296572840530491urun-resmi-yok-e1516270604783.png', 0),
(14, 21, 'dimg/product/23213272752363721374Benigno-Yatak-Odasi-Takimi-6131.jpg', 0),
(15, 22, 'dimg/product/22789238812943630250GM3-671-w.jpg', 0),
(16, 23, 'dimg/product/27968310582339921007nokim-yatak-odasi-takimi-244c.jpg', 0),
(17, 23, 'dimg/product/26372319292615221774nokim-yatak-odasi-takimi-244c.jpg', 0),
(18, 24, 'dimg/product/26640231932159724411lexus-salon-takimi-mondeo-kahve-krem.jpg', 0),
(19, 24, 'dimg/product/31736274282494724322urun-resmi-yok-e1516270604783.png', 0),
(20, 24, 'dimg/product/25746232962827421678urun-resmi-yok-e1516270604783.png', 0),
(21, 25, 'dimg/product/29296269212520229605460X-270X-AIUTLRMQCU412201818545_diana_salon_takimi_salon_takimi_modelleri.jpg', 0),
(22, 25, 'dimg/product/21008244302735731226urun-resmi-yok-e1516270604783.png', 0),
(23, 26, 'dimg/product/21511319462836327668Everest-Salon-Takimi-9c46.jpg', 0),
(24, 26, 'dimg/product/21427235952784626055urun-resmi-yok-e1516270604783.png', 0),
(25, 26, 'dimg/product/29384275023143127513urun-resmi-yok-e1516270604783.png', 0),
(26, 27, 'dimg/product/25098221652336222413pesaro-salon-takimi-ducagrizumrutyesili-parisanadesen-tab-01.jpg', 0),
(27, 27, 'dimg/product/28301211092299221767urun-resmi-yok-e1516270604783.png', 0),
(28, 27, 'dimg/product/30638215292756720160urun-resmi-yok-e1516270604783.png', 0),
(29, 27, 'dimg/product/24232290522621220217urun-resmi-yok-e1516270604783.png', 0),
(30, 28, 'dimg/product/31209313012605230564su-80-altin-mese-led-aynali.jpg', 0),
(31, 28, 'dimg/product/31694219002821329825urun-resmi-yok-e1516270604783.png', 0),
(32, 29, 'dimg/product/22646290862133824957malta-120-cift-lavabo-antrasit-bm.jpg', 0),
(33, 29, 'dimg/product/26190230732665225823urun-resmi-yok-e1516270604783.png', 0),
(34, 30, 'dimg/product/30852239893104726179torbali-mutfak-mobilyalari.jpg', 0),
(35, 30, 'dimg/product/21205293252246721754urun-resmi-yok-e1516270604783.png', 0),
(36, 31, 'dimg/product/240032979126742271658808682520626_1581943696102.jpg', 0),
(37, 31, 'dimg/product/25912225883140526138urun-resmi-yok-e1516270604783.png', 0),
(38, 32, 'dimg/product/2573428019210433155712502.jpg', 0),
(39, 32, 'dimg/product/20096262072528420545urun-resmi-yok-e1516270604783.png', 0),
(40, 33, 'dimg/product/23622272773175224230marin.jpg', 0),
(41, 33, 'dimg/product/20937233562207031735urun-resmi-yok-e1516270604783.png', 0),
(42, 34, 'dimg/product/22598259192098923399BO3-418.jpg', 0),
(43, 34, 'dimg/product/25655238962623826240urun-resmi-yok-e1516270604783.png', 0),
(44, 34, 'dimg/product/27002273813183831401urun-resmi-yok-e1516270604783.png', 0),
(45, 35, 'dimg/product/29262224992541422006laila-prenses-cocuk-odasi-takimi-5ac2.jpg', 0),
(46, 35, 'dimg/product/29061253742459323182urun-resmi-yok-e1516270604783.png', 0),
(47, 36, 'dimg/product/29025221322899830054else-hali-tasli-mor-yaprak-3d-baskili-salon-modern-halilar-133x180cm-elsehali2-1.jpg', 0),
(48, 36, 'dimg/product/25777288992025331746urun-resmi-yok-e1516270604783.png', 0),
(49, 36, 'dimg/product/21943317982198623383urun-resmi-yok-e1516270604783.png', 0),
(50, 37, 'dimg/product/26149229542782130091confetti-colorado-11630-acik-mavi-bukle-dekoratif-hali-yeni-sezon-dekoratif-hallar-confetti-11630-35495-13-K.jpg', 0),
(51, 37, 'dimg/product/29019244942538222993urun-resmi-yok-e1516270604783.png', 0),
(52, 37, 'dimg/product/27177285422029427217urun-resmi-yok-e1516270604783.png', 0),
(53, 38, 'dimg/product/26666245673186626184carpet3-1024x1024.jpg', 0),
(54, 38, 'dimg/product/25434230363076320703urun-resmi-yok-e1516270604783.png', 0),
(55, 38, 'dimg/product/31867288893038622419urun-resmi-yok-e1516270604783.png', 0),
(56, 39, 'dimg/product/30588222482436120454shutterstock_318473174_16_9_1561363145-880x495.jpg', 0),
(57, 40, 'dimg/product/2381124477278192662456b4af6661361f23b0d0e220.jpg', 0),
(58, 41, 'dimg/product/23250212212418425885arcelik-antrasit-ocakli-paket (1).png', 0),
(59, 42, 'dimg/product/25862306603067520123indir.jpg', 0),
(60, 43, 'dimg/product/23687206552599523587indir (1).jpg', 0),
(61, 44, 'dimg/product/31304202232884822915images.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reviews_detail` text COLLATE utf16_turkish_ci NOT NULL,
  `reviews_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `reviews`
--

INSERT INTO `reviews` (`reviews_id`, `product_id`, `user_id`, `reviews_detail`, `reviews_time`) VALUES
(2, 18, 3, '  dasdasd', '2020-05-14 20:43:41'),
(3, 18, 3, '  dasdasdas', '2020-05-14 20:48:58'),
(4, 18, 3, '  dasdasd', '2020-05-14 20:59:43'),
(5, 18, 3, '  sadasd', '2020-05-14 21:00:01'),
(6, 18, 3, '  adsasda', '2020-05-14 21:06:44'),
(7, 18, 3, 'dasdasd', '2020-05-14 21:24:59'),
(8, 39, 7, 'reviews', '2020-05-27 13:53:26'),
(9, 44, 7, 'yorum', '2020-05-27 14:24:34');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `setting_logo` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_title` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_description` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_keywords` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_author` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_phone` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_gsm` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_mail` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_country` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_city` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_adress` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_maps` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_analystic` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_zopim` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `setting_facebook` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_twitter` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_google` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_youtube` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_smtphost` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_smtpuser` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_smtpassword` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_smtppost` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `setting_overhaul` enum('0','1') COLLATE utf16_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_logo`, `setting_title`, `setting_description`, `setting_keywords`, `setting_author`, `setting_phone`, `setting_gsm`, `setting_mail`, `setting_country`, `setting_city`, `setting_adress`, `setting_maps`, `setting_analystic`, `setting_zopim`, `setting_facebook`, `setting_twitter`, `setting_google`, `setting_youtube`, `setting_smtphost`, `setting_smtpuser`, `setting_smtpassword`, `setting_smtppost`, `setting_overhaul`) VALUES
(0, 'dimg/27987logo.png', '     HouseLife   ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas quis ipsum suspendisse ultrices gravida. Feugiat in fermentum posuere urna nec tincidunt praesent. Enim praesent eleme', '     HouseLife', '     HouseLife', '   0505 542 61 20  ', '   0505 542 61 20   ', '   info@houselife.com   ', '   Turkey   ', '   Aydın   ', '   Aydın Efeler Merkez   ', 'maps          ', '慮慬祳瑩挠†††††', 'zopim           ', '   www.facebook.com   ', '   www.twitter.com   ', '   www.google.com   ', '   www.youtube.com   ', '  mail.hostname.com     ', 'user', '  password     ', '  587     ', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `slider_pic` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `slider_row` int(2) NOT NULL,
  `slider_link` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `slider_status` enum('0','1') COLLATE utf16_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_pic`, `slider_row`, `slider_link`, `slider_status`) VALUES
(8, 'Best Seller', 'dimg/slider/20742285182238722279Adsiz3.png', 2, '', '1'),
(9, 'For You', 'dimg/slider/23629276212831930673Adsiz2.png', 3, '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `taken`
--

CREATE TABLE `taken` (
  `order_id` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_no` int(12) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` int(9) NOT NULL,
  `order_type` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `order_bank` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `order_pay` enum('0','1') COLLATE utf16_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `taken`
--

INSERT INTO `taken` (`order_id`, `order_time`, `order_no`, `user_id`, `order_total`, `order_type`, `order_bank`, `order_pay`) VALUES
(2, '2020-05-26 23:30:58', NULL, 3, 1050, 'Bank Transfer', 'ziraat', '0'),
(3, '2020-05-26 23:31:48', NULL, 3, 1050, 'Bank Transfer', 'ziraat', '0'),
(4, '2020-05-27 13:59:05', NULL, 7, 8250, 'Bank Transfer', 'ziraat', '0'),
(5, '2020-05-27 14:24:44', NULL, 7, 12750, 'Bank Transfer', 'Ziraat Bankası', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `taken_detail`
--

CREATE TABLE `taken_detail` (
  `order_detailid` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` float(9,2) NOT NULL,
  `product_quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `taken_detail`
--

INSERT INTO `taken_detail` (`order_detailid`, `order_id`, `product_id`, `product_price`, `product_quantity`) VALUES
(1, 3, 2, 1000.00, 1),
(2, 3, 5, 50.00, 1),
(3, 4, 39, 8250.00, 1),
(4, 5, 44, 4250.00, 1),
(5, 5, 44, 4250.00, 1),
(6, 5, 44, 4250.00, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_picture` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `user_tc` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_mail` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_gsm` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_address` varchar(250) COLLATE utf16_turkish_ci NOT NULL,
  `user_city` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_country` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_title` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `user_authory` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_time`, `user_picture`, `user_tc`, `user_mail`, `user_name`, `user_gsm`, `user_password`, `user_address`, `user_city`, `user_country`, `user_title`, `user_authory`, `user_status`) VALUES
(1, '0000-00-00 00:00:00', '', '123456789', 'houselife@gmail.com', 'Zafer Karakuş', '5055426120', '159357', '', '', '', '5', '', 1),
(7, '2020-05-27 16:51:03', '', '', 'test@gmail.com', 'test', '', 'fcea920f7412b5da7be0cf42b8c93759', '', '', '', '1', '', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `productfoto`
--
ALTER TABLE `productfoto`
  ADD PRIMARY KEY (`profoto_id`);

--
-- Tablo için indeksler `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- Tablo için indeksler `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `taken`
--
ALTER TABLE `taken`
  ADD PRIMARY KEY (`order_id`);

--
-- Tablo için indeksler `taken_detail`
--
ALTER TABLE `taken_detail`
  ADD PRIMARY KEY (`order_detailid`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Tablo için AUTO_INCREMENT değeri `productfoto`
--
ALTER TABLE `productfoto`
  MODIFY `profoto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Tablo için AUTO_INCREMENT değeri `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `taken`
--
ALTER TABLE `taken`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `taken_detail`
--
ALTER TABLE `taken_detail`
  MODIFY `order_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
