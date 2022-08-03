-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2022 at 03:26 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `highlightsids`
--

DROP TABLE IF EXISTS `highlightsids`;
CREATE TABLE IF NOT EXISTS `highlightsids` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mainHighlightRight` int(11) NOT NULL,
  `mainHighlightLeft` int(11) NOT NULL,
  `MostRead1` int(11) NOT NULL,
  `MostRead2` int(11) NOT NULL,
  `MostRead3` int(11) NOT NULL,
  `MostRead4` int(11) NOT NULL,
  `MostRead5` int(11) NOT NULL,
  `Recommended1` int(11) NOT NULL,
  `Recommended2` int(11) NOT NULL,
  `Recommended3` int(11) NOT NULL,
  `Recommended4` int(11) NOT NULL,
  `Recommended5` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlightsids`
--

INSERT INTO `highlightsids` (`id`, `mainHighlightRight`, `mainHighlightLeft`, `MostRead1`, `MostRead2`, `MostRead3`, `MostRead4`, `MostRead5`, `Recommended1`, `Recommended2`, `Recommended3`, `Recommended4`, `Recommended5`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_01_112826_create_posts_table', 2),
(3, '2022_08_01_123250_create_highlightids_table', 3),
(4, '2022_08_01_123840_create_highlightsids_table', 4),
(5, '2022_08_01_144155_create_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumb_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumb_image`, `title`, `slug`, `metadescription`, `author`, `author_id`, `category`, `text`, `created_at`, `updated_at`) VALUES
(1, 'b21b1d77ed5dc12c3b974b28598d516f.jpg', '1984 | Quais foram os tipos de torturas que Winston sofreu no MinistÃ©rio do Amor?', 'DSADAS', 'dsa', 'Leonardo O.', '6', 'Livros', '<p dir=\\\"ltr\\\">A brilhante obra 1984, escrita em 1949 por George Orwell, &eacute; um romance dist&oacute;pico que conta a hist&oacute;ria sufocante de uma sociedade que vive num sistema de opress&atilde;o e autoritarismo. Na obra, o mundo se encontra dividido por tr&ecirc;s grandes imp&eacute;rios que permanecem em guerra: Lest&aacute;sia, Eur&aacute;sia e Oce&acirc;nia.</p>\\r\\n<p dir=\\\"ltr\\\">Winston, protagonista de 1984, vive na Oce&acirc;nia, onde todas as pessoas vivem sob a vigil&acirc;ncia do Grande Irm&atilde;o. Todos os membros do Partido s&atilde;o obrigados a conviver com teletelas em locais p&uacute;blicos, no trabalho e at&eacute; mesmo na pr&oacute;pria casa. Essa vigil&acirc;ncia acontece para evitar poss&iacute;veis pensamentos-crime, o simples ato de pensar al&eacute;m do devido &eacute; o crime que engloba todos os outros na Oce&acirc;nia.</p>\\r\\n<p dir=\\\"ltr\\\">A Pol&iacute;cia das Ideias &eacute; a respons&aacute;vel por espionar e capturar os criminosos que cometem esse crime, enviando eles para o Minist&eacute;rio do Amor, onde acontecem torturas e a execu&ccedil;&atilde;o dos infratores. O Winston, por sua vez, tamb&eacute;m foi pego pela Pol&iacute;cia das Ideias. Na verdade, ele foi enganado por quem supostamente era o senhor Charrington, dono de uma loja de artefatos antigos em Londres.</p>\\r\\n<p dir=\\\"ltr\\\">Durante o tempo que Winston permaneceu na pris&atilde;o, a fim de convenc&ecirc;-lo de que o Partido estava sempre certo em suas afirma&ccedil;&otilde;es, assim como tamb&eacute;m era capaz de modificar toda e qualquer lei existente no universo, envolveram Winston em diversos tipos de torturas, desde as pr&aacute;ticas mais medievais at&eacute; &agrave;s mais modernas.</p>\\r\\n<h2 dir=\\\"ltr\\\">1- O quarto branco</h2>\\r\\n<p dir=\\\"ltr\\\">Assim que Winston chegou na sua cela, ele notou que estava numa sala sem janelas, de teto alto e paredes cobertas de azulejos brancos reluzentes. Winston n&atilde;o conseguia deduzir que horas eram naquele lugar. As luzes eram ligadas 24 horas por dia, e tamb&eacute;m n&atilde;o havia janelas no pr&eacute;dio onde ele estava, era imposs&iacute;vel determinar o quanto as horas passavam.</p>\\r\\n<p dir=\\\"ltr\\\">Todas essas caracter&iacute;sticas citadas no livro se referem ao m&eacute;todo conhecido como tortura branca que consiste no isolamento completo do indiv&iacute;duo e a priva&ccedil;&atilde;o sensorial intensa.&nbsp;</p>\\r\\n<p dir=\\\"ltr\\\"><img src=\\\"https://i.imgur.com/dcZn8xj.jpg\\\" alt=\\\"\\\" width=\\\"800\\\" height=\\\"450\\\"></p>\\r\\n<p dir=\\\"ltr\\\">O c&ocirc;modo &eacute; constru&iacute;do para que nenhum som do mundo externo seja capaz de entrar, com o intuito de que a experi&ecirc;ncia seja ainda mais silenciosa e angustiante. Al&eacute;m disso, as luzes do ambiente nunca se apagam, dando a sensa&ccedil;&atilde;o de que as horas n&atilde;o passam.</p>\\r\\n<p dir=\\\"ltr\\\">Al&eacute;m do psicol&oacute;gico ser afetado, os processos biol&oacute;gicos tamb&eacute;m s&atilde;o alterados. Como as luzes nunca se apagam, acaba sendo imposs&iacute;vel distinguir o dia da noite, prejudicando o rel&oacute;gio biol&oacute;gico. Portanto, desregular esse ciclo desordena todo o organismo da pessoa que passa por esta experi&ecirc;ncia.</p>\\r\\n<h2 dir=\\\"ltr\\\">2- Tortura psicol&oacute;gica</h2>\\r\\n<p dir=\\\"ltr\\\">Al&eacute;m das agress&otilde;es f&iacute;sicas envolvendo diversos guardas de uma vez, Winston tamb&eacute;m sofria tortura psicol&oacute;gica pelos interrogadores sendo obrigado a passar por in&uacute;meras humilha&ccedil;&otilde;es sob a amea&ccedil;a de novas agress&otilde;es. Durante as suas interroga&ccedil;&otilde;es, a principal forma de tortura psicol&oacute;gica que Winston sofreu foi a distor&ccedil;&atilde;o da realidade onde muitas vezes ele chorava de vergonha e exaust&atilde;o.</p>\\r\\n<p dir=\\\"ltr\\\">A distor&ccedil;&atilde;o da realidade, tamb&eacute;m conhecida como gaslighting, &eacute; a t&aacute;tica que distorce a palavra da v&iacute;tima para que ela fique confusa em meio &agrave; pr&oacute;pria realidade. Aos poucos, quem sofre a viol&ecirc;ncia passa a duvidar da sua capacidade de interpreta&ccedil;&atilde;o dos fatos e passa a crer no que diz o abusador.</p>\\r\\n<p dir=\\\"ltr\\\">O agressor tamb&eacute;m pode distorcer as atitudes e as palavras da v&iacute;tima diante outras pessoas, o que o consolida como o detentor da verdade e da lucidez.</p>\\r\\n<h2 dir=\\\"ltr\\\">3- Torturas ficcionais</h2>\\r\\n<p dir=\\\"ltr\\\">Orwell n&atilde;o retratou somente t&eacute;cnicas existentes em sua obra, assim como ele tamb&eacute;m descreveu m&eacute;todos que o Partido era capaz de criar com todo o seu poder sobre a natureza.</p>\\r\\n<p dir=\\\"ltr\\\">Por exemplo, uma das formas de tortura citada no livro era um medidor de 0 a 100 que aumentava a intensidade da dor na v&iacute;tima respectivamente ao seu valor. A v&iacute;tima sempre estava deitada para baixo com todos os seus pontos vitais amarrados tornando imposs&iacute;vel se proteger da dor e saber o que estava acontecendo com o seu corpo.</p>\\r\\n<p dir=\\\"ltr\\\">Outro m&eacute;todo envolvia um dispositivo pesado que era acoplado atr&aacute;s da cabe&ccedil;a da v&iacute;tima com duas almofadas macias e &uacute;midas sendo fixadas nas laterais da cabe&ccedil;a. Em seguida, a v&iacute;tima sentia a sensa&ccedil;&atilde;o de uma explos&atilde;o, mesmo n&atilde;o ocorrendo de fato. Ainda assim, a pessoa ficava atordoada e sem no&ccedil;&atilde;o de onde e com quem estava, sentindo como se alguma parte do seu c&eacute;rebro tivesse sido arrancada. E de fato, a parte do c&eacute;rebro era apagada e dava mais facilidade para os interrogadores fazerem a lavagem cerebral.</p>\\r\\n<h2 dir=\\\"ltr\\\">Quem foi George Orwell?</h2>\\r\\n<p dir=\\\"ltr\\\">George Orwell (pseud&ocirc;nimo de Eric Arthur Blair) nasceu em 25 de junho de 1903, em Motihari, &Iacute;ndia. Por&eacute;m, Orwell se mudou para a Inglaterra com apenas quatro meses de vida e teve uma educa&ccedil;&atilde;o inglesa.</p>\\r\\n<p dir=\\\"ltr\\\">Em 1922, come&ccedil;ou a trabalhar na Pol&iacute;cia Imperial Indiana, na Birm&acirc;nia. Em 1927, ele abandonou o emprego para se dedicar &agrave; literatura. Ent&atilde;o, no ano seguinte, foi para Paris, onde viveu cerca de um ano e meio.</p>\\r\\n<p dir=\\\"ltr\\\">Em 1939, o escritor teve problemas no pulm&atilde;o e precisou se tratar. Por causa de seu problema de sa&uacute;de, foi rejeitado pelo servi&ccedil;o militar e n&atilde;o lutou na Segunda Guerra Mundial. Assim, de 1941 a 1943, ele foi um dos respons&aacute;veis pelos programas radiof&ocirc;nicos do Servi&ccedil;o Indiano da BBC e depois se tornou editor do jornal socialista Tribune.</p>\\r\\n<p dir=\\\"ltr\\\">Em 1945, com a publica&ccedil;&atilde;o do livro A revolu&ccedil;&atilde;o dos bichos, George Orwell conseguiu fazer sucesso como escritor. Por&eacute;m, pouco tempo depois, em 1949, esse livro foi ofuscado pela obra mais famosa de Orwell, o romance 1984. No entanto, o autor n&atilde;o p&ocirc;de presenciar o grande sucesso do seu livro nos anos que seguiram &agrave; sua publica&ccedil;&atilde;o, pois, devido &agrave; tuberculose, o romancista morreu em 21 de janeiro de 1950, em Londres.</p>', '2022-08-01 12:40:52', '2022-08-01 12:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choosed_name` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAuthor` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `choosed_name`, `email`, `password`, `profile_picture`, `isAuthor`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo Oliveira', 'Leonardo O.', 'oleonardo78@gmail.com', 'leonardo', 'eeuuu.jpg', 1, NULL, NULL),
(3, 'Geovanna Sthefany', 'Geovanna', 'geovann.sthefany11@gmail.com', '123456789', 'cb67037fedc21955889fc0cc63dac103.jpg', 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
