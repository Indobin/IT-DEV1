-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2024 at 01:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_dev1`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `stock` int NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `stock`, `img`) VALUES
(3, 'PC Gaming Cyber', 'elektronik', 'CyberPowerPC Gamer Supreme SLC10200CPGV8 Gaming Desktop Computer - Intel Core i9 13th Gen i9-13900KF Octa-core (8 Core) 3 GHz - 32 GB RAM DDR5 SDRAM - 2 TB M.2 PCI Express NVMe 4.0 SSD - Tower - Bl', '7500000', 5, '66ea5624ddea0.png'),
(4, 'PC Gaming Lokotret', 'elektronik', 'CybertronPC TGMSETGXH7900BR CLX SET Gaming PC-Intel Core i7-8700 3.2GHz, 16GB DDR4, GeForce GTX 1060, 120GB SSD, 1TB HDD, Win 10 Homp', '13500000', 7, '66ec1efa1669b.png'),
(36, 'Dyson V11 Cordless Vacuum Cleaner', 'Electronics', 'The Dyson V11 is a powerful, cordless vacuum cleaner designed to clean every corner of your home. With up to 60 minutes of run time and intelligent sensor technology, it adjusts suction power based on the floor type, ensuring optimal cleaning. Its advanced filtration captures 99.99% of particles as small as 0.3 microns, providing a cleaner, healthier living environment', '650000', 6, '66ec27aca41bc.png'),
(37, 'Levi’s 501 Original Fit Jeans', 'Clothing', 'Levi\'s 501 Original Fit Jeans are an iconic staple of any wardrobe. These timeless jeans offer a straight fit through the hips and thighs, made from durable cotton denim for all-day comfort. With a classic button fly and five-pocket styling, these jeans are perfect for casual and smart-casual occasions alike.', '500000', 9, '66ec27d1f23d4.png'),
(38, 'Samsung Galaxy S23', 'Electronics', 'The Samsung Galaxy S23 offers a stunning 6.8-inch AMOLED display, powered by the latest Snapdragon processor for ultra-fast performance. It features a 108MP camera for crystal-clear photos, 5G connectivity, and a 5000mAh battery to keep you connected throughout the day. With 256GB of storage, it’s perfect for those who need a high-performing smartphone for work and play.', '8000000', 18, '66ec27ff75f28.png'),
(39, 'Organic Quinoa - 1kg Bag', 'Groceries', 'This Organic Quinoa is a nutrient-rich superfood, perfect for a healthy and balanced diet. Sourced from sustainable farms, it’s naturally gluten-free, high in protein, and a great alternative to rice or pasta. Ideal for salads, soups, or as a side dish, our quinoa is pre-washed and easy to cook, making it a convenient choice for health-conscious consumers.', '70000', 56, '66ec28f208bb8.png'),
(40, 'Sony WH-1000XM5 Noise Cancelling Headphones', 'Electronics', 'The Sony WH-1000XM5 offers industry-leading noise cancellation with superior sound quality. Designed for comfort during long listening sessions, it features up to 30 hours of battery life, touch controls, and a premium finish. With voice assistant integration, you can control your music, manage calls, and access information hands-free, making it perfect for professionals and travelers alike.', '760000', 54, '66ec29293ea66.png'),
(41, 'KitchenAid Artisan Stand Mixer - 5 Quart', 'Appliances', 'The KitchenAid Artisan Stand Mixer is a kitchen essential for home bakers and cooks. With its 10-speed control and powerful 325-watt motor, it can handle everything from whipping cream to kneading dough. It comes with a 5-quart stainless steel bowl and a variety of attachments to make cooking and baking easier. Available in multiple colors to suit any kitchen decor.', '6000000', 45, '66ec294a5cebe.png'),
(42, 'Nike Air Max 270 React', 'Clothing', 'Nike Air Max 270 React sneakers offer a blend of lightweight comfort and bold style. Featuring a responsive foam midsole and Nike’s iconic Air Max cushioning, these shoes provide all-day support for both casual wear and athletic activities. With vibrant colorways and durable materials, they are the perfect balance of fashion and function.', '6000000', 48, '66ec297963bdb.png'),
(43, 'Bulk Paper Towels - 12-Pack Case', 'Groceries', 'This bulk pack of paper towels offers high absorbency and strength, perfect for businesses, restaurants, or large households. Each roll contains 200 sheets, making it ideal for cleaning up spills, wiping surfaces, and general use. With 12 rolls in a case, this wholesale option is cost-effective and eco-friendly, made from recycled materials without compromising quality.', '50000', 44, '66ec29e5f1bd3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
