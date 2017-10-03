-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 12:02 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_tm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_category_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(65) DEFAULT NULL,
  `directory` varchar(65) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_category_id`, `image`, `directory`, `post_date`) VALUES
(1, 1, 'news1.png', 'img/article/', '2017-09-22 09:57:15'),
(2, 1, 'news2.png', 'img/article/', '2017-09-22 09:57:15'),
(3, 2, 'faq1.png', 'img/article/', '2017-09-22 10:13:55'),
(4, 2, 'faq2.png', 'img/article/', '2017-09-22 10:13:55'),
(5, 2, 'faq3.png', 'img/article/', '2017-09-22 10:14:56'),
(6, 2, 'faq4.png', 'img/article/', '2017-09-22 10:14:56'),
(7, 2, 'faq5.png', 'img/article/', '2017-09-22 10:15:27'),
(8, 2, 'faq6.png', 'img/article/', '2017-09-22 10:15:27'),
(9, 2, 'faq7.png', 'img/article/', '2017-09-22 10:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `directory` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `directory`) VALUES
(1, 'img/article/'),
(2, 'img/article/');

-- --------------------------------------------------------

--
-- Table structure for table `article_category_translation`
--

CREATE TABLE `article_category_translation` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `article_category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_category_translation`
--

INSERT INTO `article_category_translation` (`language_id`, `article_category_id`, `category_name`) VALUES
(1, 1, 'НОВОСТИ'),
(1, 2, 'ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ'),
(2, 1, 'TÄZELIKLER'),
(2, 2, 'KÖP SORALÝAN SORAGLAR');

-- --------------------------------------------------------

--
-- Table structure for table `article_translation`
--

CREATE TABLE `article_translation` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_translation`
--

INSERT INTO `article_translation` (`language_id`, `article_id`, `title`, `body`) VALUES
(1, 1, 'ОТКРЫТИЕ ИНТЕРНЕТ КАФЕ', 'Рады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!'),
(1, 2, 'ОТКРЫТИЕ ИНТЕРНЕТ КАФЕ 2', 'Рады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!\r\n\r\nРады сообщить вам что на территории Школы открылся интернет-кафе и слушателям нашей школы предоставляется бесплатное пользование интернет услугами. Также студентом нашей школы существует 2% скидка в нашем кафе!'),
(1, 3, 'КАКИЕ ПАКЕТЫ ДОКУМЕНТОВ НУЖНЫ ДЛЯ ЗАПИСИ НА КУРСЫ АНГЛИЙСКОГО ЯЗЫКА?', '<b>Для подачи заявления на курсы требуются:</b><ul><li>Копия паспорта (если есть)</li><li>Копия свидетельство о рождении</li><li>Фотография 3х4</li></ul>'),
(1, 4, 'СКОЛЬКО СЛУШАТЕЛЕЙ ЕСТЬ В ОДНОЙ АУДИТОРИИ?', 'Каждая группа состоит из 15 до 20 студентов. Это самое оптимальное количество слушателей в аудитории чтобы у преподавателя была возможность уделить достаточно времени каждому студенту для лучшего усвоения программы.'),
(1, 5, 'КАКИЕ РЕЗУЛЬТАТЫ Я ПОЛУЧУ ПО ОКОНЧАНИИ КУРСОВ?', 'Позитивное отношение к обучению, прогресс и мотивацию для успешного старта вашего бизнеса или повышения уровня вашей профессии! Вы убедитесь, что посещение занятий может быть увлекательным и интересным. Благодаря нашим курсам, у вас появятся новые возможности для общения, саморазвития и карьерного роста. А еще – множество новых дружеских и деловых связей и положительных эмоций.'),
(1, 6, 'КАКИЕ НАИБОЛЕЕ ВАЖНЫЕ КУРСЫ СОВЕТУЕТЕ ПРОЙТИ НАЧИНАЮЩЕМУ ПРЕДПРИНИМАТЕЛЮ?', 'Безусловно всё зависит от типа направления которую вы выбрали для старта вашего бизнеса. Каждый из курсов в Школе предпринимательства направлен именно на развитие той или иной сферы предпринимательской деятельности. Но прежде чем начать свой бизнес в каком бы направлении он не отображал свою отрасль, слушатель должен иметь понятия о старте частного бизнеса. Для бизнесменов начинающих своё дело с нуля существует курс «Введение предпринимательского дела» где слушатели получат полную информацию о правильном ведении бизнеса, заключении контрактов, правовых аспектах предпринимательского дела, а также составление бизнес плана и даже деловой этикет что не маловажно в деловой сфере в современной рыночной экономике. А так же наши преподаватели помогут вам определится с направлением в бизнесе сэкономив этим ваше время и финансы.'),
(1, 7, 'ДЛЯ КОГО СОЗДАНА ШКОЛА ПРЕДПРИНИМАТЕЛЬСТВА?', 'Школа предпринимательства существует для всех кто всё ещё не определился с профессией, а также для всех кто поставил своей целью стать независимыми бизнесменами, и для опытных предпринимателей, финансистов, лингвистов и.т.д. кто не останавливается на достигнутом и решил повысить квалификацию в сфере собственной деятельности.'),
(1, 8, 'МОГУТ ЛИ ПРОЙТИ ОБУЧЕНИЕ В СТОЛИЦЕ ЖИТЕЛИ ДРУГИХ ГОРОДОВ И ВЕЛАЯТОВ?', 'Школа предпринимательства существует во всех велаятах нашей страны, но если по каким-либо причинам вы находитесь далеко от дома, то безусловно вы можете пройти обучение в столице не смотря в каком городе, деревне или велаяте вы живёте или прописаны.'),
(1, 9, 'ПОЧЕМУ Я ДОЛЖЕН ВЫБРАТЬ ВАШУ ШКОЛУ?', 'Школа предпринимательства это единственный в своём роде широкопрофильный учебный центр.\r\nМы используем комплексный подход к обучению, используя те методы, которые оптимальны именно для Вашего уровня и конкретного изучаемого предмета, с учетом осваимости материала нашими слушателями. У нас работают только опытные, дипломированные и квалифицированные преподаватели А также мы предлагаем широкий диапазон разнообразных программ, рассчитанных на учащихся с самым разным уровнем знаний и различными потребностями.\r\nНам очень важно мнение наших слушателей, мы всегда учитываем их пожелания и а также мы предлагаем различное время занятий, утром, днем и вечером.'),
(2, 1, 'INTERNET KAFENIŇ AÇYLYŞY', 'Täzelik hakinda ýazmaly'),
(2, 2, 'INTERNET KAFENIŇ AÇYLYŞY 2', 'Täzelik barada ýazylmaly 2'),
(2, 3, 'IŇLIS DILI KURSYNA ÝAZYLMAK ÜÇIN HAÝSY DOKUMENTLER GEREKLI?', '<b>Kursa ýazylmak üçin:</b><ul><li>Pasportynyň nusgasy (eger bar bolsa)</li><li>Doglyş baradaky şahadatnamanyň nusgasy</li><li>Surat 3х4</li></ul>'),
(2, 4, 'BIR SYNPDA NÄÇE SANY DIŇLEÝJI BAR?', 'Her gruppada 15 we 20 arasynda okuwçy bar.'),
(2, 5, 'KURSY BAŞARYLY GUTARANYMDAN SOŇ NÄHILI BAHALAR ALARYN?', 'Gowy bahalar alarsyňyz'),
(2, 6, 'BAŞLANGYÇ BIR TELEKEÇI ÜÇIN HAÝSY KURSLARY ALMALY MASLAHAT BERÝANIZ?', 'Siziň etýan telekeňize bagly ...'),
(2, 7, 'TELEKEÇILER MEKDEBI KIMLER ÜÇIN DÖREDILDI?', 'Hemme okamak isleýänler üçin ...'),
(2, 8, 'BAŞKA WELAÝATYŇ RAÝATLARAM PAÝTAGTDA OKAP BILERLER MI?', 'Biziň mekdebimiz hemmelere açyk ...'),
(2, 9, 'NÄME ÜÇIN MEN SIZIŇ MEKDEBIŇIZI SAÝLAMALY?', 'Öran köp ugurdan sapak berýaris ...');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `course_id`) VALUES
(1, 5),
(2, 28);

-- --------------------------------------------------------

--
-- Table structure for table `comment_translation`
--

CREATE TABLE `comment_translation` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(65) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_translation`
--

INSERT INTO `comment_translation` (`comment_id`, `language_id`, `name`, `comment`) VALUES
(1, 1, 'ХОДЖАЕВА ОГУЛНУР', '«Я, как слушатель вашей Школы, очень довольна лекциями. Очень интересные, запоминающиеся лекции. Преподаватель очень грамотный, образованный человек. Спасибо ВАМ!»'),
(1, 2, 'HOJAÝEWA OGULNUR', '«Siziň diňleýjiňiz h?kminde, men sapaklaryň gaty gyzykly we peýdaly alynyp barylýanlygyny aýdasym gelýär!»'),
(2, 1, 'ШИХИЕВ Э.', '«Я люблю путешествовать или хочу общаться без переводчиков с иностранными партнерами и есть еще много других причин зачем я учил английский. Доволен методом обучения.»'),
(2, 2, 'ŞIHIÝEW E.', '«Men gezmani halaýaryn. Gezen ýerlerimde terjimesiz gezmek isleýärin.»');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_category_id` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(45) NOT NULL,
  `image` varchar(65) DEFAULT NULL,
  `directory` varchar(75) DEFAULT NULL,
  `price` double NOT NULL,
  `course_period` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_category_id`, `course_code`, `image`, `directory`, `price`, `course_period`) VALUES
(1, 2, 'BUS2', 'bus2.png', 'img/courses/business/', 800, 6),
(2, 2, 'BUS1', 'bus.png', 'img/courses/business/', 530, 8),
(3, 1, 'TKM', 'tur.png', 'img/courses/language/', 500, 7),
(4, 1, 'RUS', 'ru.png', 'img/courses/language/', 500, 4),
(5, 1, 'DEU', 'deu.png', 'img/courses/language/', 1500, 12),
(6, 1, 'JAP', 'jap.png', 'img/courses/language/', 1200, 6),
(7, 1, 'CHI1', 'chi.jpg', 'img/courses/language/', 1200, 7),
(8, 2, 'BUS3', 'bus5.png', 'img/courses/business/', 400, 7),
(9, 2, 'BUS4', 'bus3.png', 'img/courses/business/', 160, 4),
(10, 2, 'BUS5', 'bus4.png', 'img/courses/business/', 200, 4),
(11, 2, 'BUS6', 'bus6.png', 'img/courses/business/', 500, 4),
(12, 3, 'COMP1', 'comp.png', 'img/courses/computer/', 600, 4),
(13, 3, 'COMP2', 'comp2.png', 'img/courses/computer/', 600, 4),
(14, 3, 'COMP3', 'comp3.png', 'img/courses/computer/', 1000, 4),
(15, 3, 'COMP4', 'comp4.png', 'img/courses/computer/', 1000, 4),
(16, 1, 'CHI2', 'chi2.png', 'img/courses/language/', 600, 7),
(17, 5, 'DES1', 'des1.png', 'img/courses/design/', 600, 4),
(18, 5, 'DES2', 'des2.png', 'img/courses/design/', 600, 4),
(19, 5, 'DES3', 'des3.png', 'img/courses/design/\r\n', 300, 4),
(20, 5, 'DES4', 'des4.png', 'img/courses/design/', 750, 4),
(21, 5, 'DES5', 'des5.png', 'img/courses/design/', 3000, 4),
(22, 4, 'QUA1', 'qua.png', 'img/courses/qualification/', 700, 4),
(23, 4, 'QUA2', 'qua1.png', 'img/courses/qualification/', 250, 4),
(24, 4, 'QUA3', 'qua4.png', 'img/courses/qualification/', 250, 4),
(25, 4, 'QUA4', 'qua3.png', 'img/courses/qualification/', 400, 4),
(26, 4, 'QUA5', 'qua5.png', 'img/courses/qualification/', 650, 4),
(27, 4, 'QUA6', 'qua6.png', 'img/courses/qualification/', 300, 4),
(28, 1, 'ENG1', 'eng.png', 'img/courses/language/', 500, 8);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(65) DEFAULT NULL,
  `directory` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `image`, `directory`) VALUES
(1, 'languages.jpg', 'img/course_category/'),
(2, 'businesses.jpg', 'img/course_category/'),
(3, 'computers.jpg', 'img/course_category/'),
(4, 'qualifications.jpg', 'img/course_category/'),
(5, 'designs.jpg', 'img/course_category/'),
(6, 'others.jpg', 'img/course_category/');

-- --------------------------------------------------------

--
-- Table structure for table `course_category_translation`
--

CREATE TABLE `course_category_translation` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `course_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(65) NOT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_category_translation`
--

INSERT INTO `course_category_translation` (`language_id`, `course_category_id`, `name`, `description`) VALUES
(1, 1, 'Языки', NULL),
(1, 2, 'Предпринимательство', NULL),
(1, 3, 'Компьютер', NULL),
(1, 4, 'Квалификации', NULL),
(1, 5, 'Дизайн', NULL),
(1, 6, 'Другие', NULL),
(2, 1, 'Dilleri', NULL),
(2, 2, 'Telekeçi', NULL),
(2, 3, 'Kompýuter', NULL),
(2, 4, 'Kamillesik', NULL),
(2, 5, 'Dizaýn', NULL),
(2, 6, 'Başgalar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_translation`
--

CREATE TABLE `course_translation` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(150) NOT NULL,
  `course_description` text,
  `course_period` varchar(65) NOT NULL,
  `course_price` double NOT NULL,
  `course_level` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_translation`
--

INSERT INTO `course_translation` (`language_id`, `course_id`, `course_name`, `course_description`, `course_period`, `course_price`, `course_level`) VALUES
(1, 1, 'Основы бухгалтерского учета и предпринимательства', NULL, '6 недель', 800, 'Основа'),
(1, 2, 'Основы предпринимательства', NULL, '7 недель', 600, 'Основа'),
(1, 3, 'Туркменский язык', NULL, '7 недель', 500, 'Обший'),
(1, 4, 'Русский язык', NULL, '4 недель', 500, 'Обший'),
(1, 5, 'Немецкий язык', 'Школа предпринимательства приглашает всех желающих познакомиться с прекрасной и старинной европейской культурой на курсы немецкого языка. Германия- это интересная страна с самобытным нравом и богатой историей. Наши преподаватели помогут слушателям преодолеть языковой барьер, уверенно общаться на немецком языке, читать, писать и понимать немецкую речь на слух. А так же помогут освоить грамматику с фразеологическими особенностями глагола. Усиленные занятия методом аудирования и разговорной лексики помогут нашим слушателям приобрести навык грамотного произношения, а также быстро ориентироваться в повседневных и бытовых ситуациях. Курсы немецкого языка проводятся методом создания ситуаций в языковой и культурной среде, что делает процесс обучения довольно интересным и становится ещё одной ступенью для более лёгкого и доступного освоения данным языком. На уроках учащиеся знакомятся с грамматическими и лексическими особенностями и правилами построения предложений. Процесс изучения немецкого требует терпения и усердства, но уже вскоре все старания дадут достойные плоды на ниве взращивания языковой культуры. Вы сможете поддерживать беседу на простые темы, понимать немецкую речь, а также пополнить словарный запас и свободно общаться на немецком языке не только в повседневных ситуациях, но и на различные темы. По окончании курса вы пополните свои знания дополнительным иностранным языком и получите сертификат об окончании, подтверждающий знание немецкого языка.', '12 недель', 1500, 'Обший'),
(1, 6, 'Японский язык', NULL, '6 недель', 1200, 'Обший'),
(1, 7, 'Китайский язык – граматика', NULL, '7 недель', 1200, 'Начальный'),
(1, 8, '1С: Бухгалтерский учет', NULL, '7 недель', 400, 'Основа'),
(1, 9, 'Бизнес планирование', NULL, '4 недель', 200, 'Основа'),
(1, 10, 'Маркетинг', NULL, '4 недель', 200, 'Основа'),
(1, 11, 'Кадровое делопроизводство', NULL, '4 недель', 500, 'Основа'),
(1, 12, 'Основы компьютерной грамотности', NULL, '4 недель', 600, 'Основа'),
(1, 13, 'Компьютерная грамотность – продвинутый уровень', NULL, '4 недель', 600, 'Основа'),
(1, 14, 'Основы программах 3D Max и Auto CAD', NULL, '4 недель', 1000, 'Основа'),
(1, 15, 'Основы программы Archi CAD', NULL, '4 недель', 1000, 'Основа'),
(1, 16, 'Китайский язык - бизнес', NULL, '7 недель', 600, 'Начальный'),
(1, 17, 'Закройщик-портной легкой одежды', NULL, '4 недель', 600, 'Обший'),
(1, 18, 'Дизайн интерьера', NULL, '4 недель', 600, 'Обший'),
(1, 19, 'Садоводство', NULL, '4 недель', 300, 'Обший'),
(1, 20, 'Флористика', NULL, '4 недель', 750, 'Обший'),
(1, 21, 'Ландшафтный дизайн', 'Текст про ландшафт дизайн. ', '4 недель', 3000, 'Обший'),
(1, 22, 'Налоги и право', NULL, '4 недель', 700, 'Основа'),
(1, 23, 'Национальные стандарты финансовой отчетности для предприятий малого и среднего предпринимательства', NULL, '4 недель', 250, 'Основа'),
(1, 24, 'Национальные стандарты финансовой отчетности для коммерческий предприятий', NULL, '4 недель', 250, 'Основа'),
(1, 25, '1С:Бухгалтерский учет', NULL, '4 недель', 400, 'Высший'),
(1, 26, 'Трансформация финансовой отчетности в соответствии с национальными стандартами', NULL, '4 недель', 650, 'Основа'),
(1, 27, 'Международные стандарты финансовой отчетности 4: Договоры страхования', NULL, '4 недель', 300, 'Основа'),
(1, 28, 'Английский язык', 'На сегодняшний день изучение иностранных языков является настоящей необходимостью для построения успешной карьеры, а также это возможность познакомится с культурой других народов и завести множество новых друзей.<br />Наши занятия проводятся на методе построения реальных ситуаций, которые регулярно возникают в повседневном быту, в деловой сфере, в путешествиях, и.т.д. В результате вы сможете уверенно реагировать на те или иные ситуации и поддерживать разговор. А так же вы сможете овладеть деловой лексикой необходимой для ведения переговоров, проведения презентаций и дипломатических бесед с иностранными партнёрами. курсы иностранных языков в школе предпринимательства построены на интенсивной языковой практике. Постоянное общение позволит вам перестать испытывать страх при взаимодействии людьми. Погрузитесь в культурную среду англоговорящего народа, получите необходимые навыки распознавания речи, благодаря чему сможете смотреть фильмы без субтитров, и распознавать речь в современных музыкальных композициях и читать литературу любой сложности. Обучение даёт возможность не просто получить необходимые знания и правильно реагировать на иностранную речь, но и расширить кругозор.', '8 недель', 500, 'Beginer'),
(2, 1, 'Buhgalter hasabynyň we telekeçiligiň esaslary', NULL, '6 hepde', 800, 'Esaslary'),
(2, 2, 'Telekeçiligiň esaslary', NULL, '8 hepde', 530, 'Esaslary'),
(2, 3, 'Türkmen dili', NULL, '7 hepde', 500, 'Umumy'),
(2, 4, 'Rus dili', NULL, '4 hepde', 500, 'Umumy'),
(2, 5, 'Nemes dili', 'Nemes dili barada.', '12 hepde', 1500, 'Umumy'),
(2, 6, 'Ýapon dili', NULL, '6 hepde', 1200, 'Umumy'),
(2, 7, 'Hytaý dili – gramatika', NULL, '7 hepde', 1200, 'Başlangyç'),
(2, 8, '1C: Buhgalter hasaby', NULL, '7 hepde', 400, 'Esaslary'),
(2, 9, 'Biznes meýilnamalaşdyryş', NULL, '4 hepde', 200, 'Esaslary'),
(2, 10, 'Marketing', NULL, '4 hepde', 200, 'Esaslary'),
(2, 11, 'Işgär iş dolandyryjylyk', NULL, '4 Hepde', 500, 'Esaslary'),
(2, 12, 'Kompýuter sowatlylygynyň esaslary', NULL, '4 hepde', 600, 'Esaslary'),
(2, 13, 'Kompýuter sowatlylygy – çylşyrymly tapgyr', NULL, '4 hepde', 600, 'Esaslary'),
(2, 14, '3D Max we Auto CAD programmalarynyň esaslary', NULL, '4 hepde', 1000, 'Esaslary'),
(2, 15, 'Archi CAD programmasynyň esaslary', NULL, '4 hepde', 1000, 'Esaslary'),
(2, 16, 'Işewür hytaý dili', NULL, '7 hepde', 600, 'Başlangyç'),
(2, 17, 'Ýeňil geýimleriň biçimçi-tikinçisi', NULL, '4 hepde', 600, 'Umumy'),
(2, 18, 'Interýerleriň bezegi', NULL, '4 hepde', 600, 'Umumy'),
(2, 19, 'Bagbançylyk', NULL, '4 hepde', 300, 'Umumy'),
(2, 20, 'Floristika', NULL, '4 hepde', 750, 'Umumy'),
(2, 21, 'Landşaft dizaýny', NULL, '4 hepde', 3000, 'Umumy'),
(2, 22, 'Salgytlar we hukuk', NULL, '4 hepde', 700, 'Esaslary'),
(2, 23, 'Kiçi we orta telekeçilik kärhanalary üçin maliýe hasabatlylygynyň milli standartlary', NULL, '4 hepde', 250, 'Esaslary'),
(2, 24, 'Täjirçilik kärhanalary üçin maliýe hasabatlylygynyň milli standartlary', NULL, '4 hepde', 250, 'Esaslary'),
(2, 25, '1C:Buhgalter hasaby', NULL, '4 hepde', 400, 'Ýokary'),
(2, 26, 'Milli standartlara laýyklykda maliýe hasabatlylygynyň üýtgeşmesi (transformasiýasy)', NULL, '4 hepde', 650, 'Esaslary'),
(2, 27, 'Maliýe hasabatlylygynyň halkara standarty 4: Ätiýaçlandyryş şertnamalary', NULL, '4 hepde', 300, 'Esaslary'),
(2, 28, 'Iňlis dili', NULL, '8 hepde', 500, 'Beginer');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(65) NOT NULL,
  `code` varchar(30) NOT NULL,
  `locale` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `directory` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `code`, `locale`, `image`, `directory`) VALUES
(1, 'Руский', 'ru', 'ru', NULL, NULL),
(2, 'Türkmençe', 'tk', 'tk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `image` varchar(65) DEFAULT NULL,
  `directory` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `course_id`, `tel`, `image`, `directory`) VALUES
(1, 28, NULL, 'teacher3.png', 'img/teachers/'),
(2, 2, NULL, 'teacher2.png', 'img/teachers/'),
(3, 3, NULL, 'teacher1.png', 'img/teachers/'),
(4, 4, NULL, 'teacher4.png', 'img/teachers/'),
(5, 5, NULL, 'guncha.png', 'img/teachers/'),
(6, 6, NULL, 'seyitniyazova.png', 'img/teachers/'),
(7, 7, NULL, 'maya.png', 'img/teachers/'),
(8, 28, NULL, 'ayjemal.png', 'img/teachers/'),
(9, 9, NULL, 'mammedowaGul.png', 'img/teachers/'),
(10, 10, NULL, 'ilya.png', 'img/teachers/'),
(11, 11, NULL, 'teacher6.png', 'img/teachers/'),
(12, 12, NULL, 'babayeva.png', 'img/teachers/');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_translation`
--

CREATE TABLE `teacher_translation` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `fathersname` varchar(100) DEFAULT NULL,
  `about` longtext,
  `field` varchar(250) DEFAULT NULL,
  `little_about` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_translation`
--

INSERT INTO `teacher_translation` (`language_id`, `teacher_id`, `firstname`, `surname`, `fathersname`, `about`, `field`, `little_about`) VALUES
(1, 1, 'СОНА', 'БАЙРАМОВА', 'АННАЕВНА', 'Преподаватель английского языка. Выпускница Университета «FATIH» в Стамбуле. Владеет иностранными языками. Сона Аннаевна на своих занятиях применяет комплексный подход к обучению, Чтобы общение было не только свободным, но также максимально грамотным, , не отказываясь от лучшего из опыта более традиционных методик, и использует их положительные моменты для достижения сбалансированных результатов в обучении.', 'ПРЕПОДАВАТЕЛЬ АНГЛИЙСКОГО ЯЗЫКА', 'Выпускница Университета «FATIH» в Стамбуле.'),
(1, 2, 'ЛЕЙЛА', 'ОРАЗОВА', 'АМАНОВНА', 'Преподаватель курсов Основ бухгалтерского учета; МСФО; НСФО; ФУ-1; Трансформация финансовой отчетности. Блестящий профессионал и яркий преподаватель по бухгалтерскому учёту, налогообложению. Умеет вдохновить слушателей своей любовью к бухучету и в простой и доступной форме рассказать обо всех тонкостях работы профессионального бухгалтера. Лейла Амановна окончила Московский технологический институт по специальности бухгалтерский учет и анализ по хозяйственной деятельности. На курсах под руководством этого преподавателя Вы сможете в полной мере освоить профессию бухгалтера и стать квалифицированным специалистом, востребованным на рынке труда!', 'ПРЕПОДАВАТЕЛЬ ОСНОВ БУХГАЛТЕРСКОГО УЧЕТА', 'Трансформация финансовой отчетности.'),
(1, 3, 'САБИНА ', 'ИСМАИЛОВА', 'АЛИКПЕРОВНА', '<b>Предметы:</b> Бизнес планирование; МСФО;  НСФО; ФУ-1. Выпускница Туркменского государственного университета имени Магтымгулы по специальности экономика и право. Сабина Аликперовна имеет множество сертификатов, подтверждающих высочайший уровень профессионализма.<br />Благодаря большому опыту работы, глубоким знаниям и профессионализму, занятия проводит в живой, энергичной атмосфере, используя большое количество заданий и теоретических материалов. Материал преподносит структурировано и делает акцент на самых важных темах, доступно и исчерпывающе отвечает на любые вопросы слушателей. Сабина Аликперовна очень внимательный, тактичный и доброжелательный педагог. Умеет заинтересовать, найти индивидуальный подход к каждому, независимо от возраста и увлечений, и помогает учащимся легко и непринужденно включаться в учебный процесс. Стимулирует своих учеников к личностному росту и профессиональному развитию.', 'ПРЕПОДАВАТЕЛЬ БИЗНЕС ПЛАНИРОВАНИЮ', 'Выпускница Туркменского государственного университета имени Махтымкули.'),
(1, 4, 'АЛТЫН ', 'ГОДЖАЕВА', 'ОРАЗОВНА', 'Талантливый преподаватель-практик, эксперт по трудовому праву и вопросам кадрового делопроизводства. обладает большим опытом практической работы и преподавания. Настоящий профессионал своего дела, проводит занятия в увлекательной и насыщенной форме. Слушатели отмечают эрудированность преподавателя и превосходную подачу материала. Может объяснить доступными словами любую тему, а главное – уделяет максимум внимания решению реальных задач, с которыми сталкивается кадровик на работе. На занятиях приводит множество примеров из собственного практического опыта.', 'ПРЕПОДАВАТЕЛЬ «КАДРОВОЕ ДЕЛОПРОИЗВОДСТВО»', 'Один из лучших преподавателей и лучший специалист по кадровому дело производство.'),
(1, 5, 'ГУНЧА', 'КАРЬЯГДЫЕВА', 'АМАНДУРДЫЕВНА', NULL, NULL, NULL),
(1, 6, 'ЛОЛА', 'СЕЙИТНИЯЗОВА', 'ФУРКАТОВНА', 'Преподователь курсов «Закройщик портной». Высококвалифицированный закройщик, портной, ковровщица. Занятия Лолы Фуркатовны всегда полны оптимизма погружённый в мир создания красивой одежды, её занятия для начинающих включает базовые дисциплины и вспомогательные, направленные на развитие творческого потенциала и применение полученных знаний на практике. На занятиях Лолы Фуркатовны слушатели учатся разработкам информационно-учебного цикла по основам расчетно-графического конструирования и моделирования одежды, по моделированию и изготовлению одежды методом наколки (макет, муляж), а также особенностям проектирования систем одежды и нетривиальных технологий в моделировании и изготовлении одежды\". Окончив курсы под руководством данного преподавателя вы будете готовы к созданию собственного портфолио.', NULL, NULL),
(1, 7, 'МАЯ ', 'АЛЛАКУЛИЕВА', 'ТОРЕМУРАДОВНА', 'Преподаватель английского языка. Выпускница национального института иностранных языков, филологического факультета. А так же успешно окончила колледж Графтан в Великобритании. Свободно владеет разными иностранными языками. Её опыт преподавания позволил обозначить типичные сложности, с которыми сталкиваются студенты при изучении иностранных языков. Мая Торемурадовна обращает особое внимание на обучение пониманию на слух (аудированию), правильное применение в речи грамматического  материала, использование лексики в контексте и, главное, грамотное формулирование своих мыслей на изучаемом языке.', NULL, NULL),
(1, 8, 'АЙДЖЕМАЛ', 'БАЙРАМОВА', 'МУРАДОВНА', 'Преподаватель английского языка. Выпускница института международных отношений Туркменистана. Благодаря Айджемал Мурадовна преподаёт методом коммуникативных заданий и стремится проводить занятия только на изучаемом языке и требует студентов поступать так же. Благодаря этому студенты погружаются в языковую среду и начинают общаться на иностранном языке уже с первых уроков.', 'ПРЕПОДАВАТЕЛЬ АНГЛИЙСКОГО ЯЗЫКА', 'Выпускница института международных отношений Туркменистана.'),
(1, 9, 'ГУЛЬНАРА', 'МАММЕДОВА', NULL, 'Преподаватель по введению в предпринимательство должен быть всегда в курсе современных тенденций в этой области, но не менее важно, чтобы он был человеком позитивно настроенным и креативным. Тогда слушателям намного проще воспринимать даже достаточно сложную информацию. Именно так происходит на занятиях Гульнары. Она щедро делится знаниями в области предпринимательства и буквально заряжает своим оптимизмом тех, кто проходит к ней на курс. Не случайно Гульнара неизменно получает благодарные отзывы слушателей.', NULL, NULL),
(1, 10, 'ИЛЬЯ', 'ОРАЗМУХАММЕДОВ', 'НУРМУХАММЕДОВИЧ', 'Преподаватель курсов компьютерной грамотности а так же различных вид компьютерной графики. профессионал своего дела. Основная цель – донести понимание предмета, закрепить знания при выполнении практических работ и развить творческое мышление слушателей. Слушатели курсов под руководством этого преподавателя быстро усваивают новый материал и сразу же используют полученные знания на практике. Всегда в курсе новаторства компьютерных программ. На его занятиях всегда есть чем пополнить знания из мира новых технологий.', NULL, NULL),
(1, 11, 'ИМЯ', 'ФАМИЛИЯ', 'ОТЧЕСТВО', NULL, NULL, NULL),
(1, 12, 'ИМЯ', 'ФАМИЛИЯ', 'ОТЧЕСТВО', NULL, NULL, NULL),
(2, 1, 'SONA', 'BAÝRAMOWA', 'ANNAÝEWNA', NULL, 'IŇLIS DILI MUGALLYMY', 'Stanbuldaky Fatih Uniýersitediniň talyby.'),
(2, 2, 'LEÝLA', 'ORAZOWA', 'AMANOWNA', NULL, 'BUGALTER HASAPÇYLYGYNYN MUGALLYMY', 'Finans transformasiýasy'),
(2, 3, 'SABINA', 'ISMAILOWA', 'ALIKPEROWNA', NULL, 'TÄJIRÇILIK IŞLERINIŇ MEÝILNAMASYNYŇ MUGALLYMY', 'Magtymguly adyndaky Türkmen Döwlet Unýersitediniň talyby.'),
(2, 4, 'ALTYN', 'GOJAÝEWA', 'ORAZOWNA', NULL, 'IŞGÄR IŞ DOLANDYRYJYLYK MUGALLYMY', 'Öz işini başarýan we ökde mugallym.'),
(2, 5, 'GUNÇA', 'GARÝAGDYÝEWA', 'AMANDURDYÝEWNA', NULL, NULL, NULL),
(2, 6, 'LOLA', 'SEÝITNIÝAZOWA', 'FURKATOWNA', NULL, NULL, NULL),
(2, 7, 'MAÝA', 'ALLAKULYÝEWA', 'TÖREMYRADOWNA', NULL, NULL, NULL),
(2, 8, 'AÝJEMAL', 'BAÝRAMOWA', 'MYRADOWNA', NULL, NULL, NULL),
(2, 9, 'GÜLNARA', 'MÄMMEDOWA', NULL, NULL, NULL, NULL),
(2, 10, 'ILÝA', 'ORAZMUHAMMEDOW', 'NURMUHAMMEDOWIÇ', NULL, NULL, NULL),
(2, 11, 'ADY', 'FAMILIÝASY', 'ATASYNYŇ ADY', NULL, NULL, NULL),
(2, 12, 'ADY', 'FAMILIÝASY', 'ATASYNYŇ ADY', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_article_category1_idx` (`article_category_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category_translation`
--
ALTER TABLE `article_category_translation`
  ADD PRIMARY KEY (`language_id`,`article_category_id`),
  ADD KEY `fk_article_category_translation_language1_idx` (`language_id`),
  ADD KEY `fk_article_category_translation_article_category1_idx` (`article_category_id`);

--
-- Indexes for table `article_translation`
--
ALTER TABLE `article_translation`
  ADD PRIMARY KEY (`language_id`,`article_id`),
  ADD KEY `fk_article_translation_language1_idx` (`language_id`),
  ADD KEY `fk_article_translation_article1_idx` (`article_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_course1_idx` (`course_id`) USING BTREE;

--
-- Indexes for table `comment_translation`
--
ALTER TABLE `comment_translation`
  ADD PRIMARY KEY (`comment_id`,`language_id`),
  ADD KEY `fk_comment_translation_language1_idx` (`language_id`),
  ADD KEY `fk_comment_translation_comment1_idx` (`comment_id`) USING BTREE;

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_course_category1_idx` (`course_category_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category_translation`
--
ALTER TABLE `course_category_translation`
  ADD PRIMARY KEY (`language_id`,`course_category_id`),
  ADD KEY `fk_course_category_translation_language1_idx` (`language_id`),
  ADD KEY `fk_course_category_translation_course_category1_idx` (`course_category_id`);

--
-- Indexes for table `course_translation`
--
ALTER TABLE `course_translation`
  ADD PRIMARY KEY (`language_id`,`course_id`),
  ADD KEY `fk_course_translation_language1_idx` (`language_id`),
  ADD KEY `fk_course_translation_course1_idx` (`course_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`),
  ADD UNIQUE KEY `locale_UNIQUE` (`locale`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teacher_course1_idx` (`course_id`) USING BTREE;

--
-- Indexes for table `teacher_translation`
--
ALTER TABLE `teacher_translation`
  ADD PRIMARY KEY (`language_id`,`teacher_id`),
  ADD KEY `fk_teacher_translation_language_idx` (`language_id`),
  ADD KEY `fk_teacher_translation_teacher1_idx` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_article_category1` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `article_category_translation`
--
ALTER TABLE `article_category_translation`
  ADD CONSTRAINT `fk_article_category_translation_article_category1` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_category_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `article_translation`
--
ALTER TABLE `article_translation`
  ADD CONSTRAINT `fk_article_translation_article1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_course_course_category1_idx` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment_translation`
--
ALTER TABLE `comment_translation`
  ADD CONSTRAINT `fk_comment_translation_comment1_idx` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_translation_language1_idx` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_course_course_category1` FOREIGN KEY (`course_category_id`) REFERENCES `course_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `course_category_translation`
--
ALTER TABLE `course_category_translation`
  ADD CONSTRAINT `fk_course_category_translation_course_category1` FOREIGN KEY (`course_category_id`) REFERENCES `course_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_course_category_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `course_translation`
--
ALTER TABLE `course_translation`
  ADD CONSTRAINT `fk_course_translation_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_course_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_teacher_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teacher_translation`
--
ALTER TABLE `teacher_translation`
  ADD CONSTRAINT `fk_teacher_translation_language` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teacher_translation_teacher1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
