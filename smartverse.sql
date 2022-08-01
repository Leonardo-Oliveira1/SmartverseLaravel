-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2022 at 09:46 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `highlightsids` (
  `id` int NOT NULL,
  `mainHighlightRight` int NOT NULL,
  `mainHighlightLeft` int NOT NULL,
  `MostRead1` int NOT NULL,
  `MostRead2` int NOT NULL,
  `MostRead3` int NOT NULL,
  `MostRead4` int NOT NULL,
  `MostRead5` int NOT NULL,
  `Recommended1` int NOT NULL,
  `Recommended2` int NOT NULL,
  `Recommended3` int NOT NULL,
  `Recommended4` int NOT NULL,
  `Recommended5` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `highlightsids`
--

INSERT INTO `highlightsids` (`id`, `mainHighlightRight`, `mainHighlightLeft`, `MostRead1`, `MostRead2`, `MostRead3`, `MostRead4`, `MostRead5`, `Recommended1`, `Recommended2`, `Recommended3`, `Recommended4`, `Recommended5`) VALUES
(1, 297, 298, 297, 298, 297, 297, 298, 297, 298, 298, 298, 298);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `thumb_image` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `title` char(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `metadescription` varchar(168) NOT NULL,
  `author` char(16) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `author_id` int NOT NULL,
  `category` char(16) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `text` mediumtext CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `publication_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumb_image`, `title`, `metadescription`, `author`, `author_id`, `category`, `text`, `publication_date`, `post_link`) VALUES
(285, '0409896e4b5202923579ff03c2e5d748.jpg', 'ClÃ¡ssicos da literatura: 5 obras que vocÃª precisa â€” conhecer', '', 'Leonardo O.', 6, 'Livros', '<div class=\"paidcontent-wrapper\">\r\n<p>Est&aacute; em busca da sua pr&oacute;xima leitura? Ent&atilde;o n&oacute;s podemos te ajudar nessa miss&atilde;o! Preparamos uma lista com 5 cl&aacute;ssicos da literatura que n&atilde;o podem faltar na sua estante. D&aacute; uma olhada e n&atilde;o deixe de garantir os seus t&iacute;tulos favoritos:&nbsp;</p>\r\n<p><strong>1. Flores Para Algernon:&nbsp;<a href=\"https://amzn.to/38sh5jz\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/38sh5jz</a></strong></p>\r\n<p>Charlie sofre as consequ&ecirc;ncias de uma grave defici&ecirc;ncia intelectual. Preso em um &ldquo;mundo&rdquo; particular, a vida dele muda completamente quando ele participa de uma cirurgia revolucion&aacute;ria que aumenta o seu QI. Se tornando super inteligente, o rapaz tamb&eacute;m vira testemunha de uma nova realidade &aacute;cida, crua e problem&aacute;tica.</p>\r\n</div>\r\n<figure class=\"image\"><img src=\"https://rollingstone.uol.com.br/media/uploads/1liclai9.jpg\" alt=\"Cl&aacute;ssicos da literatura: 5 obras que voc&ecirc; precisa conhecer\" loading=\"lazy\">\r\n<figcaption spellcheck=\"false\" data-gramm=\"false\" data-lt-tmp-id=\"lt-74824\">\r\n<div class=\"paidcontent-wrapper\">Cr&eacute;dito: Reprodu&ccedil;&atilde;o/Amazon</div>\r\n</figcaption>\r\n</figure>\r\n<div class=\"paidcontent-wrapper\">\r\n<p>&nbsp;</p>\r\n<p><strong>2. Admir&aacute;vel mundo novo:&nbsp;<a href=\"https://amzn.to/39tHJZc\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/39tHJZc</a></strong></p>\r\n<p>Este cl&aacute;ssico moderno de Aldous Leonard Huxley apresenta uma sociedade inteiramente organizada segundo princ&iacute;pios cient&iacute;ficos, a obra conta a hist&oacute;ria de um mundo onde as pessoas s&atilde;o programadas em laborat&oacute;rio e adestradas para cumprir seu papel.&nbsp;</p>\r\n</div>\r\n<figure class=\"image\"><img src=\"https://rollingstone.uol.com.br/media/uploads/2liclai9.jpg\" alt=\"Cl&aacute;ssicos da literatura: 5 obras que voc&ecirc; precisa conhecer\" loading=\"lazy\">\r\n<figcaption spellcheck=\"false\" data-gramm=\"false\" data-lt-tmp-id=\"lt-423934\">\r\n<div class=\"paidcontent-wrapper\">Cr&eacute;dito: Reprodu&ccedil;&atilde;o/Amazon</div>\r\n</figcaption>\r\n</figure>\r\n<div class=\"paidcontent-wrapper\">\r\n<p>&nbsp;</p>\r\n<p><strong>3. Orgulho e preconceito:&nbsp;<a href=\"https://amzn.to/3sFUBSX\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/3sFUBSX</a></strong></p>\r\n<p>Considerado o livro de maior sucesso da escritora inglesa Jane Austen, &ldquo;Orgulho e Preconceito&rdquo; conta a hist&oacute;ria de Elizabeth Bennet e seu pretendente aristocr&aacute;tico, o sr. Darcy. Com personagens marcantes, a obra une com&eacute;dia e seriedade na medida certa.&nbsp;</p>\r\n</div>\r\n<figure class=\"image\"><img src=\"https://rollingstone.uol.com.br/media/uploads/3liclai9.jpg\" alt=\"Cl&aacute;ssicos da literatura: 5 obras que voc&ecirc; precisa conhecer\" loading=\"lazy\">\r\n<figcaption spellcheck=\"false\" data-gramm=\"false\" data-lt-tmp-id=\"lt-722652\">\r\n<div class=\"paidcontent-wrapper\">Cr&eacute;dito: Reprodu&ccedil;&atilde;o/Amazon</div>\r\n</figcaption>\r\n</figure>\r\n<div class=\"paidcontent-wrapper\">\r\n<p>&nbsp;</p>\r\n<p><strong>4. Os miser&aacute;veis:&nbsp;<a href=\"https://amzn.to/3MAsGeU\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/3MAsGeU</a></strong></p>\r\n<p>Escrito por Victor Hugo, este cl&aacute;ssico da literatura mundial conta a emocionante hist&oacute;ria de Jean Valjean, um homem que &eacute; condenado a 19 anos de pris&atilde;o ap&oacute;s roubar um p&atilde;o. Com uma narrativa envolvente, a obra promete prender a aten&ccedil;&atilde;o do leitor desde a primeira p&aacute;gina.&nbsp;</p>\r\n</div>\r\n<figure class=\"image\"><img src=\"https://rollingstone.uol.com.br/media/uploads/4liclai9.jpg\" alt=\"Cl&aacute;ssicos da literatura: 5 obras que voc&ecirc; precisa conhecer\" loading=\"lazy\">\r\n<figcaption spellcheck=\"false\" data-gramm=\"false\" data-lt-tmp-id=\"lt-660557\">\r\n<div class=\"paidcontent-wrapper\">Cr&eacute;dito: Reprodu&ccedil;&atilde;o/Amazon</div>\r\n</figcaption>\r\n</figure>\r\n<div class=\"paidcontent-wrapper\">\r\n<p>&nbsp;</p>\r\n<p><strong>5. O grande Gatsby - Edi&ccedil;&atilde;o de Luxo:&nbsp;<a href=\"https://amzn.to/3yDZPT3\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/3yDZPT3</a></strong></p>\r\n<p>Considerado a obra-prima de F. Scott Fitzgerald, a obra retrata a alta sociedade de Nova York na d&eacute;cada de 1920, com sua riqueza, festas luxuosas e muito jazz, tudo isso enquanto apresenta Jay Gatsby ao leitor, um homem rico, misterioso e apaixonado.&nbsp;&nbsp;</p>\r\n</div>\r\n<figure class=\"image\"><img src=\"https://rollingstone.uol.com.br/media/uploads/5liclai9.jpg\" alt=\"Cl&aacute;ssicos da literatura: 5 obras que voc&ecirc; precisa conhecer\" loading=\"lazy\">\r\n<figcaption spellcheck=\"false\" data-gramm=\"false\" data-lt-tmp-id=\"lt-72769\">\r\n<div class=\"paidcontent-wrapper\">Cr&eacute;dito: Reprodu&ccedil;&atilde;o/Amazon</div>\r\n</figcaption>\r\n</figure>\r\n<div class=\"paidcontent-wrapper\">\r\n<p>&nbsp;</p>\r\n<p>Vale lembrar que os pre&ccedil;os e a quantidade dispon&iacute;vel dos produtos condizem com os da data de publica&ccedil;&atilde;o deste post. Al&eacute;m disso, assinantes&nbsp;<a href=\"https://amzn.to/3d5KDAX\" target=\"_blank\" rel=\"noopener sponsored\">Amazon Prime</a>&nbsp;recebem os produtos com mais rapidez e frete gr&aacute;tis, e a Rolling Stone pode ganhar uma parcela das vendas ou outro tipo de compensa&ccedil;&atilde;o pelos links nesta p&aacute;gina.</p>\r\n<p>Aproveite Frete GR&Aacute;TIS, r&aacute;pido e ilimitado com Amazon Prime:&nbsp;<a href=\"https://amzn.to/3d5KDAX\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/3d5KDAX</a></p>\r\n<p>Amazon Music Unlimited &ndash; Experimente 30 dias gr&aacute;tis:&nbsp;<a href=\"https://amzn.to/2UbsHfD\" target=\"_blank\" rel=\"noopener sponsored\">https://amzn.to/2UbsHfD</a></p>\r\n</div>', '2022-05-22 08:35:39', 'posts/livros/classicos-da-literatura-5-obras-que-voce-precisa-----conhecer.php'),
(297, 'b21b1d77ed5dc12c3b974b28598d516f.jpg', '1984 | Quais foram os tipos de torturas que Winston sofreu no MinistÃ©rio do Amor?', '', 'Leonardo O.', 6, 'Livros', '<p dir=\"ltr\">A brilhante obra 1984, escrita em 1949 por George Orwell, &eacute; um romance dist&oacute;pico que conta a hist&oacute;ria sufocante de uma sociedade que vive num sistema de opress&atilde;o e autoritarismo. Na obra, o mundo se encontra dividido por tr&ecirc;s grandes imp&eacute;rios que permanecem em guerra: Lest&aacute;sia, Eur&aacute;sia e Oce&acirc;nia.</p>\r\n<p dir=\"ltr\">Winston, protagonista de 1984, vive na Oce&acirc;nia, onde todas as pessoas vivem sob a vigil&acirc;ncia do Grande Irm&atilde;o. Todos os membros do Partido s&atilde;o obrigados a conviver com teletelas em locais p&uacute;blicos, no trabalho e at&eacute; mesmo na pr&oacute;pria casa. Essa vigil&acirc;ncia acontece para evitar poss&iacute;veis pensamentos-crime, o simples ato de pensar al&eacute;m do devido &eacute; o crime que engloba todos os outros na Oce&acirc;nia.</p>\r\n<p dir=\"ltr\">A Pol&iacute;cia das Ideias &eacute; a respons&aacute;vel por espionar e capturar os criminosos que cometem esse crime, enviando eles para o Minist&eacute;rio do Amor, onde acontecem torturas e a execu&ccedil;&atilde;o dos infratores. O Winston, por sua vez, tamb&eacute;m foi pego pela Pol&iacute;cia das Ideias. Na verdade, ele foi enganado por quem supostamente era o senhor Charrington, dono de uma loja de artefatos antigos em Londres.</p>\r\n<p dir=\"ltr\">Durante o tempo que Winston permaneceu na pris&atilde;o, a fim de convenc&ecirc;-lo de que o Partido estava sempre certo em suas afirma&ccedil;&otilde;es, assim como tamb&eacute;m era capaz de modificar toda e qualquer lei existente no universo, envolveram Winston em diversos tipos de torturas, desde as pr&aacute;ticas mais medievais at&eacute; &agrave;s mais modernas.</p>\r\n<h2 dir=\"ltr\">1- O quarto branco</h2>\r\n<p dir=\"ltr\">Assim que Winston chegou na sua cela, ele notou que estava numa sala sem janelas, de teto alto e paredes cobertas de azulejos brancos reluzentes. Winston n&atilde;o conseguia deduzir que horas eram naquele lugar. As luzes eram ligadas 24 horas por dia, e tamb&eacute;m n&atilde;o havia janelas no pr&eacute;dio onde ele estava, era imposs&iacute;vel determinar o quanto as horas passavam.</p>\r\n<p dir=\"ltr\">Todas essas caracter&iacute;sticas citadas no livro se referem ao m&eacute;todo conhecido como tortura branca que consiste no isolamento completo do indiv&iacute;duo e a priva&ccedil;&atilde;o sensorial intensa.&nbsp;</p>\r\n<p dir=\"ltr\"><img src=\"https://i.imgur.com/dcZn8xj.jpg\" alt=\"\" width=\"800\" height=\"450\"></p>\r\n<p dir=\"ltr\">O c&ocirc;modo &eacute; constru&iacute;do para que nenhum som do mundo externo seja capaz de entrar, com o intuito de que a experi&ecirc;ncia seja ainda mais silenciosa e angustiante. Al&eacute;m disso, as luzes do ambiente nunca se apagam, dando a sensa&ccedil;&atilde;o de que as horas n&atilde;o passam.</p>\r\n<p dir=\"ltr\">Al&eacute;m do psicol&oacute;gico ser afetado, os processos biol&oacute;gicos tamb&eacute;m s&atilde;o alterados. Como as luzes nunca se apagam, acaba sendo imposs&iacute;vel distinguir o dia da noite, prejudicando o rel&oacute;gio biol&oacute;gico. Portanto, desregular esse ciclo desordena todo o organismo da pessoa que passa por esta experi&ecirc;ncia.</p>\r\n<h2 dir=\"ltr\">2- Tortura psicol&oacute;gica</h2>\r\n<p dir=\"ltr\">Al&eacute;m das agress&otilde;es f&iacute;sicas envolvendo diversos guardas de uma vez, Winston tamb&eacute;m sofria tortura psicol&oacute;gica pelos interrogadores sendo obrigado a passar por in&uacute;meras humilha&ccedil;&otilde;es sob a amea&ccedil;a de novas agress&otilde;es. Durante as suas interroga&ccedil;&otilde;es, a principal forma de tortura psicol&oacute;gica que Winston sofreu foi a distor&ccedil;&atilde;o da realidade onde muitas vezes ele chorava de vergonha e exaust&atilde;o.</p>\r\n<p dir=\"ltr\">A distor&ccedil;&atilde;o da realidade, tamb&eacute;m conhecida como gaslighting, &eacute; a t&aacute;tica que distorce a palavra da v&iacute;tima para que ela fique confusa em meio &agrave; pr&oacute;pria realidade. Aos poucos, quem sofre a viol&ecirc;ncia passa a duvidar da sua capacidade de interpreta&ccedil;&atilde;o dos fatos e passa a crer no que diz o abusador.</p>\r\n<p dir=\"ltr\">O agressor tamb&eacute;m pode distorcer as atitudes e as palavras da v&iacute;tima diante outras pessoas, o que o consolida como o detentor da verdade e da lucidez.</p>\r\n<h2 dir=\"ltr\">3- Torturas ficcionais</h2>\r\n<p dir=\"ltr\">Orwell n&atilde;o retratou somente t&eacute;cnicas existentes em sua obra, assim como ele tamb&eacute;m descreveu m&eacute;todos que o Partido era capaz de criar com todo o seu poder sobre a natureza.</p>\r\n<p dir=\"ltr\">Por exemplo, uma das formas de tortura citada no livro era um medidor de 0 a 100 que aumentava a intensidade da dor na v&iacute;tima respectivamente ao seu valor. A v&iacute;tima sempre estava deitada para baixo com todos os seus pontos vitais amarrados tornando imposs&iacute;vel se proteger da dor e saber o que estava acontecendo com o seu corpo.</p>\r\n<p dir=\"ltr\">Outro m&eacute;todo envolvia um dispositivo pesado que era acoplado atr&aacute;s da cabe&ccedil;a da v&iacute;tima com duas almofadas macias e &uacute;midas sendo fixadas nas laterais da cabe&ccedil;a. Em seguida, a v&iacute;tima sentia a sensa&ccedil;&atilde;o de uma explos&atilde;o, mesmo n&atilde;o ocorrendo de fato. Ainda assim, a pessoa ficava atordoada e sem no&ccedil;&atilde;o de onde e com quem estava, sentindo como se alguma parte do seu c&eacute;rebro tivesse sido arrancada. E de fato, a parte do c&eacute;rebro era apagada e dava mais facilidade para os interrogadores fazerem a lavagem cerebral.</p>\r\n<h2 dir=\"ltr\">Quem foi George Orwell?</h2>\r\n<p dir=\"ltr\">George Orwell (pseud&ocirc;nimo de Eric Arthur Blair) nasceu em 25 de junho de 1903, em Motihari, &Iacute;ndia. Por&eacute;m, Orwell se mudou para a Inglaterra com apenas quatro meses de vida e teve uma educa&ccedil;&atilde;o inglesa.</p>\r\n<p dir=\"ltr\">Em 1922, come&ccedil;ou a trabalhar na Pol&iacute;cia Imperial Indiana, na Birm&acirc;nia. Em 1927, ele abandonou o emprego para se dedicar &agrave; literatura. Ent&atilde;o, no ano seguinte, foi para Paris, onde viveu cerca de um ano e meio.</p>\r\n<p dir=\"ltr\">Em 1939, o escritor teve problemas no pulm&atilde;o e precisou se tratar. Por causa de seu problema de sa&uacute;de, foi rejeitado pelo servi&ccedil;o militar e n&atilde;o lutou na Segunda Guerra Mundial. Assim, de 1941 a 1943, ele foi um dos respons&aacute;veis pelos programas radiof&ocirc;nicos do Servi&ccedil;o Indiano da BBC e depois se tornou editor do jornal socialista Tribune.</p>\r\n<p dir=\"ltr\">Em 1945, com a publica&ccedil;&atilde;o do livro A revolu&ccedil;&atilde;o dos bichos, George Orwell conseguiu fazer sucesso como escritor. Por&eacute;m, pouco tempo depois, em 1949, esse livro foi ofuscado pela obra mais famosa de Orwell, o romance 1984. No entanto, o autor n&atilde;o p&ocirc;de presenciar o grande sucesso do seu livro nos anos que seguiram &agrave; sua publica&ccedil;&atilde;o, pois, devido &agrave; tuberculose, o romancista morreu em 21 de janeiro de 1950, em Londres.</p>', '2022-07-01 19:05:33', 'posts/livros/1984--quais-foram-os-tipos-de-torturas-que-winston-sofreu-no-ministerio-do-amor.php'),
(298, 'dc197f3a2402488fbfd5926c59cadeec.png', 'OceÃ¢nia, Londres e o Partido: o que diferenciava as pessoas de 1984?', 'dsadsa', 'Leonardo O.', 6, 'Livros', '<p dir=\"ltr\">A brilhante obra <a href=\"../../localhost/SMARTverse/view/search.php?q=1984\">1984</a>, escrita em 1949 por <a href=\"https://en.wikipedia.org/wiki/George_Orwell\">George Orwell</a>, &eacute; um romance dist&oacute;pico que conta a hist&oacute;ria sufocante de uma sociedade que vive num sistema de opress&atilde;o e autoritarismo. Na obra, o mundo se encontra dividido por tr&ecirc;s grandes imp&eacute;rios que permanecem em guerra: Lest&aacute;sia, Eur&aacute;sia e Oce&acirc;nia.</p>\r\n<p dir=\"ltr\">Winston, protagonista de 1984, vive na Oce&acirc;nia, um imp&eacute;rio onde as pessoas s&atilde;o vigiadas e divididas de acordo com a sua classe social. Sabendo disso, existem tr&ecirc;s tipos de classes na hist&oacute;ria: os proletas, <strong>os membros do Partido Externo</strong> e os membros do Partido Interno (tamb&eacute;m chamado de N&uacute;cleo do Partido). O Partido se refere &agrave;s pessoas que trabalham para os minist&eacute;rios e departamentos do governo.&nbsp;</p>\r\n<p dir=\"ltr\">Sendo assim, existiam quatro minist&eacute;rios na Oce&acirc;nia: Minist&eacute;rio da Verdade, Minist&eacute;rio da Paz, Minist&eacute;rio do Amor e o Minist&eacute;rio da Pujan&ccedil;a. Cada uma dessas organiza&ccedil;&otilde;es eram respons&aacute;veis por um setor do pa&iacute;s e tamb&eacute;m havia uma hierarquia dentro dos minist&eacute;rios, o N&uacute;cleo do Partido era o cargo mais escasso sendo composto por cerca de 2% da popula&ccedil;&atilde;o da Oce&acirc;nia enquanto o restante era dividido entre o Partido Externo e os proletas.<img src=\"https://lh3.googleusercontent.com/yp3HnLpkMpFnxNi2KMi7I8ficTX4aquIqiyoua4mUHRiV9HRcL8ZVFKLhg3Pgnd1h-U94nN1y2YmjPmKgnJTwciqujo8SlMz8BezztZcDyKZKT8mXy_F3Ty5DrsA7IphlhFk5zza532eBrwkNyg\" width=\"362\" height=\"310\"></p>\r\n<h2 dir=\"ltr\">Proletas</h2>\r\n<p dir=\"ltr\">Os proletas faziam parte do grupo de pessoas que moravam em Londres, a &aacute;rea mais perigosa e perif&eacute;rica da Oce&acirc;nia. Esse grupo era tratado com indiferen&ccedil;a ao olhar do Governo, pois n&atilde;o tinha import&acirc;ncia pol&iacute;tica para todo o sistema.&nbsp;</p>\r\n<p dir=\"ltr\">Por isso, eles n&atilde;o tinham a obriga&ccedil;&atilde;o de ter uma teletela em casa, por&eacute;m tinham liberdade sexual e religiosa j&aacute; que a exist&ecirc;ncia deles n&atilde;o era importante. Inclusive, havia at&eacute; um slogan feito exclusivamente para os proletas: &rdquo;proletas e animais s&atilde;o livres&rdquo;. Por&eacute;m, mesmo sendo uma massa ignorada da Oce&acirc;nia, a Pol&iacute;cia das Ideias tamb&eacute;m fazia o seu trabalho entre eles, mesmo que raramente.&nbsp;</p>\r\n<p dir=\"ltr\">Na hist&oacute;ria, ao andar pelas ruas de Londres, Winston notou que as pessoas viviam vidas normais comparada ao que existia no Partido, crian&ccedil;as brincavam nas ruas, vizinhos interagiam entre si, tudo era extremamente espont&acirc;neo e diferente do que ele conhecia. Os proletas viviam felizes apesar do medo das marias-fuma&ccedil;as (apelido que os proletas davam aos m&iacute;sseis) que ca&iacute;am com frequ&ecirc;ncia em Londres.</p>\r\n<h2 dir=\"ltr\">Partido Externo</h2>\r\n<p dir=\"ltr\">Dentro dos Minist&eacute;rios, os membros do Partido Externo faziam parte da camada mais volumosa do Partido, inclusive o protagonista Winston. Diferentemente dos proletas, esse grupo recebia uma aten&ccedil;&atilde;o redobrada do governo atrav&eacute;s das teletelas e eram proibidos de seguir uma religi&atilde;o ou ter rela&ccedil;&otilde;es sexuais por vontade pr&oacute;pria.&nbsp;</p>\r\n<p dir=\"ltr\">Desde a inf&acirc;ncia, os filhos dos membros do Partido eram incentivados a espionar e denunciar criminosos do pensamento (e que &agrave;s vezes eram at&eacute; os pr&oacute;prios pais). Por exemplo, A Liga da Juventude e Os Espi&otilde;es eram organiza&ccedil;&otilde;es que as crian&ccedil;as e jovens participavam desde cedo com grande entusiasmo para aprender as pr&aacute;ticas de espionagem que o governo oferecia.</p>\r\n<p dir=\"ltr\">Logo depois, quando se tornavam adultos e tamb&eacute;m membros do Partido, eles eram obrigados a se ocupar durante todo o dia participando de algum tipo de recrea&ccedil;&atilde;o comunit&aacute;ria ou at&eacute; mesmo de reuni&otilde;es di&aacute;rias como os Dois Minutos de &Oacute;dio, reuni&atilde;o que focava em exaltar o &oacute;dio por inimigos do governo e principalmente por Emmanuel Goldstein, um traidor do Partido que apoiava a liberdade de forma geral e que tamb&eacute;m era acusado de ter um ex&eacute;rcito de espi&otilde;es inseridos no Partido.</p>\r\n<p dir=\"ltr\">Al&eacute;m de toda a limita&ccedil;&atilde;o de privacidade que essa classe tinha, eles tamb&eacute;m tinham que consumir.</p>\r\n<h2 dir=\"ltr\">Partido Interno (ou N&uacute;cleo do Partido)</h2>\r\n<p>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><a href=\"search.php?q=Alice+nos+pa%C3%ADs+das+maravilhas\">Alice</a></p>\r\n<p>&nbsp;</p>', '2022-07-07 12:10:22', 'posts/livros/oceania-londres-e-o-partido-o-que-diferenciava-as-pessoas-de-1984.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(28) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `choosed_Name` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `profile_picture` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `isAutor` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `choosed_Name`, `email`, `password`, `profile_picture`, `isAutor`) VALUES
(6, 'Leonardo Oliveira', 'Leonardo O.', 'oleonardo78@gmail.com', 'leonardo', 'eeuuu.jpg', 0),
(7, 'Geovanna Sthefany', 'Geovanna', 'geovann.sthefany11@gmail.com', '123456789', 'cb67037fedc21955889fc0cc63dac103.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `highlightsids`
--
ALTER TABLE `highlightsids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `highlightsids`
--
ALTER TABLE `highlightsids`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
