-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2018 às 02:14
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websters`
--
CREATE DATABASE IF NOT EXISTS `websters` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE websters;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS "administradores" (
"idAdministrador" int(11) NOT NULL,
  "nomeAdministrador" varchar(100) NOT NULL,
  "senhaAdministrador" varchar(255) NOT NULL
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS "categorias" (
"idCategoria" int(11) NOT NULL,
  "nomeCategoria" varchar(40) NOT NULL
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS "clientes" (
"idCliente" int(11) NOT NULL,
  "nomeCliente" varchar(100) NOT NULL,
  "emailCliente" varchar(70) NOT NULL,
  "senhaCliente" varchar(255) NOT NULL,
  "cpf" varchar(14) NOT NULL,
  "telefone" varchar(14) NOT NULL,
  "endereco" varchar(255) NOT NULL,
  "cidade" varchar(50) NOT NULL,
  "estado" varchar(2) NOT NULL,
  "obs" varchar(255) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" (
"idProduto" int(11) NOT NULL,
  "idCategoria" int(11) NOT NULL,
  "nomeProduto" varchar(50) NOT NULL,
  "preco" decimal(4,2) NOT NULL,
  "estoque" int(11) NOT NULL,
  "imagem" varchar(255) NOT NULL,
  "descricao" varchar(255) NOT NULL,
  "obs" varchar(255) DEFAULT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
 ADD PRIMARY KEY ("idAdministrador");

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY ("idCategoria");

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY ("idCliente");

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY ("idProduto"), ADD KEY "idCategoria" ("idCategoria");

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
MODIFY "idAdministrador" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY "idCategoria" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY "idCliente" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY "idProduto" int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
ADD CONSTRAINT "produtos_ibfk_1" FOREIGN KEY ("idCategoria") REFERENCES "categorias" ("idCategoria");
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
