-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2025 at 02:13 PM
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
-- Database: `spka`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarm`
--

CREATE TABLE `alarm` (
  `id` int NOT NULL,
  `id_sensor` int NOT NULL,
  `id_pengawai` int NOT NULL,
  `masatindakan` datetime NOT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balai`
--

CREATE TABLE `balai` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noreg` varchar(20) NOT NULL,
  `notel` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `koordinat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumAnggota` int NOT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `balai`
--

INSERT INTO `balai` (`id`, `nama`, `noreg`, `notel`, `alamat`, `koordinat`, `jumAnggota`, `tcipta`) VALUES
(1, 'Balai Selangor lama', 'BB001', '03-12345678', 'No. 1, Jalan Bomba, 50000 Kuala Lumpur', '3.1390° N, 101.6869° E', 30, '2025-02-11 08:00:10'),
(2, 'Balai Serendah', 'BB002', '03-23456789', 'No. 22, Jalan Merah, 47000 Petaling Jaya', '3.1072° N, 101.6078° E', 25, '2025-02-11 08:00:06'),
(3, 'Balai Kubu Bharu', 'BB003', '03-34567890', 'No. 33, Jalan Shah Alam, 40150 Shah Alam', '3.0738° N, 101.5183° E', 40, '2025-02-11 08:00:37'),
(4, 'Balai Selayang', 'BB004', '03-45678901', 'No. 44, Jalan Bukit Indah, 81200 Johor Bahru', '1.4927° N, 103.7414° E', 35, '2025-02-11 08:00:50'),
(5, 'Balai Batu Cave', 'BB005', '03-56789012', 'No. 55, Jalan Api, 50450 Kuala Lumpur', '3.1599° N, 101.7090° E', 50, '2025-02-11 08:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `banggunan`
--

CREATE TABLE `banggunan` (
  `id` int NOT NULL,
  `id_pelanggan` int DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `mulaLangganan` date NOT NULL,
  `tmtLangganan` date NOT NULL,
  `penyelia` varchar(100) NOT NULL,
  `notel` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `koordinat` varchar(50) NOT NULL,
  `CCTV` enum('Ya','Tidak') NOT NULL,
  `jumAnggota` int NOT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banggunan`
--

INSERT INTO `banggunan` (`id`, `id_pelanggan`, `kategori`, `mulaLangganan`, `tmtLangganan`, `penyelia`, `notel`, `alamat`, `koordinat`, `CCTV`, `jumAnggota`, `tcipta`) VALUES
(1, 1, 'Pejabat', '2023-01-01', '2023-12-31', 'Ahmad bin Ali', '03-12345678', 'No. 1, Jalan Utama, 50000 Kuala Lumpur', '3.1390° N, 101.6869° E', 'Ya', 25, '2025-02-16 14:11:02'),
(2, 3, 'Gudang', '2023-06-01', '2024-05-31', 'Siti Aminah', '03-23456789', 'No. 22, Jalan Industri, 47000 Petaling Jaya', '3.1072° N, 101.6078° E', 'Tidak', 15, '2025-02-16 14:11:05'),
(3, 2, 'Kilang', '2023-09-01', '2024-08-31', 'Ali bin Hassan', '03-34567890', 'No. 33, Jalan Kilang, 40150 Shah Alam', '3.0738° N, 101.5183° E', 'Ya', 40, '2025-02-16 14:11:04'),
(4, 5, 'Pusat Latihan', '2023-03-01', '2024-02-28', 'Fatimah binti Yusof', '03-45678901', 'No. 44, Jalan Latihan, 81200 Johor Bahru', '1.4927° N, 103.7414° E', 'Ya', 35, '2025-02-16 14:11:09'),
(5, 4, 'Kompleks Sukan', '2023-07-01', '2024-06-30', 'Zulkifli bin Ahmad', '03-56789012', 'No. 55, Jalan Sukan, 50450 Kuala Lumpur', '3.1599° N, 101.7090° E', 'Tidak', 50, '2025-02-16 14:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id` int NOT NULL,
  `id_balai` int DEFAULT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int NOT NULL,
  `syarikat` varchar(255) DEFAULT NULL,
  `no_pend` varchar(255) DEFAULT NULL,
  `notel` varchar(255) DEFAULT NULL,
  `tcipta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `syarikat`, `no_pend`, `notel`, `tcipta`) VALUES
(1, 'Syarikat A', '123456-A', '0123456789', '2025-02-16 14:10:24'),
(2, 'Syarikat B', '789012-B', '0198765432', '2025-02-16 14:10:24'),
(3, 'Syarikat C', '345678-C', '0171122334', '2025-02-16 14:10:24'),
(4, 'Syarikat D', '901234-D', '0165566778', '2025-02-16 14:10:24'),
(5, 'Syarikat E', '567890-E', '0189988776', '2025-02-16 14:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `pengesahan`
--

CREATE TABLE `pengesahan` (
  `id` int NOT NULL,
  `id_alarm` int NOT NULL,
  `id_pengesahan` int NOT NULL,
  `masa_pengesahan` datetime NOT NULL,
  `disahkan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `notel` varchar(15) DEFAULT NULL,
  `peranan` enum('Admin','Operator','Responder') NOT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `notel`, `peranan`, `tcipta`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '0112121212', 'Admin', '2025-02-11 07:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `rec_sensor`
--

CREATE TABLE `rec_sensor` (
  `id` int NOT NULL,
  `id_sensor` int NOT NULL,
  `value` int NOT NULL,
  `tcipta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id` int NOT NULL,
  `penerangan` varchar(255) NOT NULL,
  `masatindakan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `status` enum('Baru','Disahkan','Palsu','Selesai') NOT NULL,
  `tcipta` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sensor_val`
--

CREATE TABLE `sensor_val` (
  `id` int NOT NULL,
  `id_sensor` int DEFAULT NULL,
  `value` int DEFAULT NULL,
  `timestramp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarm`
--
ALTER TABLE `alarm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balai`
--
ALTER TABLE `balai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banggunan`
--
ALTER TABLE `banggunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengesahan`
--
ALTER TABLE `pengesahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rec_sensor`
--
ALTER TABLE `rec_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor_val`
--
ALTER TABLE `sensor_val`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alarm`
--
ALTER TABLE `alarm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balai`
--
ALTER TABLE `balai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banggunan`
--
ALTER TABLE `banggunan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengesahan`
--
ALTER TABLE `pengesahan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rec_sensor`
--
ALTER TABLE `rec_sensor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor_val`
--
ALTER TABLE `sensor_val`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
