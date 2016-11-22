-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sonoricstudios
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `band`
--

DROP TABLE IF EXISTS `band`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `band` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `about` text,
  `contact` text,
  `url_image_logo` varchar(255) NOT NULL,
  `url_image_brand` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `band`
--

LOCK TABLES `band` WRITE;
/*!40000 ALTER TABLE `band` DISABLE KEYS */;
INSERT INTO `band` VALUES (4,3,'B.G.D','<p lang=\"es-AR\">Artista solista del genero Hip hop lanza su material de la mano de Sonoric Studios (2013). Compartiendo su m&uacute;sica de la zona oeste de Buenos Aires, Libertad.</p>','<p>Street Flow Crew.</p>\r\n<p><a title=\"Facebook\" href=\"http://www.facebook.com/bgd_rap\" target=\"_blank\">Facebook</a></p>','son_band_bgd_logo_min.jpg','son_sello_sonoric.jpg'),(5,3,'Flow Time','<p></p>\r\n<p lang=\"es-AR\">Artista solista del genero Hip hop lanza su material de la mano de Sonoric Studios (2013). Compartiendo su m&uacute;sica de la zona oeste de Buenos Aires, Libertad.</p>\r\n<p>&nbsp;</p>','','son_0114_min.JPG','son_sello_sonoric.jpg'),(6,3,'Nexxt','<p></p>\r\n<p lang=\"es-AR\">Artista solista del genero Hip hop lanza su material de la mano de Sonoric Studios (2012-2013). Compartiendo su m&uacute;sica de la zona oeste de Buenos Aires, Ituzaingo. Con una gran variedad de Artistas invitados del conocido Barrio San Juan.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','<p><a title=\"Facebook\" href=\"https://www.facebook.com/pages/Nexxt-mc/198198303609152\" target=\"_blank\">facebook</a></p>','son_nexxt_logo.jpg','son_sello_sonoric.jpg'),(7,1,'A todo ritmo','<p></p>\r\n<p lang=\"es-AR\">Grupo Tropical del genero Remix reggaeton, protagonizado por el artista Big Duck, Presentaci&oacute;n de su material de difusi&oacute;n 2013 de la mano de Ca&ntilde;a producciones.</p>\r\n<p>&nbsp;</p>','','son_atodoritmo_logo.jpg','son_sello_sonoric.jpg'),(8,2,'El Comodin','<p></p>\r\n<p lang=\"es-AR\">Grupo de rock and roll, dirigido por el artista Jony &ldquo;Chapy&rdquo; que compenzo su material en 2010-2013 hoy nos presenta su difusi&oacute;n del disco mas esperado por su publico.</p>\r\n<p>&nbsp;</p>','','son_elcomodin_logo.jpg','son_sello_sonoric.jpg');
/*!40000 ALTER TABLE `band` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `band_photos`
--

DROP TABLE IF EXISTS `band_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `band_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `band_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `band_photos`
--

LOCK TABLES `band_photos` WRITE;
/*!40000 ALTER TABLE `band_photos` DISABLE KEYS */;
INSERT INTO `band_photos` VALUES (2,3,'Disco Remix','','imagine-dragons-remix.jpg'),(3,4,'Bgd-front','','son_bgd_01_min.jpg'),(4,4,'Bgd-front2','','son_bgd_02_min.jpg'),(5,5,'flowtime-001','','son_0017_min.JPG'),(6,5,'flowtime-002','','son_0114_min.JPG'),(7,5,'flowtime-003','','son_0130_min.JPG'),(8,6,'nexxt-001','','son_nexxt_001.jpg'),(9,6,'nexxt-002','','son_nexxt_002.jpg'),(10,6,'nexxt-003','','son_nexxt_003.jpg'),(11,7,'A todo ritmo-001','','son_atodoritmo_001.jpg'),(12,7,'A todo ritmo-002','','son_atodoritmo_002.jpg'),(13,8,'elcomodin-001','','son_elcomodin_001.jpg'),(14,8,'elcomodin-002','','son_elcomodin_002.jpg'),(15,8,'elcomodin-003','Chappy','son_elcomodin_003.jpg');
/*!40000 ALTER TABLE `band_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `band_tracks`
--

DROP TABLE IF EXISTS `band_tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `band_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `band_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `duration` varchar(45) NOT NULL,
  `url_track` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `band_tracks`
--

LOCK TABLES `band_tracks` WRITE;
/*!40000 ALTER TABLE `band_tracks` DISABLE KEYS */;
INSERT INTO `band_tracks` VALUES (4,3,'Tiptoe','3:14','No Shame - Para Cambiar.mp3'),(8,3,'It\'s Time','3:25','No Shame - No pares de Avanzar.mp3'),(11,3,'Radioactive','5:29','No Shame - Puppet.mp3'),(12,1,'The War','2:40','No Shame - No pares de Avanzar.mp3'),(13,4,'Todo se perdiÃ³','3:25','bgd-todo_se_perdio.mp3'),(14,4,'Asi es el rap','3:14','bgd-Asi_es_el_rap.mp3'),(15,4,'Mente superior','2:53','bgd-Mente_superior.mp3'),(16,5,'Amor de a dos','3:13','flowtime-Amor_de_a_dos.mp3'),(17,5,'Eres y serÃ¡s','4:01','flowtime-Eres_y_seras.mp3'),(19,5,'Mi Talisman','2:17','flowtime-Mi_talisman.mp3'),(20,6,'Laboratorio de Mcs','2:15','nexxt-laboratorio_de_Mcs.mp3'),(21,6,'Mas de una vez','3:09','nexxt-Mas_de_una_vez.mp3'),(22,6,'Traficando Flow','1:57','nexxt-Traficando_flow.mp3'),(23,7,'Nos vamos de shopping','2:36','atodoritmo-nos_vamos_de_shoppping.mp3'),(24,7,'Top Secret','2:55','atodoritmo-top_secret.mp3'),(25,7,'Yo te lo dije','2:10','atodoritmo-yo_te_lo_dije.mp3'),(26,8,'Arcangel','3:04','elcomodin-Arcangel.mp3'),(27,8,'Memorias','2:58','elcomodin-Memorias.mp3'),(28,8,'Infiel Pesadilla','4:12','elcomodin-Infiel_pesadilla.mp3'),(29,8,'Calibre','3:39','elcomodin-calibre.mp3');
/*!40000 ALTER TABLE `band_tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinic`
--

DROP TABLE IF EXISTS `clinic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `url_image` varchar(255) DEFAULT 'noimage.jpg',
  `url_link` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinic`
--

LOCK TABLES `clinic` WRITE;
/*!40000 ALTER TABLE `clinic` DISABLE KEYS */;
INSERT INTO `clinic` VALUES (1,'Clinica de Prueba','Bateria-Johanna-Loocke.jpg','http://www.youtube.com/watch?v=gd7nSOoFUsM','2013-04-06 10:46:00'),(2,'Cobus DÃºo con Atom Willard (Prueba)','AVA_-_We_Don\'t_Need_to_Whisper_cover.jpg','http://www.youtube.com/watch?v=D3S81X8JBZQ','2013-04-16 12:06:00');
/*!40000 ALTER TABLE `clinic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `text` text,
  `url_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (3,'Guitarra Para NiÃ±os, Adolecentes Y Adultos','<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-size: small;\"><span style=\"color: #c00000;\"><span style=\"font-family: Calibri,sans-serif;\">CLASES DE GUITARRA CRIOLLA O CL&Aacute;SICA<br />CLASES DE GUITARRA ELECTRICA</span></span><span style=\"color: #c00000;\"><span style=\"font-family: Calibri,sans-serif;\">&nbsp;</span></span><span style=\"color: #c00000;\"><span style=\"font-family: Calibri,sans-serif;\"><br />CLASES DE GUITARRA AC&Uacute;STICA</span></span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #c00000;\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Efectos para Guitarra (Virtuales y Pedales)</span></span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;<span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Dictamos clases para principiantes y avanzados. </span></span></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Puedes</span><span style=\"font-size: small;\"><span lang=\"es-AR\">estudiar</span></span><span style=\"font-size: small;\"><span lang=\"en-US\"> rock, pop, blues, hard rock, folklore, tango, bossa, jazz, metal. </span></span><span style=\"font-size: small;\"><span lang=\"es-AR\">Podr&aacute;s</span></span><span style=\"font-size: small;\"> tambi&eacute;n acompa&ntilde;ar canciones que te gusten que no se inscriban en ning&uacute;n estilo en particular<br /><br /></span><span style=\"font-size: small;\">No usamos un m&eacute;todo espec&iacute;fico para todos los alumnos, ya que se respetan las necesidades y los tiempos de aprendizaje y de pr&aacute;ctica de cada uno. En el curso de guitarra trabajamos algunos aspectos b&aacute;sicos e importantes como la r&iacute;tmica, el tempo, el sonido y la t&eacute;cnica, siempre desde la experiencia pr&aacute;ctica y auditiva.</span></span></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;<span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">En la primera entrevista usted retira su temario de niveles luego de que se le realice una peque&ntilde;a nivelaci&oacute;n para obtener un &iacute;ndice personalizado con el objetivo que busca en el instrumento.</span></span></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;<span style=\"color: #808080;\"><span style=\"font-family: Calibri,sans-serif;\">Consulte directamente en los contactos de la p&aacute;gina web donde encontrara los tel&eacute;fonos de los asesores para cualquier pregunta que quiera realizar.</span></span></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;<span style=\"font-family: Calibri,sans-serif;\">Los seminarios se dictan en grupo (capacidad m&aacute;xima 4 alumnos) o tambi&eacute;n individuales. Estas clases se dar&aacute;n 2 veces en la semana dependiendo de las posibilidades de tiempo de los alumnos. El periodo de duraci&oacute;n posee un aproximado de 4 meses para completar todos los niveles armados en el temario.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 1 hora. </span></span></p>','course.guitar.logo.jpg'),(4,'Trompeta','<p></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Para empezar a estudiar el instrumento es importante saber que hay algunos factores no musicales que es necesario dominar (embocadura, posici&oacute;n de la lengua y los labios, columna de aire, etc), lo que se busca es que la emisi&oacute;n del sonido sea clara y sin esfuerzo, para luego poder encarar los distintos aspectos t&eacute;cnicos con naturalidad y soltura</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">El m&eacute;todo de trabajo est&aacute; compuesto de diferentes ejercicios acondicionados para encarar los distintos aspectos de la t&eacute;cnica (ataque, ligado, flexibilidad). Tambi&eacute;n se trabaja con ejemplos musicales adaptados para poder aplicar en un contexto musical aquello que se practica en los ejercicios t&eacute;cnicos</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Se ense&ntilde;a lectura de partitura y armon&iacute;a, ya que son dos aspectos de la m&uacute;sica fundamentales para realizar un estudio completo y entender que es lo que se toca para as&iacute; aplicar los conceptos que se aprenden en diferentes contextos musicales</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 2 hora. </span></span></p>\r\n<p>&nbsp;</p>','course.trumpet.logo.jpg'),(5,'Violin','<p></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Para ni&ntilde;os, adolescentes y adultos. Principiantes y avanzados</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Combinaci&oacute;n de diferentes m&eacute;todos de ense&ntilde;anza </span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">(Seg&uacute;n aptitudes y necesidades del alumno)</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Lenguaje musical aplicado al instrumento</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Diferentes estilos musicales (cl&aacute;sica, rock, pop, etc.)</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Material de estudio (partituras, grabaciones de audio espec&iacute;ficas)</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 1 hora. </span></span></p>\r\n<p>&nbsp;</p>','course.violin.logo.jpg'),(6,'Canto','<p>&nbsp;</p>\r\n<p><span style=\"font-family: Calibri,sans-serif;\">Todas las edades</span></p>\r\n<p><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Cantar es una forma de canalizar creatividad y sanamente las energ&iacute;as, emocional, f&iacute;sica y ps&iacute;quica, el canto nos permite liberar nuestros m&aacute;s profundos sentimientos y comunicarnos con lo m&aacute;s &iacute;ntimo de nuestro ser</span></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Las clases est&aacute;n dirigidas a todo aquel que desee investigar su voz y aprender a disfrutar de ella</span></span></p>\r\n<ul>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Vocalizaci&oacute;n</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Respiraci&oacute;n</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Interpretaci&oacute;n</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Repertorio</span></p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 1 hora.</span></span></p>\r\n<p>&nbsp;</p>','course.sing.logo.jpg'),(7,'Bajo','<p></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Todos los niveles desde principiantes hasta avanzados</span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Las clases son personalizadas y adecuadas a las necesidades y el gusto de cada alumno</span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Se aprender&aacute;:</span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">T&eacute;cnica: Como tocar el bajo con los dedos, slip, tapping, acordes, rasguitos, doble pulgar, arm&oacute;nicos</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Conocimiento pr&aacute;ctico: Escalas, notas, teor&iacute;a musical aplicada a la pr&aacute;ctica del instrumento</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Armon&iacute;a: Que acordes existen, como se relacionan entre si, como hacer buenas melod&iacute;as</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Composici&oacute;n: Armar bases, componer un tema completo, secciones, arreglos, como interactuar con la Bater&iacute;a (ritmos)</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Improvisaci&oacute;n: Ganar seguridad al tocar, meter arreglos, como encarar un solo, que cosas usar</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Lectura y escritura: Altura y ritmo de las notas, el pentagrama, clave de fa y sol</span></span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Percepci&oacute;n y comunicaci&oacute;n: Como escuchar, que escuchar, interactuar con los dem&aacute;s m&uacute;sicos</span></span></p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 1 hora. </span></span></p>\r\n<p>&nbsp;</p>','course.bass.logo.jpg'),(8,'Piano','<p></p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Iniciaci&oacute;n y avanzado Repertorio cl&aacute;sico y popular</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Se trabaja buscando como objetivo un dominio fluido del instrumento y un acercamiento a los distintos aspectos del lenguaje musical</span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">Se utiliza como material las m&uacute;sicas y los estilos que el alumno prefiera, partiendo de la idea de que se puede aprender a tocar desde cualquier estilo</span></span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\"><span style=\"font-size: small;\">El objetivo es incentivar la expresi&oacute;n musical de cada alumno desarrollando su potencial creativo, percepci&oacute;n auditiva, posibilidad interpretativa y destreza en el manejo del instrumento. A trav&eacute;s de un aprendizaje &aacute;gil y placentero, ira adquiriendo una t&eacute;cnica de ejecuci&oacute;n, un mayor entrenamiento en la lectura de partituras populares y cl&aacute;sicas as&iacute; como algunos elementos b&aacute;sicos para acompa&ntilde;ar o componer temas. Mediante juegos, improvisaciones, ejercicios de exploraci&oacute;n sobre el piano se buscara agudizar la sensibilidad y ductibilidad del alumno</span></span></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Escuchar, imitar y arreglar temas musicales acordes a los intereses y necesidades del alumno</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Iniciarse, profundizar el conocimiento del lenguaje musical y la armon&iacute;a</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Leer, escribir con notaci&oacute;n tradicional en las dos claves y cifrado</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Inventar acompa&ntilde;amientos para canciones conocidas</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Poder cantar y tocar al mismo tiempo</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Reunirse para ensamblar con otros alumnos</span></p>\r\n</li>\r\n<li>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"font-family: Calibri,sans-serif;\">Realizar muestras</span></p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p class=\"western\" style=\"margin-bottom: 0in;\" lang=\"es-ES\"><span style=\"color: #984806;\"> <span style=\"font-family: Calibri,sans-serif;\">Clases Peri&oacute;dicas: 1 vez por semana con la duraci&oacute;n de 1 hora. </span></span></p>\r\n<p>&nbsp;</p>','course.piano.logo.jpg');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_teachers`
--

DROP TABLE IF EXISTS `course_teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_course_teachers_1_idx` (`course_id`),
  CONSTRAINT `fk_course_teachers_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_teachers`
--

LOCK TABLES `course_teachers` WRITE;
/*!40000 ALTER TABLE `course_teachers` DISABLE KEYS */;
INSERT INTO `course_teachers` VALUES (14,3,'Lucas','Nivel Inicial'),(15,4,'MartÃ­n','Nivel Inicial y Avanzado'),(16,5,'Augusto','Nivel Inicial y Avanzado'),(17,6,'Augusto VÃ¡zquez','Nivel Inicial y Avanzado'),(18,6,'Florencia Giralt','NiÃ±os y mujeres'),(19,7,'Augusto VÃ¡zquez','Nivel Inicial y Avanzado'),(20,8,'Jayro JÃ¡uregui','Nivel Inicial e InterpretaciÃ³n'),(21,8,'Pablo','Nivel Avanzado con lenguaje musical');
/*!40000 ALTER TABLE `course_teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_arts_combos`
--

DROP TABLE IF EXISTS `disc_arts_combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_arts_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_arts_combos`
--

LOCK TABLES `disc_arts_combos` WRITE;
/*!40000 ALTER TABLE `disc_arts_combos` DISABLE KEYS */;
INSERT INTO `disc_arts_combos` VALUES (1,'Prueba - $0','<p><span style=\"margin: 0px; padding: 0px;\">Los discos de difusi&oacute;n son elaborados con un papel brillante de alta calidad en tinta. Tambi&eacute;n se pinta el Cd Printable para brindar mayor confiabilidad en la entrega. El formato de este material es de un papel con 2 caras (24cmx12cm) ubicado dentro de un sobre transparente con un dise&ntilde;o inicial para las gr&aacute;ficas.</span></p>\r\n<p>&nbsp;</p>');
/*!40000 ALTER TABLE `disc_arts_combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_arts_photos`
--

DROP TABLE IF EXISTS `disc_arts_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_arts_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url_image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_arts_photos`
--

LOCK TABLES `disc_arts_photos` WRITE;
/*!40000 ALTER TABLE `disc_arts_photos` DISABLE KEYS */;
INSERT INTO `disc_arts_photos` VALUES (1,'Ava - We Dont need to whisper','Ava','AVA_-_We_Don\'t_Need_to_Whisper_cover.jpg');
/*!40000 ALTER TABLE `disc_arts_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_photo_combos`
--

DROP TABLE IF EXISTS `disc_photo_combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_photo_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_photo_combos`
--

LOCK TABLES `disc_photo_combos` WRITE;
/*!40000 ALTER TABLE `disc_photo_combos` DISABLE KEYS */;
INSERT INTO `disc_photo_combos` VALUES (1,'Foto de Prueba $0','<p>Fotos de Prueba</p>\r\n<p>Descripci&oacute;n...</p>');
/*!40000 ALTER TABLE `disc_photo_combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_photo_photos`
--

DROP TABLE IF EXISTS `disc_photo_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_photo_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url_image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_photo_photos`
--

LOCK TABLES `disc_photo_photos` WRITE;
/*!40000 ALTER TABLE `disc_photo_photos` DISABLE KEYS */;
INSERT INTO `disc_photo_photos` VALUES (1,'Estudio Consola','Consola','son_index_photo_04.jpg');
/*!40000 ALTER TABLE `disc_photo_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_printing_combos`
--

DROP TABLE IF EXISTS `disc_printing_combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_printing_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_printing_combos`
--

LOCK TABLES `disc_printing_combos` WRITE;
/*!40000 ALTER TABLE `disc_printing_combos` DISABLE KEYS */;
INSERT INTO `disc_printing_combos` VALUES (1,'Discos para difusiÃ³n (sobres) - $6 c/u','<p>&nbsp;</p>\r\n<p>Los discos de difusi&oacute;n son elaborados con un papel brillante de alta calidad en tinta. Tambi&eacute;n se pinta el Cd Printable para brindar mayor confiabilidad en la entrega. El formato de este material es de un papel con 2 caras (24cmx12cm) ubicado dentro de un sobre transparente con un dise&ntilde;o inicial para las gr&aacute;ficas.</p>\r\n<p>&nbsp;</p>'),(2,'Discos modelo original formato cartÃ³n - $15 c/u','<p>Los discos en formato cart&oacute;n son los modelos m&aacute;s usados en la actualidad debido a la suba de los precios del acr&iacute;lico y por lo art&iacute;stico que suelen quedar en su producto final, cuentan con una caja de cart&oacute;n que contiene una cara principal, al abrirlo hacia la izquierda contiene el disco sujeto a un apriete de acr&iacute;lico, posee un arte detr&aacute;s del disco y a su izquierda, como tambi&eacute;n detr&aacute;s del principal donde se ubican los t&iacute;tulos que contiene el Cd grabado.</p>\r\n<p>&nbsp;</p>\r\n<p>Las variantes de este material es la realizaci&oacute;n de mayores capas de cart&oacute;n o la fabricaci&oacute;n del disco master la su envi&oacute; a una planta duplicadora.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Consulte sobre estos productos directamente en los tel&eacute;fonos que aparecen el contacto (Sonoric Studios) muchas gracias. </strong></p>\r\n<p><strong>&nbsp;</strong></p>');
/*!40000 ALTER TABLE `disc_printing_combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc_printing_photos`
--

DROP TABLE IF EXISTS `disc_printing_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc_printing_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url_image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc_printing_photos`
--

LOCK TABLES `disc_printing_photos` WRITE;
/*!40000 ALTER TABLE `disc_printing_photos` DISABLE KEYS */;
INSERT INTO `disc_printing_photos` VALUES (1,'Estudio Produccion','','son_index_photo_02.jpg');
/*!40000 ALTER TABLE `disc_printing_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discs`
--

DROP TABLE IF EXISTS `discs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discs` (
  `id` int(11) NOT NULL,
  `text_arts` text,
  `text_printing` text,
  `text_photos` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discs`
--

LOCK TABLES `discs` WRITE;
/*!40000 ALTER TABLE `discs` DISABLE KEYS */;
INSERT INTO `discs` VALUES (0,'<p><strong>Sonoricstudios</strong> brinda al artista la posibilidad de realizar en su totalidad un trabajo musical y llevar a cabo la realizaci&oacute;n de un material de difusi&oacute;n a la escala que el producto encuentre necesario y en relaci&oacute;n a la medida en que pueda ser soportado por el artista, otorgando un abanico de posibilidades accesibles y c&oacute;modas, teniendo en cuenta que las grandes discogr&aacute;ficas realizan trabajos a escalas en veces casi inalcanzables para ellos.<br />La empresa cuenta con destacados dise&ntilde;adores para el Arte de su disco en costos muy accesibles donde usted, al finalizar su grabaci&oacute;n, pueda realizar la imagen arte visual que tendr&aacute; su material de exposici&oacute;n musical.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span data-mce-mark=\"1\"><span data-mce-mark=\"1\">Consulte directamente con la empresa en sus contactos telef&oacute;nicos.</span></span></strong></p>\r\n<p>&nbsp;</p>','<p>&nbsp;<strong>Sonoric studios</strong> brinda al artista la posibilidad de realizar en su totalidad un trabajo musical y llevar a cabo la realizaci&oacute;n de un material de difusi&oacute;n a la escala que el producto encuentre necesario y en relaci&oacute;n a la medida en que pueda ser soportado por el artista, otorgando un abanico de posibilidades accesibles y c&oacute;modas, teniendo en cuenta que las grandes discogr&aacute;ficas realizan trabajos a escalas en veces casi inalcanzables para ellos.</p>\r\n<p>&nbsp;</p>','<p><strong>Sonoricstudios</strong> brinda al artista la posibilidad de realizar en su totalidad un trabajo musical y llevar a cabo la realizaci&oacute;n de un material de difusi&oacute;n a la escala que el producto encuentre necesario y en relaci&oacute;n a la medida en que pueda ser soportado por el artista, otorgando un abanico de posibilidades accesibles y c&oacute;modas, teniendo en cuenta que las grandes discogr&aacute;ficas realizan trabajos a escalas en veces casi inalcanzables para ellos</p>\r\n<p>La empresa cuenta un estudio con los equipos necesarios para hacer las sesiones de fotograf&iacute;a para los dise&ntilde;os de difusi&oacute;n y arte para su discogr&aacute;fica completa. Contamos con personal profesional destinado en el rubro Audio Visual con la calidad HD que usted se requiera para su proyecto.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Consulte directamente con la empresa en sus contactos telef&oacute;nicos.</strong></p>\r\n<p>&nbsp;</p>');
/*!40000 ALTER TABLE `discs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'Tropical'),(2,'Rock'),(3,'Rap');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hiring`
--

DROP TABLE IF EXISTS `hiring`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hiring` (
  `id` int(11) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hiring`
--

LOCK TABLES `hiring` WRITE;
/*!40000 ALTER TABLE `hiring` DISABLE KEYS */;
INSERT INTO `hiring` VALUES (0,'<h2 style=\"margin: 10px auto;\"><span style=\"color: #800000;\"> Contrataciones directas </span></h2>\r\n<p style=\"margin: 10px auto;\">Si usted desea contactarse para la invitaci&oacute;n o actuaci&oacute;n de alg&uacute;n artista presente en esta p&aacute;gina, en este sitio encontrara el tel&eacute;fono de las oficinas responsables de cada uno de estos grupos o solistas.</p>');
/*!40000 ALTER TABLE `hiring` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hiring_collection`
--

DROP TABLE IF EXISTS `hiring_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hiring_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hiring_collection`
--

LOCK TABLES `hiring_collection` WRITE;
/*!40000 ALTER TABLE `hiring_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `hiring_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_notice`
--

DROP TABLE IF EXISTS `index_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `text` text NOT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_notice`
--

LOCK TABLES `index_notice` WRITE;
/*!40000 ALTER TABLE `index_notice` DISABLE KEYS */;
INSERT INTO `index_notice` VALUES (3,'Para salir de la melancolÃ­a','<p>&iquest;Cu&aacute;ntas depresiones caus&oacute; la &uacute;ltima dictadura? Alrededor de esa pregunta, la directora y escritora Lola Arias presenta una exploraci&oacute;n personal de la vida de su madre a partir del fat&iacute;dico 1976 en que ella naci&oacute;. Y lo hace llevando un paso m&aacute;s adelante el formato de postdrama con el que explor&oacute;, en Mi vida despu&eacute;s, la vida de los j&oacute;venes nacidos bajo la dictadura. Un tejido de recursos visuales, sonoros y literarios que busca en la intimidad el germen de una tristeza del pasado que nos acompa&ntilde;a hasta ahora.</p>\r\n<p class=\"margen0\">Luego de Mi vida despu&eacute;s Lola Arias estrena una obra que bien podr&iacute;a llamarse Mi vida antes. La pieza vuelve sobre 1976, a&ntilde;o que marcar&iacute;a para siempre a los personajes de su trabajo anterior, j&oacute;venes nacidos durante la dictadura militar, cuyas vidas se enlazaban con la historia del pa&iacute;s de un modo diferente en cada caso y en el que lo importante era, m&aacute;s all&aacute; de ese pasado com&uacute;n, el despu&eacute;s, la vida que continuaba. En Melancol&iacute;a y manifestaciones &ndash;tal es el t&iacute;tulo del nuevo espect&aacute;culo&ndash; esta fat&iacute;dica fecha para el pa&iacute;s marca otra cosa. El a&ntilde;o de nacimiento de la misma Lola Arias y el momento en que su madre se convierte en una depresiva sin remedio. La pieza, por lo tanto, hurga en ese pasado: Lola Arias confiesa haber perseguido con &aacute;nimos detectivescos a su madre, armada con un cuaderno y una c&aacute;mara, tratando de entender, de justificar y hasta de re&iacute;rse de aquello que alguna vez la hizo sufrir tanto. La melancol&iacute;a de su madre.</p>\r\n<p>&iquest;Cu&aacute;l es la imagen exacta de la melancol&iacute;a? Para Lars von Trier, una mujer hermosa con vestido de novia que intenta caminar, pero sus pies se empantanan y su cuerpo es atenazado por lianas que la detienen como brazos muy largos. Mucho antes Durero realiz&oacute; el c&eacute;lebre grabado Melancol&iacute;a, en la que se ve una figura que podr&iacute;a ser un &aacute;ngel, algo despeinado y meditabundo, con la cabeza apoyada sobre un pu&ntilde;o. La imagen que Lola Arias eligi&oacute; para iniciar su relato melanc&oacute;lico es la de una persona que no puede salir de la cama. As&iacute; es como Elvira Onetto &ndash;actriz que en la obra va a interpretar el rol de su madre&ndash; tiene un colch&oacute;n atado con un el&aacute;stico a la cintura. Y esas acolchadas flores y nubes celestes son la imagen de fondo, el relax medicado que se convierte en la cotidianidad del depresivo cr&oacute;nico.</p>\r\n<p class=\"letrachica\">Viernes, s&aacute;bado y domingo de abril a las 21. Centro Cultural General San Mart&iacute;n (Sarmiento 1551).</p>','notice.jpg','2013-04-14 03:51:00'),(4,'Juntos somos mÃ¡s inteligentes','<p>Hace dos d&eacute;cadas se lanz&oacute; un sistema que revolucionar&iacute;a la historia del software. Gobiernos, ej&eacute;rcitos, Google, Facebook y tel&eacute;fonos inteligentes usan distintas versiones de Linux, un sistema operativo abierto, libre y sin oficinas centrales.</p>\r\n<p>Existe un mundo m&aacute;s all&aacute; de ventanas y manzanas. Y lleva veinte a&ntilde;os de incre&iacute;ble crecimiento. Linux, el sistema operativo abierto, libre y distribuido es sin&oacute;nimo de confiabilidad para el 80 por ciento de los servidores de Internet, para empresas como Google, para tel&eacute;fonos m&oacute;viles (Android), para las supercomputadoras con cientos de procesadores en Ginebra que aceleran part&iacute;culas, e incluso para la Bolsa de Nueva York. S&iacute;, Wall Street usa Linux. Tambi&eacute;n casi todos los ej&eacute;rcitos del mundo, centros hospitales, autos, trenes, aviones. Pero Linux no tiene oficinas centrales. No tiene un lugar. Se trabaja descentralizadamente en casas personales, dentro de otros proyectos, soportado por empresas que apoyan el de- sarrollo del kernel, el coraz&oacute;n de esta revoluci&oacute;n productiva y cultural. Por ejemplo, ayer la Fundaci&oacute;n Linux anunci&oacute; un proyecto apoyado por el Bank of America, Merrill Lynch, J. P. Morgan Chase y la Bolsa de Nueva York, en donde todas estas compa&ntilde;&iacute;as trabajar&aacute;n colaborativamente en una nueva plataforma basada en Linux. Sin embargo, hay una batalla que Linux nunca pudo ganar: la batalla de las computadoras personales. Si bien son millones de personas que usan una veintena de distribuciones (versiones de Linux con distintos perfiles), la computadora de escritorio no pudo ser masiva bajo Linux todav&iacute;a. &ldquo;Hay una buena noticia&rdquo;, dice en Praga Dirk Hohndel, actualmente en Intel y uno de los programadores de Linux desde el principio: &ldquo;Parece que las computadoras de escritorio van a desaparecer&rdquo;.</p>','linux-con.jpg','2013-04-16 11:48:00');
/*!40000 ALTER TABLE `index_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_photo`
--

DROP TABLE IF EXISTS `index_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_photo`
--

LOCK TABLES `index_photo` WRITE;
/*!40000 ALTER TABLE `index_photo` DISABLE KEYS */;
INSERT INTO `index_photo` VALUES (6,'Sonido en Vivo','','son_index_sonidovivo.jpg'),(7,'Grabaciones','Grabaciones','son_index_grabaciones.jpg'),(8,'Djs','','son_index_djs.jpg'),(9,'Clases','','son_index_clases.jpg'),(10,'Bailes','','son_index_bailes.jpg');
/*!40000 ALTER TABLE `index_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `index_text`
--

DROP TABLE IF EXISTS `index_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `index_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `index_text`
--

LOCK TABLES `index_text` WRITE;
/*!40000 ALTER TABLE `index_text` DISABLE KEYS */;
INSERT INTO `index_text` VALUES (0,'<p style=\"font-size: 20px; text-align: center; font-weight: bolder;\">Sonoric Studios</p>\r\n<p>&nbsp;</p>\r\n<p>En las Instalaciones de Sonoric ubicadas en Ituzaingo &ndash; Zona oeste &ndash; Buenos Aires &ndash; Argentina, tenemos equipos de muy alta calidad en el audio con los mejores precios en la zona. Nos destacamos por el preciso trabajo t&eacute;cnico y profesional de los operadores e Ingenieros que graban a los artistas que nos eligieron. Nos diferenciamos de otros estudios por conseguir el objetivo del artista y m&aacute;s ya que no dejamos ning&uacute;n punto musical fuera de las <strong>ideas</strong> que el artista traiga en mente. Somos profesionales y lo hacemos notar.</p>');
/*!40000 ALTER TABLE `index_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `show`
--

DROP TABLE IF EXISTS `show`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `url_image` varchar(255) DEFAULT 'noshow.jpg',
  `url_moreinfo` varchar(255) DEFAULT NULL,
  `event_date` date NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `show`
--

LOCK TABLES `show` WRITE;
/*!40000 ALTER TABLE `show` DISABLE KEYS */;
INSERT INTO `show` VALUES (1,'<p>Entradas de Sonico!</p>\r\n<ul>\r\n<li>Estadio: Obras Sanitarias. Monte Grande, Ciudad de moron.</li>\r\n<li>asd</li>\r\n<li>asd</li>\r\n</ul>\r\n<p>Apurate que se agotan!</p>','Bateria-Johanna-Loocke.jpg','http://www.sonoricstudios.com','2014-03-23','2013-04-17 12:29:00'),(2,'<p>Imagine Dragons en Obras!</p>\r\n<p>S&aacute;bado 13 de Abril, 19hs.</p>\r\n<p>Entradas Anticipadas $120</p>\r\n<p>Entradas en Puerta $220</p>\r\n<p>Estadio River Plate.</p>','imagine_dragons_logo.jpg','http://www.imaginedragons.com','2014-04-13','2013-04-06 10:30:00');
/*!40000 ALTER TABLE `show` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studio`
--

DROP TABLE IF EXISTS `studio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studio` (
  `id` int(10) unsigned NOT NULL,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studio`
--

LOCK TABLES `studio` WRITE;
/*!40000 ALTER TABLE `studio` DISABLE KEYS */;
INSERT INTO `studio` VALUES (0,'<p style=\"margin-bottom: 0.14in;\">Puedes formar parte de Sonoric Studios grabando tu Promo o tu Disco.</p>\r\n<p style=\"margin-bottom: 0.14in;\">En las Instalaciones de Sonoric ubicadas en Ituzaingo &ndash; Zona oeste &ndash; Buenos Aires &ndash; Argentina, tenemos equipos de muy alta calidad en el audio con los mejores precios en la zona. Nos destacamos por el preciso trabajo t&eacute;cnico y profesional de los operadores e Ingenieros que graban a los artistas que nos eligieron. Nos diferenciamos de otros estudios por conseguir el objetivo del artista y m&aacute;s ya que no dejamos ning&uacute;n punto musical fuera de las <strong>ideas</strong> que el artista traiga en mente. Somos profesionales y lo hacemos notar.</p>\r\n<p style=\"margin-bottom: 0.14in;\">Grabamos con los secuenciadores <strong>Protools TDM</strong> y el software de alta calidad <strong>AU3</strong>. Usamos hardware <strong>M-Audio</strong> y <strong>Digidesign</strong>, tambi&eacute;n tenemos motores de procesos <strong>Avid</strong> para plugins.</p>\r\n<p style=\"margin-bottom: 0.14in;\">Usamos micr&oacute;fonos Shure de la l&iacute;nea SM87A y MXL 990.</p>\r\n<p style=\"margin-bottom: 0.14in;\">Brindamos el m&aacute;ximo sonido plano usando Monitores Yamaha HS50m y JBL EON15G2 lejanos</p>\r\n<p style=\"margin-bottom: 0.14in;\">Consulte sobre los turnos en el estudio</p>\r\n<p style=\"margin-bottom: 0.14in;\">Los precios son variables dependiendo del tipo de trabajo que se vaya a realizar. Los estimativos son de $30 la hora de grabaci&oacute;n, $40 la hora de grabaci&oacute;n con participaci&oacute;n musical del t&eacute;cnico.</p>\r\n<p style=\"margin-bottom: 0.14in;\">Cuando se pide la grabaci&oacute;n de una pista musical el precio rodea entre los $300 y los $600 dependiendo de la cantidad de instrumentos que se necesiten tal como puedan ser Acorde&oacute;n, Trompetas, Tromb&oacute;n, Violines, percusiones adicionales. Estos instrumentos son tocados por cesionistas algunos ajenos al estudio y se limita a instaurar su precio al total del tema a grabar.</p>');
/*!40000 ALTER TABLE `studio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','06ba9c142f12757f9cabefc2f0ab534e14d08393','admin','2013-03-04 05:40:00'),(6,'manu','32a79dab4e2b77187f1adb714c8db58f78154b77','emanuel','2013-03-04 09:30:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videoclip`
--

DROP TABLE IF EXISTS `videoclip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videoclip` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `url_image` varchar(255) NOT NULL DEFAULT 'noimage.jpg',
  `url_sample_video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videoclip`
--

LOCK TABLES `videoclip` WRITE;
/*!40000 ALTER TABLE `videoclip` DISABLE KEYS */;
INSERT INTO `videoclip` VALUES (0,'<p style=\"margin-bottom: 0.14in;\"><span style=\"color: #c00000;\"><strong>Sonoric Films</strong></span></p>\r\n<p>Direcci&oacute;n General: Santiago Bejarano</p>\r\n<p>Sonoric Films es una extensi&oacute;n dedicada al trabajo profesional de producci&oacute;n audio visual que cuenta con personal especializado en el &aacute;rea. Mentes frescas e ideas emprendedoras para su producto.</p>','imageVideoclip_0.png','4iMJ5eK2IDc');
/*!40000 ALTER TABLE `videoclip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videoclip_combos`
--

DROP TABLE IF EXISTS `videoclip_combos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videoclip_combos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `work_estimated` varchar(45) DEFAULT NULL,
  `work_duration` varchar(45) DEFAULT NULL,
  `work_cost` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videoclip_combos`
--

LOCK TABLES `videoclip_combos` WRITE;
/*!40000 ALTER TABLE `videoclip_combos` DISABLE KEYS */;
INSERT INTO `videoclip_combos` VALUES (1,'Clase A','<p>&nbsp;</p>\r\n<ul>\r\n<li>\r\n<p>Tomas de calidad H.D (Aptas para pantalla ancha)</p>\r\n</li>\r\n<li>\r\n<p>Guion personalizado.</p>\r\n</li>\r\n<li>\r\n<p>Iluminaci&oacute;n natural ( no brinda equipos de luz)</p>\r\n</li>\r\n<li>\r\n<p>Montaje de tomas.</p>\r\n</li>\r\n<li>\r\n<p>Correcci&oacute;n b&aacute;sica de color.</p>\r\n</li>\r\n</ul>','1 Semana','2 a 4 minutos','$500 - $1000'),(2,'Clase B','<ul>\r\n<li>\r\n<p>Tomas de calidad H.D (Aptas para pantalla ancha)</p>\r\n</li>\r\n<li>\r\n<p>Fotograf&iacute;a en HD del proyecto</p>\r\n</li>\r\n<li>\r\n<p>Guion personalizado.</p>\r\n</li>\r\n<li>\r\n<p>Iluminaci&oacute;n Artificial base.</p>\r\n</li>\r\n<li>\r\n<p>Montaje de tomas.</p>\r\n</li>\r\n<li>\r\n<p>Correcci&oacute;n de color.</p>\r\n</li>\r\n<li>\r\n<p>FX Moderados.</p>\r\n</li>\r\n</ul>','15 dias','2 a 5 minutos','$800 - $2500'),(3,'Clase C','<ul>\r\n<li>\r\n<p>Tomas de calidad H.D (Aptas para pantalla ancha)</p>\r\n</li>\r\n<li>\r\n<p>Grabaci&oacute;n a 2 c&aacute;maras</p>\r\n</li>\r\n<li>\r\n<p>Guion T&eacute;cnico y Literario.</p>\r\n</li>\r\n<li>\r\n<p>Fotograf&iacute;a HD del proyecto.</p>\r\n</li>\r\n<li>\r\n<p>Iluminaci&oacute;n base</p>\r\n</li>\r\n<li>\r\n<p>Montaje de tomas.</p>\r\n</li>\r\n<li>\r\n<p>Correcci&oacute;n de color intensiva</p>\r\n</li>\r\n<li>\r\n<p>Extras (Actores)</p>\r\n</li>\r\n<li>\r\n<p>Grabaci&oacute;n de Audio (microfoneo y monitoreo)</p>\r\n</li>\r\n<li>\r\n<p>Maquillaje</p>\r\n</li>\r\n<li>\r\n<p>Catering</p>\r\n</li>\r\n<li>\r\n<p>T&iacute;tulos y cr&eacute;ditos personalizados.</p>\r\n</li>\r\n</ul>','40 dias','2 a 10 minutos','$2000 - $5000'),(4,'Clase D','<ul>\r\n<li>\r\n<p>Tomas de calidad H.D Simples</p>\r\n</li>\r\n<li>\r\n<p>Fotograf&iacute;a en HD del proyecto (Pre-show y Post.)</p>\r\n</li>\r\n<li>\r\n<p>Montaje de tomas.</p>\r\n</li>\r\n<li>\r\n<p>Correcci&oacute;n de color.</p>\r\n</li>\r\n<li>\r\n<p>Grabaci&oacute;n Digital en Protools o Adobe del Audio.</p>\r\n</li>\r\n</ul>','1 Semana','10 a 40 minutos','$500 - $1500');
/*!40000 ALTER TABLE `videoclip_combos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sonoricstudios'
--

--
-- Dumping routines for database 'sonoricstudios'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-06-13 17:13:12
