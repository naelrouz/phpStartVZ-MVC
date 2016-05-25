-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2016 г., 16:44
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vz-mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `sort_order`, `name`, `status`) VALUES
(1, 1, 'Топы', 1),
(2, 2, 'Рубашки и блузки', 1),
(3, 3, 'Базовые модели', 1),
(4, 4, 'Платья', 1),
(5, 5, 'Кардиганы и джемперы', 1),
(6, 6, 'Белье', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `preview_img` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `short_content`, `content`, `preview_img`, `author`, `category`) VALUES
(1, 'Someone got Windows 95 running on an Apple Watch, because of course they would', '2016-04-04', 'Windows 95 on an Apple Watch isn''t exactly practical, but it looks like a fun way to relive the 90s on your wrist.', 'Windows 95 on an Apple Watch isn''t exactly practical, but it looks like a fun way to relive the 90s on your wrist.Windows 95 on an Apple Watch isn''t exactly practical, but it looks like a fun way to relive the 90s on your wrist.Windows 95 on an Apple Watch isn''t exactly practical, but it looks like a fun way to relive the 90s on your wrist.', 'http://core2.staticworld.net/images/article/2015/11/powerapps-on-any-device-100630542-carousel.idge.png', 'Torin', 'Music'),
(2, 'The death of Intel''s Atom casts a dark shadow over the rumored Surface Phone', '2016-04-20', 'Windows phone fans have dreamed of a Surface phone that can natively run existing Win32 apps. ', '\r\nAngry Birds Action!\r\n\r\nIf you want your pinball action just a little less chest-burstingly violent, Angry Birds Action!—a freemium iOS offering based on the forthcoming movie—lets you save eggs while bouncing off some obstacles and destroying others. On second thought, maybe this isn’t less violent than the Aliens pinball game.\r\n\r\nBut with Intel''s decision to discontinue its Atom processors for smartphones, that dream is probably dead.\r\n', 'http://core3.staticworld.net/images/article/2016/04/medical_devices-100658766-carousel.idge.jpg', 'Root', 'Sport'),
(3, 'The Week in iPad Cases: New folios for the iPad Pro', '2016-04-12', 'This week''s roundup of new iPad cases features a few new folios for the iPad Pro, from Incase—Incipio, Patchworks, and more.', 'The Poly North Messenger (9.7-inch iPad Pro; $40 through CaseCrown or $42 from Amazon) is a sleek vertical messenger bag with an adjustable shoulder strap for extra comfort.\r\n\r\nMade with water-resistant nylon, the bag features a big main compartment with a number of sections, a padded divider with a dedicated velcro closure for your iPad, and exterior zippered pockets for additional storage. The Poly North Messenger comes in black, brown, or purple.', 'http://core5.staticworld.net/images/article/2016/04/00-intro-100658425-carousel.idge.jpg', 'Nael', 'IT');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommendet` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommendet`, `status`) VALUES
(1, 'Майка из шифона', 1, 0, 999, 1, 'Brand', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6OT_0413_003R.jpg],width[3928],height[4592],x[685],y[217],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Майка из креп-шифона. На майке узкие бретели и спинка-борцовка. Двухслойная, спереди разрез, спинка слегка удлиненная.', 0, 0, 1),
(2, 'Асимметричный топ', 1, 0, 1200, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6RT_0043_004R.jpg],width[4067],height[4755],x[632],y[152],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Полотняный топ без рукавов с треугольным вырезом. Топ сшит в несколько слоев, снизу асимметричный крой. Края обработаны оверлоком.', 1, 1, 1),
(3, 'Трикотажная майка ', 1, 0, 399, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6GT_3161_006R.jpg],width[3546],height[4146],x[719],y[504],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Облегающая майка из мягкого трикотажа.', 0, 0, 1),
(4, 'Топ с открытыми плечами ', 1, 99, 600, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6PT_0256_026R.jpg],rotate[-1.6500000000000008],width[4279],height[5003],x[515],y[235],type[FASHION_FRONT]&hmver=1&call=url[file:/product/main]', 'Тонкий вязаный топ с открытыми плечами из плотной пряжи с перфорацией. На топе волнистый край сверху и короткие рукава.', 1, 1, 1),
(5, 'Топ с треугольным вырезом ', 1, 99, 1999, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6PT_0320_025R.jpg],width[4031],height[4713],x[744],y[122],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Широкий топ из креповой ткани с треугольным вырезом горловины спереди и сзади. На топе кружевная окантовка с кисточками по нижнему краю.', 1, 1, 1),
(6, 'Длинная льняная блузка ', 2, 986, 1200, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6ST_0212_024R.jpg],rotate[-2.4500000000000024],width[3605],height[4215],x[842],y[295],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Длинная блузка из воздушной льняной ткани. На блузке треугольный вырез с маленьким воротником-стойкой. Застежка на пуговицы с перлатутровым блеском спереди. Длинные рукава. Скругленный нижний край, спинка немного удлиннена.', 1, 0, 1),
(7, 'Рубашка с длинным рукавом ', 2, 563452, 1400, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6QT_0028_013R.jpg],width[3439],height[4021],x[765],y[386],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Рубашка с длинным рукавом из воздушного тканого материала со слаб-структурой. На рубашке нагрудный карман. Скругленный нижний край, спинка немного удлиннена.', 0, 0, 1),
(8, 'Атласная майка с кружевом ', 1, 4235, 460, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6TT_0274_009R.jpg],rotate[1.100000000000002],width[3600],height[4209],x[993],y[131],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Атласная майка с треугольным вырезом горловины, отделанным кружевом. Узкие двойные бретели.', 0, 0, 1),
(9, 'Шифоновый топ без рукавов ', 1, 736432, 1240, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6FF_0080_013R.jpg],width[3619],height[4231],x[790],y[155],type[FASHION_FRONT]&hmver=1&call=url[file:/product/main]', 'Шифоновый топ без рукавов. У топа спинка "борцовка" и застежка на потайную кнопку на вороте сзади. Атласная подкладка.', 0, 0, 1),
(10, 'Топ без рукавов ', 1, 9672, 999, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6UT_0108_011R.jpg],width[3505],height[4098],x[889],y[283],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Топ без рукавов из мягкого трикотажа. На топе металлическое украшение у горловины, а также вырез с застежкой сзади. Трикотажная подкладка.', 1, 0, 1),
(11, 'Шифоновый топ без рукавов ', 1, 5234, 1299, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6ST_0458_009R.jpg],width[3361],height[3929],x[939],y[256],type[FASHION_FRONT]&hmver=3&call=url[file:/product/main]', 'Шифоновый топ без рукавов. У топа спинка "борцовка" и застежка на потайную кнопку на вороте сзади. Атласная подкладка.', 0, 0, 1),
(12, 'Короткая майка ', 1, 34532, 999, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6TT_0391_008R.jpg],width[3551],height[4152],x[927],y[346],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Короткая майка с запахом из трикотажа с текстурным узором. У майки треугольный вырез и тонкие бретели. Вырезы по бокам.', 1, 1, 1),
(13, 'Бюстье', 1, 21345, 1299, 1, 'H&M', 'http://lp2.hm.com/hmprod?set=source[/environment/2016/6TT_0373_009R.jpg],width[3481],height[4070],x[801],y[349],type[FASHION_FRONT]&hmver=0&call=url[file:/product/main]', 'Бюстье из текстурного эластичного материала. Втачные чашечки и широкие бретели.', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nael', 'nael_rouz@mail.ru', '123'),
(2, 'test1', 'test1@mail.ru', ''),
(3, 'test2', 'test2@mail.ru', ''),
(4, '12', 'test@mail.ru', '453356'),
(5, '12', 'test@mail.ru', '453356'),
(6, '12', 'test3@mail.ru', '453356'),
(7, '12', 'test3@mail.ru', '453356'),
(8, 'e rtwefwf', 'nael_rouz33@mail.ru', '435r3qfre'),
(9, 'e rtwefwf', 'nael_rouz334@mail.ru', '435r3qfre'),
(10, 'e rtwefwf', 'nael_rouz3e34@mail.ru', '435r3qfre'),
(11, 'ываыв', 'nael_rouz77@mail.ru', 'efvdsv'),
(12, NULL, 'nael_rouz@mail.ru', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sort_order` (`sort_order`),
  ADD KEY `sort_order_2` (`sort_order`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
