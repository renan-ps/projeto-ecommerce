-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2018 às 23:22
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
CREATE TABLE IF NOT EXISTS "administradores" ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS "categorias" ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nomeCategoria`, `slug`) VALUES
(1, 'Smartphones', 'smartphones'),
(2, 'Celulares', 'celulares'),
(3, 'Smartwatchs', 'smartwatch'),
(4, 'Acessórios', 'acessorios-cel'),
(5, 'Notebooks', 'notebooks'),
(6, 'Computadores', 'computadores'),
(7, 'All in Ones', 'all-in-ones'),
(8, 'Multifuncionais', 'multifuncionais'),
(9, 'Monitores', 'monitores'),
(10, 'HDs Externos', 'hds-externos'),
(11, 'Pen Drives', 'pen-drives'),
(12, 'Projetores', 'projetores'),
(13, 'Smart TV', 'smart-tvs'),
(15, 'Ultra HD 4K', 'ultra-hd-4k'),
(16, 'DVDs e Blu-rays', 'dvds-e-blu-rays'),
(17, 'Geladeiras e refrigeradores', 'geladeiras-e-refrigeradores'),
(18, 'Lavadoras de Roupas', 'lavadoras-de-roupas'),
(19, 'Fogões', 'fogoes'),
(20, 'Coifas', 'coifas'),
(22, 'Lava-louças', 'lava-loucas'),
(23, 'Fritadeiras', 'fritadeiras'),
(24, 'Fornos Elétricos', 'fornos-eletricos'),
(25, 'Panelas Elétricas', 'panelas-eletricas'),
(26, 'Cafeteiras', 'cafeteiras'),
(27, 'Ferros de Passar', 'ferros-de-passar'),
(28, 'Batedeiras', 'batedeiras'),
(29, 'Escritório', 'escritorio'),
(30, 'Cozinha', 'cozinha'),
(31, 'Dormitório', 'dormitorio'),
(32, 'Colchões', 'colchoes'),
(33, 'Sala de Jantar', 'sala-de-jantar'),
(34, 'Sala de Estar', 'sala-de-estar'),
(35, 'Banheiro', 'banheiro'),
(36, 'Área de Serviço', 'area-de-servico'),
(37, 'Decoração', 'decoracao'),
(38, 'Filmes', 'filmes'),
(39, 'Games', 'games'),
(40, 'Livros', 'livros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS "clientes" ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nomeCliente`, `emailCliente`, `senhaCliente`, `cpf`, `telefone`, `endereco`, `cidade`, `estado`, `obs`) VALUES
(1, 'Renan Pereira Soares', 'renansoaresinfo@gmail.com', '123456', '160.470.627-92', '(21) 97699-0053', 'Rua A', 'Rio de Janeiro', 'RJ', ''),
(2, 'Rodrigo', 'rodrigo@gmail.com', '654321', '111.111.111-11', '(21) 55555-5555', 'Rua B', 'Rio de Janeiro', 'RJ', ''),
(4, 'Gustavo', 'gustavo@gmail.com', 'poiuy', '555.555.555-55', '(22) 22222-2222', 'Rua M', 'Rio de Janeiro', 'AP', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `idCategoria`, `nomeProduto`, `preco`, `estoque`, `imagem`, `descricao`, `obs`) VALUES
(1, 1, 'Motorola Moto Z2 Play Ouro', 1299.99, 10, 'imagens/produtos/MotorolaMotoZ2Play.jpg', 'Ouro com 64GB, Tela de 5.5, Dual Chip, Câmera 12MP, Android 7.1, Processador Octa-Core e 4GB de RAM', NULL),
(2, 3, 'Smartwatch Bluetooth', 99.99, 10, 'imagens/produtos/SmartwatchBluetooth.jpg', 'Compativel com Android, touch, com pedometro e contador de calorias U8 Preto', NULL),
(3, 5, 'Notebook Gamer Acer Aspire Nitro', 4299, 10, 'imagens/produtos/NotebookGamerAcerAspireNitro.jpg', 'Intel Core i7-7700HQ 16GB 1TB NVIDIA GeForce GTX 1050Ti Tela IPS FullHD 15,6 Windows 10 - Preto', NULL),
(4, 2, 'Celular Lg G360', 199.99, 10, 'imagens/produtos/CelularLgG360.jpg', 'Dual Sim Tela 3.0\" Câmera, Rádio Fm Preto', NULL),
(5, 4, 'Cartão De Memória 32Gb', 44.9, 10, 'imagens/produtos/CartãoDeMemória32Gb.jpg', 'Cartão De Memória 32Gb Micro Sd + Adaptador SD SanDisk', NULL),
(6, 1, 'iPhone X Cinza Espacial', 6499.99, 20, 'imagens/produtos/iPhoneXCinzaEspacial.jpg', '256GB Tela 5.8\" IOS 11 4G Wi-Fi Câmera 12MP - Apple', NULL),
(7, 6, 'Computador Intel Core i5', 1579.9, 10, 'imagens/produtos/ComputadorIntelCorei5.jpg', '8GB DDR3, 1TB, HDMI, áudio 5.1, Monitor LED 19,5 EasyPC Standard', NULL),
(8, 7, 'All in One Dell Inspiron iOne-3477-M30', 3999.8, 5, 'imagens/produtos/AllinOneDellInspironiOne-3477-M30.jpg', '7ª Geração Intel Core i5 8GB 1TB 23.8\" Full HD Touch W10', NULL),
(9, 8, 'Multifuncional Epson L395', 845, 6, 'imagens/produtos/MultifuncionalEpsonL395.jpg', 'Imprime até 7.500 páginas coloridas e 4.500 páginas em preto. Uma garrafa de tinta EcoTank equivale a 35 cartuchos.', NULL),
(10, 9, 'Monitor LED 23\" LG', 589.5, 20, 'imagens/produtos/MonitorLED23LG.jpg', 'Tela LED de 23 polegadas, brilho 250 cd/m2, contraste 5.000.000:1', NULL),
(11, 10, 'HD Externo Seagate 1TB', 253.75, 50, 'imagens/produtos/HDExternoSeagate1TB.png', 'Velocidade de transferência de dados de 4,8GB/S, interface USB 3.0', NULL),
(12, 11, 'Pen Drive 32GB', 39.9, 35, 'imagens/produtos/PenDrive32GB.jpg', 'Pen Drive 32GB - Sandisk - Cruzer Blade', NULL),
(13, 12, 'Projetor Epson Powerlite S31+', 1859.99, 5, 'imagens/produtos/ProjetorEpsonPowerlite.jpg', 'Projetor Epson Powerlite S31+ 3200A Lumens e Svga 800x600', NULL),
(14, 13, 'Smart TV LED 32\" Samsung', 999.99, 50, 'imagens/produtos/SmartTVLED32Samsung.jpg', 'Smart TV LED 32\" Samsung 32J4300 HD com Conversor Digital 2 HDMI 1 USB Wi-Fi 120Hz', NULL),
(15, 15, 'Smart TV LED 55\" Samsung', 3499.99, 10, 'imagens/produtos/SmartTVLED55Samsung.jpg', 'Smart TV LED 55\" Samsung 55MU6100 UHD 4K HDR Premium com Conversor Digital 3 HDMI 2 USB 120Hz', NULL),
(16, 16, 'DVD Blu-Ray Bp450', 449.9, 50, 'imagens/produtos/DVDBlu-RayBp450.jpg', 'LG - 3D Usb Full Hd Up-scaling', NULL),
(17, 17, 'Geladeira / Refrigerador Electrolux', 1899.9, 30, 'imagens/produtos/GeladeiraRefrigeradorElectrolux.jpg', 'A Geladeira Electrolux Frost Free DW42X 380L em inox é o refrigerador que você precisava para manter seus alimentos conservados e ideais para utilização.', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
