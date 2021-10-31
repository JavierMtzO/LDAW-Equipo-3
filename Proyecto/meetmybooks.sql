-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2021 at 02:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `meetmybooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(10) UNSIGNED NOT NULL,
  `idPais` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `imagen` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE `favoritos` (
  `idFavorito` int(10) UNSIGNED NOT NULL,
  `idLibro` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `idLibro` int(10) UNSIGNED NOT NULL,
  `idAutor` int(10) UNSIGNED NOT NULL,
  `idGenero` int(10) UNSIGNED NOT NULL,
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `resumen` varchar(255) NOT NULL,
  `imagen` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libroAutores`
--

CREATE TABLE `libroAutores` (
  `idLibroAutores` int(10) UNSIGNED NOT NULL,
  `idLibro` int(10) UNSIGNED NOT NULL,
  `idAutor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libroCategoria`
--

CREATE TABLE `libroCategoria` (
  `idLibroCategoria` int(10) UNSIGNED NOT NULL,
  `idLibro` int(10) UNSIGNED NOT NULL,
  `idCategoria` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paisDeOrigen`
--

CREATE TABLE `paisDeOrigen` (
  `idPais` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagenBandera` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privilegio`
--

CREATE TABLE `privilegio` (
  `idPrivilegio` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `idReview` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `idLibro` int(10) UNSIGNED NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `calificacion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rolPrivilegio`
--

CREATE TABLE `rolPrivilegio` (
  `idRolPrivilegio` int(10) UNSIGNED NOT NULL,
  `idRol` int(10) UNSIGNED NOT NULL,
  `idPrivilegio` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `idRol` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`),
  ADD UNIQUE KEY `idAutor` (`idAutor`),
  ADD KEY `FK_autor_pais` (`idPais`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD UNIQUE KEY `idCategoria` (`idCategoria`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idFavorito`),
  ADD UNIQUE KEY `idFavorito` (`idFavorito`),
  ADD KEY `FK_fav_libro` (`idLibro`),
  ADD KEY `FK_fav_usuario` (`idUsuario`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`),
  ADD UNIQUE KEY `idGenero` (`idGenero`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLibro`),
  ADD UNIQUE KEY `idLibro` (`idLibro`),
  ADD KEY `FK_libro_autor` (`idAutor`),
  ADD KEY `FK_libro_genero` (`idGenero`),
  ADD KEY `FK_libro_categoria` (`idCategoria`);

--
-- Indexes for table `libroAutores`
--
ALTER TABLE `libroAutores`
  ADD PRIMARY KEY (`idLibroAutores`),
  ADD UNIQUE KEY `idLibroAutores` (`idLibroAutores`),
  ADD KEY `FK_libaut_libro` (`idLibro`),
  ADD KEY `FK_libaut_autor` (`idAutor`);

--
-- Indexes for table `libroCategoria`
--
ALTER TABLE `libroCategoria`
  ADD PRIMARY KEY (`idLibroCategoria`),
  ADD UNIQUE KEY `idLibroCategoria` (`idLibroCategoria`),
  ADD KEY `FK_libcat_libro` (`idLibro`),
  ADD KEY `FK_libcat_categoria` (`idCategoria`);

--
-- Indexes for table `paisDeOrigen`
--
ALTER TABLE `paisDeOrigen`
  ADD PRIMARY KEY (`idPais`),
  ADD UNIQUE KEY `idPais` (`idPais`);

--
-- Indexes for table `privilegio`
--
ALTER TABLE `privilegio`
  ADD PRIMARY KEY (`idPrivilegio`),
  ADD UNIQUE KEY `idPrivilegio` (`idPrivilegio`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idReview`),
  ADD UNIQUE KEY `idReview` (`idReview`),
  ADD KEY `FK_review_usuario` (`idUsuario`),
  ADD KEY `FK_review_libro` (`idLibro`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`),
  ADD UNIQUE KEY `idRol` (`idRol`);

--
-- Indexes for table `rolPrivilegio`
--
ALTER TABLE `rolPrivilegio`
  ADD PRIMARY KEY (`idRolPrivilegio`),
  ADD UNIQUE KEY `idRolPrivilegio` (`idRolPrivilegio`),
  ADD KEY `FK_rolpriv_rol` (`idRol`),
  ADD KEY `FK_rolpriv_privilegio` (`idPrivilegio`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario` (`idUsuario`),
  ADD KEY `FK_usuario_rol` (`idRol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `idFavorito` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libro`
--
ALTER TABLE `libro`
  MODIFY `idLibro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libroAutores`
--
ALTER TABLE `libroAutores`
  MODIFY `idLibroAutores` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libroCategoria`
--
ALTER TABLE `libroCategoria`
  MODIFY `idLibroCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privilegio`
--
ALTER TABLE `privilegio`
  MODIFY `idPrivilegio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `idReview` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rolPrivilegio`
--
ALTER TABLE `rolPrivilegio`
  MODIFY `idRolPrivilegio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `FK_autor_pais` FOREIGN KEY (`idPais`) REFERENCES `paisDeOrigen` (`idPais`) ON UPDATE CASCADE;

--
-- Constraints for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `FK_fav_libro` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_fav_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Constraints for table `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `FK_libro_autor` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_libro_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_libro_genero` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`) ON UPDATE CASCADE;

--
-- Constraints for table `libroAutores`
--
ALTER TABLE `libroAutores`
  ADD CONSTRAINT `FK_libaut_autor` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_libaut_libro` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`) ON UPDATE CASCADE;

--
-- Constraints for table `libroCategoria`
--
ALTER TABLE `libroCategoria`
  ADD CONSTRAINT `FK_libcat_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_libcat_libro` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_review_libro` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_review_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE;

--
-- Constraints for table `rolPrivilegio`
--
ALTER TABLE `rolPrivilegio`
  ADD CONSTRAINT `FK_rolpriv_privilegio` FOREIGN KEY (`idPrivilegio`) REFERENCES `privilegio` (`idPrivilegio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_rolpriv_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE;
