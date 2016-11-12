-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2016 at 12:50 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramosfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `ALU_RUT` varchar(10) NOT NULL,
  `COM_CORREL` decimal(6,0) DEFAULT NULL,
  `CAR_CODIGO` varchar(20) DEFAULT NULL,
  `ALU_NOMBRES` varchar(200) DEFAULT NULL,
  `ALU_PATERNO` varchar(200) DEFAULT NULL,
  `ALU_MATERNO` varchar(200) DEFAULT NULL,
  `ALU_FONO` varchar(50) DEFAULT NULL,
  `ALU_DIRECCION` varchar(250) DEFAULT NULL,
  `ALU_SITUACION` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`ALU_RUT`, `COM_CORREL`, `CAR_CODIGO`, `ALU_NOMBRES`, `ALU_PATERNO`, `ALU_MATERNO`, `ALU_FONO`, `ALU_DIRECCION`, `ALU_SITUACION`) VALUES
('11', '5', '2927', 'pedro', 'campos', 'soto', '45654646', 'bulnes 1233', '1'),
('8283892388', '1', '2930', 'patito', 'campos', 'parra', '65756756', 'collao 123123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
  `ASI_CODIGO` varchar(15) NOT NULL,
  `DEP_CORREL` decimal(2,0) DEFAULT NULL,
  `ASI_NOMBRE` varchar(200) DEFAULT NULL,
  `ASI_CREDITOS` decimal(2,0) DEFAULT NULL,
  `ASI_CUPOS` decimal(3,0) DEFAULT NULL,
  `ASI_SEMESTRE` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`ASI_CODIGO`, `DEP_CORREL`, `ASI_NOMBRE`, `ASI_CREDITOS`, `ASI_CUPOS`, `ASI_SEMESTRE`) VALUES
('1313', '2', 'isw', '4', '10', '2'),
('2930', '1', 'bade datos', '5', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `CAR_CODIGO` varchar(20) NOT NULL,
  `FAC_CORREL` decimal(2,0) DEFAULT NULL,
  `CAR_NOMBRE` varchar(150) DEFAULT NULL,
  `CAR_VACANTES` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`CAR_CODIGO`, `FAC_CORREL`, `CAR_NOMBRE`, `CAR_VACANTES`) VALUES
('2927', '1', 'ingenieria ejecucion', '40'),
('2930', '1', 'ingnieria', '80');

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `DEP_CORREL` decimal(2,0) NOT NULL,
  `FAC_CORREL` decimal(2,0) NOT NULL,
  `DEP_NOMBRE` varchar(200) DEFAULT NULL,
  `DEP_DESCRIPCION` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`DEP_CORREL`, `FAC_CORREL`, `DEP_NOMBRE`, `DEP_DESCRIPCION`) VALUES
('1', '1', 'sistema informacion', 'dsfdf'),
('2', '2', 'matematicas', 'mate');

-- --------------------------------------------------------

--
-- Table structure for table `dicta`
--

CREATE TABLE `dicta` (
  `DIC_CORREL` decimal(4,0) NOT NULL,
  `PRO_RUT` varchar(10) NOT NULL,
  `ASI_CODIGO` varchar(15) NOT NULL,
  `DIC_SEMESTRE` decimal(1,0) DEFAULT NULL,
  `DIC_ANO` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dicta`
--

INSERT INTO `dicta` (`DIC_CORREL`, `PRO_RUT`, `ASI_CODIGO`, `DIC_SEMESTRE`, `DIC_ANO`) VALUES
('2', '1313', '1313', '2', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `FAC_CORREL` decimal(2,0) NOT NULL,
  `CAM_CORREL` decimal(2,0) DEFAULT NULL,
  `FAC_NOMBRE` varchar(250) DEFAULT NULL,
  `FAC_DESCRIPCION` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultad`
--

INSERT INTO `facultad` (`FAC_CORREL`, `CAM_CORREL`, `FAC_NOMBRE`, `FAC_DESCRIPCION`) VALUES
('1', '1', 'face', 'sadsad'),
('2', '2', 'ingenieria', 'fac ing');

-- --------------------------------------------------------

--
-- Table structure for table `inscribe`
--

CREATE TABLE `inscribe` (
  `INS_CORREL` decimal(3,0) NOT NULL,
  `ALU_RUT` varchar(10) NOT NULL,
  `ASI_CODIGO` varchar(15) NOT NULL,
  `INS_SEMESTRE` decimal(2,0) DEFAULT NULL,
  `INS_ANO` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscribe`
--

INSERT INTO `inscribe` (`INS_CORREL`, `ALU_RUT`, `ASI_CODIGO`, `INS_SEMESTRE`, `INS_ANO`) VALUES
('1', '8283892388', '2930', '2', '2016'),
('12', '11', '1313', '2', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `PRO_RUT` varchar(10) NOT NULL,
  `PRO_NOMBRES` varchar(200) DEFAULT NULL,
  `PRO_PATERNO` varchar(200) DEFAULT NULL,
  `PRO_MATERNO` varchar(200) DEFAULT NULL,
  `PRO_FONO` varchar(50) DEFAULT NULL,
  `PRO_DIRECCION` varchar(250) DEFAULT NULL,
  `PRO_EMAIL` varchar(100) DEFAULT NULL,
  `PRO_VIGENTE` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`PRO_RUT`, `PRO_NOMBRES`, `PRO_PATERNO`, `PRO_MATERNO`, `PRO_FONO`, `PRO_DIRECCION`, `PRO_EMAIL`, `PRO_VIGENTE`) VALUES
('1313', 'pedro', 'campos', 'soto', '657567', 'collao 12321', 'pedrocamos@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authKey` varchar(250) NOT NULL,
  `accessToken` varchar(250) NOT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT '0',
  `verification_code` varchar(250) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `authKey`, `accessToken`, `activate`, `verification_code`, `role`) VALUES
(5, 'shinichiro06', 'shinichiro06@gmail.com', 'fsp/f30txZdIU', '2ab7d88ba7e97fa6d200baac99d8563a850e1e0b747eaffb21c2d4a758c879eab63c2a7127d8b417456ae388feae7271de4f1dcdb029a01950e9c83f7a5a40fedb38f5ff2f4072f0404d93dcdcfc0540af07a3f7735d29ce0787345f1463a07968bd37e5', 'ae30a761b3a8bbb832c12087f748b1b9bf081beb35ae29e836f5877c7db90153b6a7644aae8a6c0d101fc456d80138e3833c9490fc4d8508e00fe6070a3e54593697aabb11e594e986e4df9d214146a5cfe795bd2b6379900290be0a1f3b2ec73e0e6794', 1, '1e30e1d1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ALU_RUT`),
  ADD KEY `FK_alumno_REFERENCE_carrera` (`CAR_CODIGO`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ASI_CODIGO`),
  ADD KEY `FK_asignatura_REFERENCE_departamento` (`DEP_CORREL`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`CAR_CODIGO`),
  ADD KEY `FK_carrera_REFERENCE_facultad` (`FAC_CORREL`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`DEP_CORREL`),
  ADD KEY `FK_departamento_REFERENCE_facultad` (`FAC_CORREL`);

--
-- Indexes for table `dicta`
--
ALTER TABLE `dicta`
  ADD PRIMARY KEY (`DIC_CORREL`),
  ADD KEY `FK_dicta_REFERENCE_profesor` (`PRO_RUT`),
  ADD KEY `FK_dicta_REFERENCE_asignatura` (`ASI_CODIGO`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`FAC_CORREL`);

--
-- Indexes for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD PRIMARY KEY (`INS_CORREL`),
  ADD KEY `FK_inscribe_REFERENCE_alumno` (`ALU_RUT`),
  ADD KEY `FK_inscribe_REFERENCE_asignatura` (`ASI_CODIGO`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`PRO_RUT`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_alumno_REFERENCE_carrera` FOREIGN KEY (`CAR_CODIGO`) REFERENCES `carrera` (`CAR_CODIGO`);

--
-- Constraints for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `FK_asignatura_REFERENCE_departamento` FOREIGN KEY (`DEP_CORREL`) REFERENCES `departamento` (`DEP_CORREL`);

--
-- Constraints for table `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `FK_carrera_REFERENCE_facultad` FOREIGN KEY (`FAC_CORREL`) REFERENCES `facultad` (`FAC_CORREL`);

--
-- Constraints for table `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `FK_departamento_REFERENCE_facultad` FOREIGN KEY (`FAC_CORREL`) REFERENCES `facultad` (`FAC_CORREL`);

--
-- Constraints for table `dicta`
--
ALTER TABLE `dicta`
  ADD CONSTRAINT `FK_dicta_REFERENCE_asignatura` FOREIGN KEY (`ASI_CODIGO`) REFERENCES `asignatura` (`ASI_CODIGO`),
  ADD CONSTRAINT `FK_dicta_REFERENCE_profesor` FOREIGN KEY (`PRO_RUT`) REFERENCES `profesor` (`PRO_RUT`);

--
-- Constraints for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `FK_inscribe_REFERENCE_alumno` FOREIGN KEY (`ALU_RUT`) REFERENCES `alumno` (`ALU_RUT`),
  ADD CONSTRAINT `FK_inscribe_REFERENCE_asignatura` FOREIGN KEY (`ASI_CODIGO`) REFERENCES `asignatura` (`ASI_CODIGO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
