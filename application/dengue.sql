-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 11/12/2015 às 11:23
-- Versão do servidor: 5.6.27-0ubuntu1
-- Versão do PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dengue`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncia`
--

CREATE TABLE IF NOT EXISTS `denuncia` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pontoref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `denuncia`
--

INSERT INTO `denuncia` (`id`, `nome`, `telefone`, `cep`, `endereco`, `bairro`, `numero`, `complemento`, `pontoref`, `cidade`, `descricao`, `data`) VALUES
(1, 'Enzo Augusto Silva', '98679-1371', '06663000', 'Avenida Pedro Paulino', 'Conjunto Habitacional - Setor D', '22A', 'Bloco A', 'Antes do supermercado Silva', 'Itapevi', 'Caixa d''água sem tela de proteção.', '2015-12-11 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `moderador`
--

CREATE TABLE IF NOT EXISTS `moderador` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `moderador`
--

INSERT INTO `moderador` (`id`, `nome`, `email`, `cargo`) VALUES
(1, 'Enzo Augusto', 'enzovaughan@site.com', 'Coordenador de Formação Profissional');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_conexao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `noticia`
--

INSERT INTO `noticia` (`id`, `imagem`, `video`, `titulo`, `descricao`, `data`, `url`, `nome_conexao`, `status`) VALUES
(1, 'abstraction_painting_girl_paint_flowers_hand_thoughtful_rendering_93862_1366x7686.jpg', NULL, 'Jovens do ensino médio ocupam as escolas fechadas', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:26:31', 'jovens-do-ensino-m-dio-ocupam-as-escolas-fechadas', 'Caroline', 1),
(2, 'face_paint_background_92168_1366x7684.jpg', NULL, 'Dengue mata mais de mil porque é cabra homem', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:27:05', 'dengue-mata-mais-de-mil-porque-cabra-homem', 'Joilson', 1),
(3, 'line_light_pattern_stripes_colorful_88549_1366x7684.jpg', NULL, 'Lorem Ipsum Dolor', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:27:26', 'lorem-ipsum-dolor', 'Edmo', 0),
(4, 'universe_space_nebula_galaxy_102009_1366x7683.jpg', NULL, 'Guerra entre Russia e Turquia', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:27:42', 'guerra-entre-russia-e-turquia', 'Fabricio', 1),
(5, 'wolf_face_abstract_colorful_92879_1366x7685.jpg', NULL, 'Tragédia em Mariana (MG)', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:28:38', 'trag-dia-em-mariana-(mg)', 'Enzo', 1),
(6, 'wolf_face_drawing_spot_92784_1366x7683.jpg', NULL, 'Teste do portal da Dengue', 'Pellentesque vehicula, mi condimentum pretium rhoncus, felis felis \nsemper nibh, at condimentum libero felis vel erat. Aliquam mi ipsum, \nrutrum eget blandit volutpat, mollis non urna. Nulla viverra condimentum\n luctus. Nam at orci risus. Quisque tempus viverra velit, eget consequat\n dolor gravida ac. Cras tincidunt et lectus sed suscipit. Vivamus \nsuscipit a felis eu porta.\n', '2015-11-26 12:29:03', 'teste-do-portal-da-dengue', 'Diogo', 1),
(7, 'wolf_face_drawing_spot_92784_1366x768_(cópia).jpg', NULL, 'A dengue mata', 'Descrição qualquer.<br>', '2015-11-27 16:26:44', 'a-dengue-mata', 'Julio', 0),
(8, NULL, 'https://www.youtube.com/v/7L-Rwxoc2jU', 'Post bacana com vídeo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla \nid enim nec ullamcorper. Donec a finibus velit. Nulla volutpat ex eu \nscelerisque fermentum. Vivamus a sapien dui. Integer dignissim venenatis\n dui, vel accumsan diam hendrerit eu. Mauris ipsum ligula, iaculis nec \nmauris auctor, blandit lobortis felis. Praesent efficitur ultrices quam,\n eu congue urna dapibus at.', '2015-12-07 12:17:10', 'post-bacana-com-v-deo', 'Otavio', 1),
(9, NULL, 'https://www.youtube.com/v/7L-Rwxoc2jU', 'Testando upload de vídeo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet\n tempor quam, nec lacinia arcu. Ut facilisis nibh non porttitor \nconvallis. Curabitur non sem ac magna egestas elementum. Nunc odio \nnulla, pulvinar et mauris sed, aliquam elementum urna. Praesent dictum \nin orci nec rhoncus. Maecenas ut efficitur neque. Suspendisse ex purus, \nfacilisis vitae semper non, porta sit amet sapien. Aliquam mattis id \nenim ac ultrices.', '2015-12-07 12:40:46', 'testando-uploado-de-v-deo', 'Bryan', 1),
(10, NULL, 'https://www.youtube.com/v/7L-Rwxoc2jU', 'Dengue upload de vídeo sem imagem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet\n tempor quam, nec lacinia arcu. Ut facilisis nibh non porttitor \nconvallis. Curabitur non sem ac magna egestas elementum. Nunc odio \nnulla, pulvinar et mauris sed, aliquam elementum urna. Praesent dictum \nin orci nec rhoncus. Maecenas ut efficitur neque. Suspendisse ex purus, \nfacilisis vitae semper non, porta sit amet sapien. Aliquam mattis id \nenim ac ultrices.', '2015-12-07 12:45:38', 'testando-uploado-de-v-deo-sem-imagem', 'Rosângela', 1),
(11, NULL, 'https://www.youtube.com/v/oQIH4Rd3UCk', 'Teste de upload de projeto', 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo \nde texto legível de uma página quando estiver examinando sua \ndiagramação. A vantagem de usar Lorem Ipsum é que ele tem uma \ndistribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo \naqui", fazendo com que ele tenha uma aparência similar a de um texto \nlegível. Muitos softwares de publicação e editores de páginas na \ninternet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida \nbusca por ''lorem ipsum'' mostra vários websites ainda em sua fase de \nconstrução. Várias versões novas surgiram ao longo dos anos, \neventualmente por acidente, e às vezes de propósito (injetando humor, e \ncoisas do gênero).', '2015-12-07 16:27:46', 'teste-de-upload-de-projeto', 'Ricardo Silva', 1),
(12, 'php-code1.jpg', NULL, 'Teste de upload de imagem', 'Imagem legal!<br>', '2015-12-07 16:28:56', 'teste-de-upload-de-imagem', 'William', 1),
(13, NULL, '', 'Teste', 'Teste<br>', '2015-12-11 10:40:23', 'teste', 'Teste', 0),
(14, NULL, '', 'Teste', 'Teste<br>', '2015-12-11 10:41:54', 'teste', 'Teste', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `moderador_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `moderador_id`, `email`, `senha`, `ultimo_login`, `nivel`) VALUES
(1, 1, 'enzovaughan@site.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-11-19 00:00:00', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `moderador`
--
ALTER TABLE `moderador`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `moderador`
--
ALTER TABLE `moderador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
