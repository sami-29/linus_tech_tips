-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linus_tech_tips`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `image` varchar(1024) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(3) NOT NULL,
  `id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `name_small` varchar(64) NOT NULL,
  `name` varchar(512) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `rating` float NOT NULL,
  `votes` int(8) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_small`, `name`, `image`, `rating`, `votes`, `description`, `price`) VALUES
(1, 'Ryzen 3 3200G', 'AMD Ryzen 3 3200G 4-Core Unlocked Desktop Processor with Radeon Graphics', 'https://media.ldlc.com/r1600/ld/products/00/05/36/84/LD0005368402_2.jpg', 4.7, 7408, 'Includes advanced Radeon Vega 8 graphics, no expensive graphics card required Can deliver smooth high definition performance in the world\'s most popular games 4 processing cores, bundled with the quiet AMD Wraith stealth cooler 4.0 GHz max boost, unlocked for overclocking, 6 MB cache, DDR 2933 support For the advanced socket AM4 platform. Base clock 3.6 GHz', 299),
(2, 'Ryzen 5 3600', 'AMD Ryzen 5 3600 6-Core, 12-Thread Unlocked Desktop Processor with Wraith Stealth Cooler', 'https://media.ldlc.com/r1600/ld/products/00/05/36/84/LD0005368478_2_0005374377.jpg', 4.8, 38399, 'The world\'s most advanced processor in the desktop PC gaming segment Can deliver ultra-fast 100+ FPS performance in the world\'s most popular games6 cores and 12 processing threads bundled with the quiet AMD wraith stealth cooler max temps 95°C4 2 GHz max Boost unlocked for overclocking 35 MB of game Cache DDR4 3200 support For the advanced socket AM4 platform can support PCIe 4 0 on x570 motherboards. OS Support-Windows 10 - 64-Bit Edition, RHEL x86 64-Bit, Ubuntu x86 64-Bit. Note-Operating System (OS) support will vary by manufacturer', 231.99),
(3, 'Intel core i3 10100f', 'Intel CPU BX8070110100F Core i3-10100F / 3.6GHz / 6MB LGA1200 4C / 8T', 'https://media.ldlc.com/r1600/ld/products/00/05/67/33/LD0005673301_1_0005738184.jpg', 4.7, 9200, '10th Generation Intel Core i3 Processor, 4 Cores; 8 Threads, 4.30 GHz Max Turbo Frequency, 3.60 GHz Processor Base Frequency, 6 MB Intel Smart Cache', 233.97),
(4, 'Ryzen 7 5800X', 'AMD Ryzen 7 5800X 8-core, 16-Thread Unlocked Desktop Processor', 'https://media.ldlc.com/r1600/ld/products/00/05/74/60/LD0005746000_1.jpg', 4.8, 8065, 'AMD&#039;s fastest 8 core processor for mainstream desktop, with 16 procesing threads. OS Support-Windows 10 64-Bit Edition\r\nCan deliver elite 100-plus FPS performance in the world&#039;s most popular games\r\nCooler not included, high-performance cooler recommended\r\n4.7 GHz Max Boost, unlocked for overclocking, 36 MB of cache, DDR-3200 support\r\nFor the advanced Socket AM4 platform, can support PCIe 4.0 on X570 and B550 motherboards\r\n', 328),
(7, 'Ryzen 7 3700X', 'AMD Ryzen 7 3700X 8-Core, 16-Thread Unlocked Desktop Processor with Wraith Prism LED Cooler', 'https://media.ldlc.com/r1600/ld/products/00/05/36/85/LD0005368539_2.jpg', 4.9, 24, 'The world&#039;s most advanced processor in the desktop PC gaming segment\r\nCan deliver ultra-fast 100+ FPS performance in the world&#039;s most popular games\r\n8 Cores and 16 processing threads bundled with the AMD Wraith Prism cooler with color controlled LED support\r\n4 4 GHz max Boost unlocked for overclocking 36 MB of game Cache DDR4 3200 MHz system memory specification\r\nFor the advanced socket AM4 platform can support PCIe 4 0 on x570 motherboards. Maximum Operating Temperature (Tjmax)- 95&deg;C', 309.99),
(8, 'i9-10900K', 'Intel Core i9-10900K Desktop Processor 10 Cores up to 5.3 GHz Unlocked  LGA1200 (Intel 400 Series Chipset) 125W', 'https://media.ldlc.com/r1600/ld/products/00/05/66/85/LD0005668598_2.jpg', 5, 858, '10 Cores / 20 Threads\r\nSocket type LGA 1200\r\nUp to 5. 3 GHz unlocked\r\nCompatible with Intel 400 series chipset based motherboards\r\nIntel Turbo Boost Max Technology 3. 0 support\r\nIntel Optane Memory support', 499),
(9, 'GeForce RTX 3060', 'ZOTAC Gaming GeForce RTX 3060 Twin Edge OC 12GB GDDR6 192-bit 15 Gbps PCIE 4.0 Gaming Graphics Card.', 'https://media.ldlc.com/r1600/ld/products/00/05/78/86/LD0005788613_1.jpg', 4.5, 1028, 'NVIDIA Ampere architecture, 2nd Gen Ray Tracing Cores, 3rd Gen Tensor Cores\r\n12GB 192-bit GDDR6, 15 Gbps, PCIE 4.0; Boost Clock 1807 MHz\r\nIceStorm 2.0 Cooling, Active Fan Control, Freeze Fan Stop, Metal Backplate\r\n8K Ready, 4 Display Ready, HDCP 2.3, VR Ready\r\n3 x DisplayPort 1.4a, 1 x HDMI 2.1, DirectX 12 Ultimate, Vulkan RT API, OpenGL 4.6', 549.99),
(10, 'GeForce RTX 3090', 'ASUS ROG STRIX NVIDIA GeForce RTX 3090 Gaming Graphics Card- PCIe 4.0, 24GB GDDR6X, HDMI 2.1', 'https://media.ldlc.com/r1600/ld/products/00/05/71/99/LD0005719939_1.jpg', 4.6, 233, 'NVIDIA Ampere Streaming Multiprocessors: The building blocks for the world&rsquo;s fastest, most efficient GPU, the all-new Ampere SM brings 2X the FP32 throughput and improved power efficiency.\r\n2nd Generation RT Cores: Experience 2X the throughput of 1st Gen RT Cores, plus concurrent RT and shading for a whole new level of ray tracing performance.\r\n3rd Generation Tensor Cores: Get up to 2X the throughput with structural sparsity and advanced AI algorithms such as DLSS. Now with support for up to 8K resolution, these cores deliver a massive boost in game performance and all-new AI capabilities.\r\nAxial-Tech Fan Design has been newly tuned with a reversed central fan direction for less turbulence.\r\n2.9-slot design expands cooling surface area compared to last gen for more thermal headroom than ever before.\r\nSuper Alloy Power II includes premium alloy chokes, solid polymer capacitors, and an array of high-current power stages.\r\nGPU Tweak II provides intuitive performance tweaking, thermal controls, and system monitoring.', 1844.15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
