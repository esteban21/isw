-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2016 at 09:30 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramos`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
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



CREATE TABLE `asignatura` (
  `ASI_CODIGO` varchar(15) NOT NULL,
  `DEP_CORREL` decimal(2,0) DEFAULT NULL,
  `ASI_NOMBRE` varchar(200) DEFAULT NULL,
  `ASI_CREDITOS` decimal(2,0) DEFAULT NULL,
  `ASI_CUPOS` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `carrera` (
  `CAR_CODIGO` varchar(20) NOT NULL,
  `FAC_CORREL` decimal(2,0) DEFAULT NULL,
  `CAR_NOMBRE` varchar(150) DEFAULT NULL,
  `CAR_VACANTES` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `departamento` (
  `DEP_CORREL` decimal(2,0) NOT NULL,
  `FAC_CORREL` decimal(2,0) NOT NULL,
  `DEP_NOMBRE` varchar(200) DEFAULT NULL,
  `DEP_DESCRIPCION` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `region`
--


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
(5, 'shinichiro06', 'shinichiro06@gmail.com', 'fsp/f30txZdIU', '2ab7d88ba7e97fa6d200baac99d8563a850e1e0b747eaffb21c2d4a758c879eab63c2a7127d8b417456ae388feae7271de4f1dcdb029a01950e9c83f7a5a40fedb38f5ff2f4072f0404d93dcdcfc0540af07a3f7735d29ce0787345f1463a07968bd37e5', 'ae30a761b3a8bbb832c12087f748b1b9bf081beb35ae29e836f5877c7db90153b6a7644aae8a6c0d101fc456d80138e3833c9490fc4d8508e00fe6070a3e54593697aabb11e594e986e4df9d214146a5cfe795bd2b6379900290be0a1f3b2ec73e0e6794', 1, '1e30e1d1', 2),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`

-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ALU_RUT`);

--
-- Indexes for table `asignatura`

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ASI_CODIGO`);

--
-- Indexes for table `campus`
--

-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`CAR_CODIGO`);

--
-- Indexes for table `comuna`
--

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`DEP_CORREL`);

--
-- Indexes for table `dicta`
--
ALTER TABLE `dicta`
  ADD PRIMARY KEY (`DIC_CORREL`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`FAC_CORREL`);

--
-- Indexes for table `inscribe`
--
ALTER TABLE `inscribe`
  ADD PRIMARY KEY (`INS_CORREL`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`PRO_RUT`);

--
-- Indexes for table `region`
--

--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--

--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `usuarios`
--




alter table alumno
   add constraint FK_alumno_REFERENCE_carrera foreign key (CAR_CODIGO)
      references carrera (CAR_CODIGO);

alter table asignatura
   add constraint FK_asignatura_REFERENCE_departamento foreign key (DEP_CORREL)
      references departamento (DEP_CORREL);



alter table carrera
   add constraint FK_carrera_REFERENCE_facultad foreign key (FAC_CORREL)
      references facultad (FAC_CORREL);


alter table departamento
   add constraint FK_departamento_REFERENCE_facultad foreign key (FAC_CORREL)
      references facultad (FAC_CORREL);

alter table dicta
   add constraint FK_dicta_REFERENCE_profesor foreign key (PRO_RUT)
      references profesor (PRO_RUT);

alter table dicta
   add constraint FK_dicta_REFERENCE_asignatura foreign key (ASI_CODIGO)
      references asignatura (ASI_CODIGO);


alter table inscribe
   add constraint FK_inscribe_REFERENCE_alumno foreign key (ALU_RUT)
      references alumno (ALU_RUT);

alter table inscribe
   add constraint FK_inscribe_REFERENCE_asignatura foreign key (ASI_CODIGO)
      references asignatura (ASI_CODIGO);
