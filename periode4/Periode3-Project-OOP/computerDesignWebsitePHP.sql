-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2022 at 02:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerDesignWebsitePHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikersID` int(11) NOT NULL,
  `naam` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `telefoonnummer` int(11) DEFAULT NULL,
  `wachtwoord` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikersID`, `naam`, `email`, `telefoonnummer`, `wachtwoord`) VALUES
(1, 'admin', 'admin@admin', 12345890, 'admin'),
(3, 'test', 'test@test.nl', 123456789, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `medewerkers`
--

CREATE TABLE `medewerkers` (
  `medewerkID` int(11) NOT NULL,
  `naam` varchar(256) DEFAULT NULL,
  `tussenvoegsel` varchar(256) DEFAULT NULL,
  `achternaam` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `adres` varchar(256) DEFAULT NULL,
  `postcode` varchar(256) DEFAULT NULL,
  `woonplaats` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `gebruikersID` int(11) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `prebuild` varchar(256) DEFAULT NULL,
  `verzendadress` varchar(256) DEFAULT NULL,
  `verzendpostcode` varchar(256) DEFAULT NULL,
  `verzendwoonplaats` varchar(256) DEFAULT NULL,
  `productid_case` int(11) DEFAULT NULL,
  `productid_cpu` int(11) DEFAULT NULL,
  `productid_cpucooler` int(11) DEFAULT NULL,
  `productid_ram` int(11) DEFAULT NULL,
  `productid_mobo` int(11) DEFAULT NULL,
  `productid_gpu` int(11) DEFAULT NULL,
  `productid_fan` int(11) DEFAULT NULL,
  `fan_Amount` int(11) DEFAULT NULL,
  `productid_psu` int(11) DEFAULT NULL,
  `productid_opslag` int(11) DEFAULT NULL,
  `productid_kabels` int(11) DEFAULT NULL,
  `totaalPrijs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `gebruikersID`, `status`, `prebuild`, `verzendadress`, `verzendpostcode`, `verzendwoonplaats`, `productid_case`, `productid_cpu`, `productid_cpucooler`, `productid_ram`, `productid_mobo`, `productid_gpu`, `productid_fan`, `fan_Amount`, `productid_psu`, `productid_opslag`, `productid_kabels`, `totaalPrijs`) VALUES
(8, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(9, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(10, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(11, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(12, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(13, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(14, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(15, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(16, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(17, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(18, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(19, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(20, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(21, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(22, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(23, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(24, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(25, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(26, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(27, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(28, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(29, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(30, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(31, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(32, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(33, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(34, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(35, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(36, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(37, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(38, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(39, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(40, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(41, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(42, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(43, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(44, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(45, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(46, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(47, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(48, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(49, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(50, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(51, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(52, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(53, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(54, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(55, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502),
(56, 1, 'Awaiting Payment', 'Nee', 'Vulcaanstraat 29', '7061AW', 'Terborg', 7, 12, 22, 19, 28, 34, 38, 3, 46, 43, 50, 1502);

-- --------------------------------------------------------

--
-- Table structure for table `order_Products`
--

CREATE TABLE `order_Products` (
  `ordersID` int(11) DEFAULT NULL,
  `productid_case` int(11) DEFAULT NULL,
  `productid_fan` int(11) DEFAULT NULL,
  `fan_amount` int(11) DEFAULT NULL,
  `productid_cpu` int(11) DEFAULT NULL,
  `productid_cpucooler` int(11) DEFAULT NULL,
  `productid_moederbord` int(11) DEFAULT NULL,
  `productid_ram` int(11) DEFAULT NULL,
  `productid_gpu` int(11) DEFAULT NULL,
  `productid_opslag` int(11) DEFAULT NULL,
  `productid_psu` int(11) DEFAULT NULL,
  `kabelsincluded` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `productID` int(11) NOT NULL,
  `naam` varchar(256) DEFAULT NULL,
  `typecomponent` varchar(256) DEFAULT NULL,
  `merk` varchar(256) DEFAULT NULL,
  `prijs` double DEFAULT NULL,
  `imgurl` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`productID`, `naam`, `typecomponent`, `merk`, `prijs`, `imgurl`) VALUES
(2, 'Corsair 4000D Airflow Tempered Glass Black Midi Tower', 'case_atx', 'Corsair', 89.9, NULL),
(3, 'NZXT H510 Black - Black Midi Tower', 'case_atx', 'NZXT', 69.9, NULL),
(4, 'be quiet! Pure Base 500DX Black Midi Tower', 'case_atx', 'Be_quiet!', 99.9, NULL),
(5, 'Cooler Master MasterBox Q300L', 'case_microatx', 'Cooler_Master', 46.9, NULL),
(6, 'Aerocool Bolt Mini', 'case_microatx', 'Aerocool', 42.9, NULL),
(7, 'Thermaltake behuizing S100 TG', 'case_microatx', 'Thermaltake', 49.95, NULL),
(8, 'NZXT H1 V2 Matte Black (2022 Version)', 'case_miniitx', 'NZXT', 372, NULL),
(9, 'Razer Tomahawk', 'case_miniitx', 'Razer', 149, NULL),
(10, 'Fractal Design Torrent Nano Black Solid ', 'case_miniitx', 'Fractal_design', 115.9, NULL),
(11, 'AMD Ryzen™ 7 5800X ', 'cpu_amd', 'Amd', 509, NULL),
(12, 'AMD Ryzen™ 5 3600X', 'cpu_amd', 'Amd', 269, NULL),
(13, 'AMD Ryzen™ 7 3800X', 'cpu_amd', 'Amd', 389, NULL),
(14, 'Intel Core i5 12600K', 'cpu_intel', 'Intel', 305, NULL),
(15, 'Intel Core i7 12700K', 'cpu_intel', 'Intel', 435, NULL),
(16, 'Intel Core i9 12900K', 'cpu_intel', 'Intel', 595, NULL),
(17, 'Corsair DDR4 Vengeance LPX 2x32GB 3200', 'ram', 'Corsair', 329, NULL),
(18, 'Corsair DDR4 Vengeance RGB Pro 4x8GB 3200 ', 'ram', 'Corsair', 169, NULL),
(19, 'Corsair DDR4 Vengeance RGB Pro 2x8GB 3600', 'ram', 'Corsair ', 84.9, NULL),
(20, 'Be quiet! Dark Rock Pro 4', 'cpukoeler', 'Be_quiet!', 79, NULL),
(21, 'Noctua NH-D15 chromax.black', 'cpukoeler', 'Noctua', 109.9, NULL),
(22, 'NZXT Kraken X63 RGB', 'cpukoeler', 'NZXT', 153, NULL),
(23, 'Gigabyte B550 AORUS ELITE V2', 'mobo_atx', 'Gigabyte', 149, NULL),
(24, 'MSI MAG B550 TOMAHAWK', 'mobo_atx', 'MSI', 139, NULL),
(25, 'Gigabyte B550 GAMING X', 'mobo_atx', 'Gigabyte', 115.55, NULL),
(26, 'Asrock B550M STEEL LEGEND', 'mobo_microatx', 'Asrock', 105, NULL),
(27, 'MSI B450M-A PRO MAX', 'mobo_microatx', 'MSI', 48.66, NULL),
(28, 'Gigabyte B550M AORUS PRO-P ', 'mobo_microatx', 'Gigabyte', 119, NULL),
(29, 'Asrock B550 Phantom Gaming', 'mobo_miniitx', 'Asrock', 189, NULL),
(30, 'Biostar B550T-SILVER AMD B550', 'mobo_miniitx', 'Biostar', 170.95, NULL),
(31, 'Gigabyte X570 I AORUS PRO WIFI', 'mobo_miniitx', 'Gigabyte', 219, NULL),
(32, 'Gainward NVIDIA GeForce RTX 3080 12 GB GDDR6X', 'gpu_nvidia', 'Gainward', 1600, NULL),
(33, 'Inno3d GeForce RTX 3070 Ti iChill X4', 'gpu_nvidia', 'Inno3d', 1079, NULL),
(34, 'Gigabyte GeForce RTX 3060 AORUS ELITE 12G 2.0', 'gpu_nvidia', 'Gigabyte', 599, NULL),
(35, 'Asrock Radeon RX 6800 XT Phantom Gaming D 16G OC', 'gpu_radeon', 'Asrock', 1149, NULL),
(36, 'Gigabyte Radeon RX 6500 XT GAMING OC 4G', 'gpu_radeon', 'Gigabyte', 329, NULL),
(37, 'Asus Radeon RX 6600 XT ROG-STRIX-RX6600XT-O8G-GAMING', 'gpu_radeon', 'Asus', 649, NULL),
(38, 'Arctic P12 PWM Zwart 120mm', 'fan', 'Arctic', 7.95, NULL),
(39, 'Corsair LL120 RGB, 120mm Dual Light Loop RGB LED PWM Fan', 'fan', 'Corsair', 27.9, NULL),
(40, 'NZXT Aer RGB 2 - 120mm Single - Black Edition\n', 'fan', 'NZXT', 23.9, NULL),
(41, 'Kingston A400 240GB SSD', 'opslag', 'Kingston', 39.95, NULL),
(42, 'Crucial BX500 1TB SSD', 'opslag', 'Crucial', 84.9, NULL),
(43, 'Seagate HDD NAS 3.5\" 4TB ST4000NE001 IronWolf Pro', 'opslag', 'Seagate', 129.9, NULL),
(44, 'Corsair CX750F RGB ', 'psu', 'Corsair', 99.9, NULL),
(45, 'Corsair RM850x', 'psu', 'Corsair', 139.9, NULL),
(46, 'EVGA SuperNOVA 750 GT, 80+ GOLD 750W', 'psu', 'EVGA', 72.95, NULL),
(47, '(incl kabel) CableMod PRO ModMesh Cable Extension Kit', 'kabels', 'CableMod', 49.95, NULL),
(48, '(incl kabel) Lamptron Silver Coated PSU Extension Cable Combo Kit 1', 'kabels', 'Lamptron', 36.95, NULL),
(49, '(incl kabel) EZDIY-FAB Sleeved Cable Extension Kit', 'kabels', 'EZDIY-FAB', 29.99, NULL),
(50, '(incl kabel) geen kabel extensions', 'kabels', 'none', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruikersID`),
  ADD UNIQUE KEY `gebruikers_gebruikersID_uindex` (`gebruikersID`);

--
-- Indexes for table `medewerkers`
--
ALTER TABLE `medewerkers`
  ADD PRIMARY KEY (`medewerkID`),
  ADD UNIQUE KEY `medewerkers_medewerkID_uindex` (`medewerkID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `orders_orderID_uindex` (`orderID`);

--
-- Indexes for table `order_Products`
--
ALTER TABLE `order_Products`
  ADD KEY `table_name_orders_orderID_fk` (`ordersID`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `orders_productID_uindex` (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medewerkers`
--
ALTER TABLE `medewerkers`
  MODIFY `medewerkID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_Products`
--
ALTER TABLE `order_Products`
  ADD CONSTRAINT `table_name_orders_orderID_fk` FOREIGN KEY (`ordersID`) REFERENCES `orders` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
