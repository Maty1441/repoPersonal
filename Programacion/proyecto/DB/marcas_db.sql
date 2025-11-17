-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2025 at 10:32 PM
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
-- Database: `marcas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `estadoreclamo`
--

CREATE TABLE `estadoreclamo` (
  `IDEstadoReclamo` int(11) NOT NULL,
  `Abierto` tinyint(1) DEFAULT 0,
  `EnProceso` tinyint(1) DEFAULT 0,
  `Resuelto` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `IDHorario` int(11) NOT NULL,
  `IDTipoHorario` int(11) NOT NULL,
  `Inicio` datetime NOT NULL,
  `Fin` datetime NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `DiaLaborable` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incidente`
--

CREATE TABLE `incidente` (
  `IDIncidente` int(11) NOT NULL,
  `IDMarca` int(11) NOT NULL,
  `CI` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Hora` datetime NOT NULL,
  `Justificado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `IDMarca` int(11) NOT NULL,
  `CI` int(11) NOT NULL,
  `IDHorario` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `CI` int(11) NOT NULL,
  `FechaNac` datetime NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Activo` tinyint(1) DEFAULT 0,
  `Email` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `FechaCreacion` datetime DEFAULT current_timestamp(),
  `FechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`CI`, `FechaNac`, `Nombre`, `Apellido`, `Activo`, `Email`, `Contrasena`, `FechaCreacion`, `FechaModificacion`) VALUES
(611, '2130-04-12 00:00:00', 'data', 'sad', 0, '31@123', '51', '2025-11-17 18:07:36', NULL),
(55011660, '2005-04-01 00:00:00', 'Mathias', 'Lucero', 0, 'mathiasls610@gmail.com', '1234', '2025-11-17 17:54:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reclamo`
--

CREATE TABLE `reclamo` (
  `IDReclamo` int(11) NOT NULL,
  `IDEstadoReclamo` int(11) NOT NULL,
  `CIUsuario` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `FechaCreacion` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipohorario`
--

CREATE TABLE `tipohorario` (
  `IDTipoHorario` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estadoreclamo`
--
ALTER TABLE `estadoreclamo`
  ADD PRIMARY KEY (`IDEstadoReclamo`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IDHorario`),
  ADD KEY `IDTipoHorario` (`IDTipoHorario`);

--
-- Indexes for table `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`IDIncidente`),
  ADD KEY `IDMarca` (`IDMarca`),
  ADD KEY `CI` (`CI`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`IDMarca`),
  ADD KEY `CI` (`CI`),
  ADD KEY `IDHorario` (`IDHorario`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`CI`);

--
-- Indexes for table `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`IDReclamo`),
  ADD KEY `IDEstadoReclamo` (`IDEstadoReclamo`),
  ADD KEY `CIUsuario` (`CIUsuario`);

--
-- Indexes for table `tipohorario`
--
ALTER TABLE `tipohorario`
  ADD PRIMARY KEY (`IDTipoHorario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estadoreclamo`
--
ALTER TABLE `estadoreclamo`
  MODIFY `IDEstadoReclamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `IDHorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incidente`
--
ALTER TABLE `incidente`
  MODIFY `IDIncidente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `IDMarca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `IDReclamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipohorario`
--
ALTER TABLE `tipohorario`
  MODIFY `IDTipoHorario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`IDTipoHorario`) REFERENCES `tipohorario` (`IDTipoHorario`);

--
-- Constraints for table `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `incidente_ibfk_1` FOREIGN KEY (`IDMarca`) REFERENCES `marca` (`IDMarca`),
  ADD CONSTRAINT `incidente_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`);

--
-- Constraints for table `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`),
  ADD CONSTRAINT `marca_ibfk_2` FOREIGN KEY (`IDHorario`) REFERENCES `horario` (`IDHorario`);

--
-- Constraints for table `reclamo`
--
ALTER TABLE `reclamo`
  ADD CONSTRAINT `reclamo_ibfk_1` FOREIGN KEY (`IDEstadoReclamo`) REFERENCES `estadoreclamo` (`IDEstadoReclamo`),
  ADD CONSTRAINT `reclamo_ibfk_2` FOREIGN KEY (`CIUsuario`) REFERENCES `persona` (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
