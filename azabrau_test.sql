-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Eki 2022, 10:05:19
-- Sunucu sürümü: 5.7.38
-- PHP Sürümü: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `azabrau_test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `desc`, `slug_az`, `slug_en`, `slug_ru`, `created_at`, `updated_at`) VALUES
(8, '202210100756nathaniel-kohfield-EMrhlmTDUSg-unsplash 1.png', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', '{\"az\":\"<p>Abrau Winonah De - alkoqolsuz sərinləşdirici i&ccedil;kilərin yeni kolleksiyası az&nbsp;</p>\\n\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"<p>Abrau Winonah De - alkoqolsuz sərinləşdirici i&ccedil;kilərin yeni kolleksiyası ru&nbsp;</p>\\n\"}', 'news-8-az', 'news-8-en', 'news-8-ru', '2022-10-10 03:56:07', '2022-10-19 07:52:05'),
(9, '202210100756aesop-wines-yH6kh_DGBHY-unsplash 2.png', '{\"az\":\"sdfg\",\"en\":\"sdf\",\"ru\":\"sdfg\"}', '{\"az\":\"sdfg\",\"en\":\"sdf\",\"ru\":\"sdfg\"}', 'news-9-az', 'news-9-en', 'news-9-ru', '2022-10-10 03:56:30', '2022-10-11 06:07:56'),
(10, '202210101019slider1.jpg', '{\"az\":\"asdf az\",\"en\":\"asdf\",\"ru\":\"asdf ru\"}', '{\"az\":\"<p>asdfasdf az</p>\\n\",\"en\":\"<p>safasdf</p>\\n\",\"ru\":\"<p>asdf ru</p>\\n\"}', 'news-10-az', 'news-10-en', 'news-10-ru', '2022-10-10 06:19:47', '2022-10-20 02:32:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug_az`, `slug_en`, `slug_ru`, `cat_id`, `created_at`, `updated_at`) VALUES
(9, '{\"az\":\"Şəki şərabı \",\"en\":\"Şəki şərabı\",\"ru\":\"Şəki şərabı ru\"}', 'seki-serabi-az', 'seki-serabi-en', 'seki-serabi-ru', '0', '2022-10-11 03:03:23', '2022-10-20 02:33:09'),
(10, '{\"az\":\"AzAbrau az\",\"en\":\"AzAbrau\",\"ru\":\"AzAbrau ru\"}', 'azabrau-az', 'azabrau-en', 'azabrau-ru', '0', '2022-10-11 03:03:36', '2022-10-11 05:35:45'),
(11, '{\"az\":\"Yüngül şərablar az\",\"en\":\"Yüngül şərablar\",\"ru\":\"Yüngül şərablar ru\"}', 'yungul-serablar-az', 'yungul-serablar-en', 'yungul-serablar-ru', '9', '2022-10-11 03:03:47', '2022-10-11 05:37:35'),
(12, '{\"az\":\"Portveyn az\",\"en\":\"Portveyn\",\"ru\":\"Portveyn ru\"}', 'portveyn-az', 'portveyn-en', 'portveyn-ru', '9', '2022-10-11 03:03:55', '2022-10-11 05:36:13'),
(13, '{\"az\":\"Alkaqolsuz içkilər az\",\"en\":\"Alkaqolsuz içkilər\",\"ru\":\"Alkaqolsuz içkilər ru\"}', 'alkaqolsuz-ickiler-az', 'alkaqolsuz-ickiler-en', 'alkaqolsuz-ickiler-ru', '10', '2022-10-11 03:04:14', '2022-10-11 05:37:52'),
(14, '{\"az\":\"Yüksək alkoqollu içkilər az\",\"en\":\"Yüksək alkoqollu içkilər\",\"ru\":\"Yüksək alkoqollu içkilər ru\"}', 'yuksek-alkoqollu-ickiler-az', 'yuksek-alkoqollu-ickiler-en', 'yuksek-alkoqollu-ickiler-ru', '10', '2022-10-11 03:04:25', '2022-10-11 05:38:00'),
(15, '{\"az\":\"Köpüklü şərablar az\",\"en\":\"Köpüklü şərablar\",\"ru\":\"Köpüklü şərablar ru\"}', 'kopuklu-serablar-az', 'kopuklu-serablar-en', 'kopuklu-serablar-ru', '10', '2022-10-11 03:04:35', '2022-10-11 05:38:04'),
(16, '{\"az\":\"Yüngül şərablar az\",\"en\":\"Yüngül şərablar\",\"ru\":\"Yüngül şərablar ru\"}', 'yungul-serablar-az', 'yungul-serablar-en', 'yungul-serablar-ru', '10', '2022-10-11 03:04:45', '2022-10-11 05:38:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wp_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `phone_2`, `address`, `email`, `fb_link`, `wp_link`, `insta_link`, `created_at`, `updated_at`) VALUES
(7, '+944 50 123 45 67', '+944 50 123 45 67', '{\"az\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan az\",\"en\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan\",\"ru\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan ru\"}', 'info@azabrau.az', 'google.com', 'google.com', 'google.com', '2022-09-01 08:04:51', '2022-10-20 02:29:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msj` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `msj`, `created_at`, `updated_at`, `surname`, `phone`) VALUES
(2, 'sa', 'dev@gmail.com', 'dsa', '2022-10-19 02:01:08', '2022-10-19 02:01:08', 'dsa', '(050) 468 68 68'),
(3, 'sa', 'dev@gmail.com', 'dsa', '2022-10-19 02:01:22', '2022-10-19 02:01:22', 'dsa', '(050) 468 68 68'),
(4, 'Kondisioner', 'dev@gmail.com', 'eretr', '2022-10-19 02:07:03', '2022-10-19 02:07:03', 'test1', '(050) 468 68 68');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_18_053707_create_sliders_table', 2),
(6, '2022_08_18_065543_create_contacts_table', 3),
(7, '2022_08_18_102350_create_blogs_table', 4),
(8, '2022_08_18_131912_create_messages_table', 5),
(9, '2022_09_27_110621_create_news_table', 6),
(10, '2022_09_28_080843_create_categories_table', 7),
(11, '2022_09_29_101613_create_sales__points_table', 8),
(12, '2022_09_30_065529_create_products_table', 9),
(13, '2022_10_03_060710_create_pages_table', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_off` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `page_az`, `page_en`, `page_ru`, `slug_az`, `slug_en`, `slug_ru`, `title_az`, `title_en`, `title_ru`, `description_az`, `description_en`, `description_ru`, `keywords_az`, `keywords_en`, `keywords_ru`, `viewname`, `route`, `parent_id`, `on_off`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 'Əsas səhifə', 'Home Page', 'Home Page', '/', '/', '/', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'index', 'index', '0', '1', '1', '2022-10-10 00:41:25', '2022-10-19 04:02:33'),
(2, 'Əlaqə', 'Contact-en', 'Contact-ru', 'elaqe', 'contact', 'contact-ru', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'contact', 'contact', '0', '1', '6', '2022-10-10 01:27:45', '2022-10-19 04:03:00'),
(4, 'Haqqimizda', 'About', 'About-ru', 'haqqimizda', 'about', 'about-ru', 'Haqqimizda', 'About', 'About-ru', 'Haqqimizda', 'About', 'About-ru', 'Haqqimizda', 'About', 'About-ru', 'about', 'about', '0', '1', '2', '2022-10-10 02:12:21', '2022-10-19 04:02:38'),
(5, 'Məhsullar', 'AZ ABRAU', 'AZ ABRAU', 'mehsullar', 'products', 'products-ru', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'products', 'products', '0', '1', '3', '2022-10-10 02:14:00', '2022-10-19 04:02:42'),
(6, 'SATIŞ MƏNTƏQƏLƏRİ', 'SATIŞ MƏNTƏQƏLƏRİ-en', 'SATIŞ MƏNTƏQƏLƏRİ-ru', 'satis-menteqeleri', 'satis-menteqeleri-en', 'satis-menteqeleri-ru', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis_menteqeleri', 'satis_menteqeleri', '0', '1', '4', '2022-10-10 02:14:46', '2022-10-19 04:02:49'),
(7, 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'xeberler', 'news', 'xeberler-ru', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'news', 'news', '0', '1', '5', '2022-10-10 02:15:39', '2022-10-19 04:02:55'),
(8, 'Single News', 'Single News', 'Single News', 'xeberler', 'news', 'xeberler-ru', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'news_single', 'news_single', '0', '0', '7', '2022-10-10 07:27:29', '2022-10-12 02:43:52'),
(9, 'Single Product', 'Single Product', 'Single Product', 'mehsullar', 'products', 'products-ru', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single_product', 'single_product', '0', '0', '9', '2022-10-11 03:56:33', '2022-10-12 02:47:24'),
(10, 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', '0', '0', '12', '2022-10-13 00:39:46', '2022-10-13 00:39:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cesid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spirt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `menseyi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `istehsal_il` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `terkibi` longtext COLLATE utf8mb4_unicode_ci,
  `uygunluq` longtext COLLATE utf8mb4_unicode_ci,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saxlama_formasi` longtext COLLATE utf8mb4_unicode_ci,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sifaris` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `cesid`, `spirt`, `thumbnail`, `title`, `menseyi`, `istehsal_il`, `desc`, `terkibi`, `uygunluq`, `temp`, `saxlama_formasi`, `cat_id`, `slug_az`, `slug_ru`, `created_at`, `updated_at`, `sifaris`) VALUES
(12, '{\"az\":\"Abrau Light Ağ kəmşirin\",\"en\":\"\",\"ru\":\"Abrau Light Белый полусладкий\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '8%', '202210191318mehsul01.png', '{\"az\":\"Yüngül köpüklənən açıq saman rəngli almanın və tropik meyvələr-quava, manqo ətirlərinin ahəngdar birləşməsi ilə içki\",\"en\":\"\",\"ru\":\"Легкий игристый напиток светло-соломенного цвета с гармоничным сочетанием ароматов яблока и тропических фруктов — гуавы, манго\"}', '{\"az\":\"Rusiya\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>A&ccedil;ıq saman rəngli k&ouml;p&uuml;klənən i&ccedil;ki&nbsp;</p>\\n\\n<p>Y&uuml;ng&uuml;l k&ouml;p&uuml;klənən a&ccedil;ıq saman rəngli almanın və tropik meyvələr-quava, manqo ətirlərinin ahəngdar birləşməsi ilə i&ccedil;ki.</p>\\n\\n<p>Zərif turşuluq təamı ilə xoş şirin ağızda qalan dad təkrarolunmaz təravət hissi bəxş edir. Bununla belə Abrau Light-ın tərkibində cəmi 8% spirt var.</p>\\n\\n<p>İdeal aperitif, buz və buğu ilə olan kokteyl meyvəli desertlərin və musların əsasını təşkil edir.</p>\\n\",\"en\":\"\",\"ru\":\"<p>Игристый напиток светло-соломенного цвета.&nbsp;</p>\\n\\n<p>Легкий игристый напиток светло-соломенного цвета с гармоничным сочетанием ароматов яблока и тропических фруктов &mdash; гуавы, манго.</p>\\n\\n<p>Приятное сладкое послевкусие с нежной кислинкой дарит неповторимое ощущение свежести. При этом Abrau Light cодержит всего 8% алкоголя.</p>\\n\\n<p>Идеальный аперитив, основа коктейлей со льдом и пара фруктовым десертам и муссам.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'abrau-light-ag-kemshirin', 'abrau-light-beliy-polusladkiy', '2022-10-19 10:18:52', '2022-10-20 08:44:17', 'http://azabrau.testjed.me/mehsullar'),
(13, '{\"az\":\"Abrau Light Qırmızı kəmşirin\",\"en\":\"\",\"ru\":\"Abrau Light Красный полусладкий\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '8%', '202210191321mehsul01.png', '{\"az\":\"\\\"İzabella\\\" və \\\"Kaberne\\\" üzüm sortlarının tanınmış notları ilə zənginləşdirilmiş köpüklənən tünd yaqut rəngli içki\",\"en\":\"\",\"ru\":\"Насыщенный игристый напиток глубокого рубинового цвета с узнаваемыми нотами винограда сортов «изабелла» и «каберне»\"}', '{\"az\":\"Rusiya\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>&quot;İzabella&quot; və &quot;Kaberne&quot; &uuml;z&uuml;m sortlarının tanınmış notları ilə zənginləşdirilmiş k&ouml;p&uuml;klənən t&uuml;nd yaqut rəngli i&ccedil;ki.</p>\\n\\n<p>Sevimli &uuml;z&uuml;m sortlarının zəngin buketinin və y&uuml;ng&uuml;l xoş dadın birləşməsi təkrarolunmaz hisləri oyadır. Bununla belə Abrau Light-ın tərkibində cəmi 8% spirt var.</p>\\n\\n<p>Kokteyllərin parlaq bəzəti və desertlərə g&ouml;zəl c&uuml;tl&uuml;k.<br />\\n&nbsp;</p>\\n\",\"en\":\"\",\"ru\":\"<p>Насыщенный игристый напиток глубокого рубинового цвета с узнаваемыми нотами винограда сортов &laquo;изабелла&raquo; и &laquo;каберне&raquo;.</p>\\n\\n<p>Сочетание богатого букета любимых сортов винограда и легкого приятного вкуса пробуждает неповторимые ощущения. При этом Abrau Light cодержит всего 8% алкоголя.</p>\\n\\n<p>Яркое украшение коктейлей, прекрасная пара к десертам.<br />\\n&nbsp;</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'abrau-light-girmizi-kemshirin', 'abrau-light-krasniy-polusladkiy', '2022-10-19 10:21:51', '2022-10-20 04:13:16', 'http://azabrau.testjed.me/mehsullar'),
(14, '{\"az\":\"Abrau Light Çəhrayı kəmşirin\",\"en\":\"\",\"ru\":\"Abrau Light Розовый полусладкий\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '8%', '202210191324mehsul01.png', '{\"az\":\"Nəcib çəhrayı rəngli köpüklənən içki\",\"en\":\"\",\"ru\":\"Игристый напиток благородного розового цвета\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>Nəcib &ccedil;əhrayı rəngli k&ouml;p&uuml;klənən i&ccedil;ki.</p>\\n\\n<p>Zərif &ccedil;i&ccedil;ək notları ilə &ccedil;iyələk və şirəli manqonun ətirlərinin ahəngdar birləşməsi ilə y&uuml;ng&uuml;l i&ccedil;ki.</p>\\n\\n<p>Zərif turşuluq təamı ilə ağızda qalan xoş dad təkrarolunmaz təravət hissi bəxş edir. Tərkibində cəmi 8% spirt var. Bizim istehlak&ccedil;ılarımız arasında dad lideri.</p>\\n\\n<p>Kokteyllərin əsası, Asiya mətbəxi və desertlər &uuml;&ccedil;&uuml;n c&uuml;tl&uuml;k olan qırmızı aperitif.</p>\\n\",\"en\":\"\",\"ru\":\"<p>Игристый напиток благородного розового цвета.</p>\\n\\n<p>Легкий напиток с гармоничным сочетанием ароматов клубники и сочного манго с нежными цветочными нотками.</p>\\n\\n<p>Приятное послевкусие с тонкой кислинкой дарит неповторимое ощущение свежести. Содержит всего 8% алкоголя. Лидер вкуса среди наших потребителей.</p>\\n\\n<p>Красивый аперитив, основа коктейлей, пара для блюд азиатской кухни и десертов.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'abrau-light-chehrayi-kemshirin', 'abrau-light-rozviy-polusladkiy', '2022-10-19 10:24:36', '2022-10-20 04:14:20', 'http://azabrau.testjed.me/mehsullar'),
(15, '{\"az\":\"Abrau Light Zero\",\"en\":\"\",\"ru\":\"Abrau Light Zero\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '0%', '202210191328mehsul01.png', '{\"az\":\"Gənc, aktiv və parlaq olanlar üçün \\\"Abrau-Dürso\\\" şampan notları ilə alkoqolsuz köpüklənən içki\",\"en\":\"\",\"ru\":\"Безалкогольный искристый напиток с нотками шампанского «Абрау-Дюрсо» для молодых, активных и ярких\"}', '{\"az\":\"Rusiya\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>Abrau-D&uuml;rsonun &ouml;z məhsulları xəttindəki ilk alkoqolsuz k&ouml;p&uuml;klənən i&ccedil;ki. Sevimli k&ouml;p&uuml;klənən i&ccedil;kinin dadını maksimum dərəcədə təkrarlayır, i&ccedil;məyənlər, pəhriz saxlayanlar, s&uuml;kan arxasında olanlar və ya sadəcə bu g&uuml;n i&ccedil;məməyə &uuml;st&uuml;nl&uuml;k verənlər &uuml;&ccedil;&uuml;n idealdır.</p>\\n\",\"en\":\"\",\"ru\":\"<p>Первое безалкогольное игристое в линейке собстсвенных продуктов Абрау-Дюрсо. Максимально повторяет вкус любимого игристого, идеален для тех, кто не пьет, соблюдает диету, находится за рулем или просто предпочитает не пить сегодня.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'abrau-light-zero', 'abrau-light-zero', '2022-10-19 10:28:36', '2022-10-20 03:25:37', 'http://azabrau.testjed.me/mehsullar'),
(16, '{\"az\":\"Abrau Junior Çəhrayı\",\"en\":\"\",\"ru\":\"Abrau Junior Розовое\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '0%', '202210191331mehsul01.png', '{\"az\":\"Yayın və cənub günəşinin atmosferini özünə hopdurmuş istənilən uşaq şənliyini bəzəyəcək və xoş dadla sevindirəcək yüngül təravətləndirici içki\",\"en\":\"\",\"ru\":\"Лёгкий освежающий напиток, впитавший атмосферу лета и южного солнца, украсит любое детское торжество и порадует приятным вкусом\"}', '{\"az\":\"Rusiya\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '16', 'abrau-junior-chehrayi', 'abrau-junior-rozviy', '2022-10-19 10:31:19', '2022-10-20 04:15:35', 'http://azabrau.testjed.me/mehsullar'),
(17, '{\"az\":\"Kupaj ağ Abrau\",\"en\":\"\",\"ru\":\"Купаж белый Абрау\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11%', '202210191333mehsul01.png', '{\"az\":\"Motmutunun parlaq, dərin qaymaqlı notları və zərif çiçək çalarlarının zərif ətri ilə şərab\",\"en\":\"\",\"ru\":\"Вино с ярким ароматом крыжовника, глубокими сливочными нотами и нежными цветочными оттенками\"}', '{\"az\":\"Azərbaycan\",\"en\":\"\",\"ru\":\"Азербайджан\"}', '{\"az\":\" \",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>&quot;Abrau Kupaj&quot; Krasnodar ərazisində əl ilə toplanmış Riesling və Rkatsiteli &uuml;z&uuml;m sortlarından yaradılmış, ağ -ağ kəmşirin qarışdırılmış şərab. Y&uuml;ksək keyfiyyətin rəhni se&ccedil;mə &uuml;z&uuml;md&uuml;r, xarici texnoloqların cəlb edilməsi ilə b&uuml;t&uuml;n istehsal prosesinə ciddi nəzarət və şərab&ccedil;ıların fikrini təcəss&uuml;m etdirməyə imkan verən m&uuml;asir avadanlıqdır. Parlaq meyvəli təravətinin və y&uuml;ng&uuml;ll&uuml;y&uuml;n&uuml;n qorunub saxlanılması &uuml;&ccedil;&uuml;n şərab &ccedil;əlləkdə uzun m&uuml;ddət saxlanılmır. Cavan və qastronomik olan bu şərab dostlarla əyləncə məclislərinin, piknikləri nvə nahar yeməyinin əla m&uuml;şayiət&ccedil;isi olacaqdır.</p>\\n\",\"en\":\"\",\"ru\":\"<p>&laquo;Абрау Купаж&raquo; белый &ndash; белое полусладкое ассаблированное вино, созданное из винограда сортов Рислинг и Ркацители, собранных вручную на территории Краснодарского края. Залогом высокого качества является отборный виноград, строгий контроль всего процесса производства с привлечением иностранных технологов и современное оборудование, позволяющее воплотить задумку виноделов. Вино не выдерживается в бочке для сохранения яркой фруктовой свежести и легкости. Молодое и гастрономичное, это вино станет отличным сопровождением посиделок с друзьями, пикников и обеденной трапезы.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'kupaj-ağ-abrau', 'kupaj-beliy-abrau', '2022-10-19 10:33:11', '2022-10-20 04:16:12', 'http://azabrau.testjed.me/mehsullar'),
(18, '{\"az\":\"Kupaj qırmızı Abrau\",\"en\":\"\",\"ru\":\"Купаж красный Абрау\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11%', '202210191336mehsul01.png', '{\"az\":\"Uzun müddət ağızda qalan dada malik təzə giləmeyvə və albalı cemi ətirlərinin zəngin qamması ilə şərab\",\"en\":\"\",\"ru\":\"Вино с богатой гаммой ароматов свежих ягод и вишневого джема, обладающее продолжительным послевкусием\"}', '{\"az\":\"Azərbaycan\",\"en\":\"\",\"ru\":\"Азербайджан\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>&quot;Abrau Kupaj&quot; Krasnodar diyarının ərazisində əl ilə toplanmış Kaberne - Sovinyon və Merlo &uuml;z&uuml;m sortlarından yaradılmış, - qırmızı, qırmızı kəm&ccedil;irin qarışdırılmış şərab. Y&uuml;ksək keyfiyyətin rəhni se&ccedil;mə &uuml;z&uuml;md&uuml;r, xarici texnoloqların cəlb edilməsi ilə b&uuml;t&uuml;n istehsal prosesinə ciddi nəzarət və şərab&ccedil;ıların fikrini təcəss&uuml;m etdirməyə imkan verən m&uuml;asir avadanlıqdır. Parlaq meyvəli təravətinin və y&uuml;ng&uuml;ll&uuml;y&uuml;n&uuml;n qorunub saxlanılması &uuml;&ccedil;&uuml;n şərab &ccedil;əlləkdə uzun m&uuml;ddət saxlanılmır. Cavan və qastronomik olan bu şərab dostlarla əyləncə məclislərinin, piknikləri nvə nahar yeməyinin əla m&uuml;şayiət&ccedil;isi olacaqdır.</p>\\n\",\"en\":\"\",\"ru\":\"<p>&laquo;Абрау Купаж&raquo; красный &ndash; красное полусладкое ассаблированное вино, созданное из винограда сортов Каберне-Совиньон и Мерло, собранных вручную на территории Краснодарского края. Залогом высокого качества является отборный виноград, строгий контроль всего процесса производства с привлечением иностранных технологов и современное оборудование, позволяющее воплотить задумку виноделов. Вино не выдерживается в бочке для сохранения яркой фруктовой свежести и легкости. Молодое и гастрономичное, это вино станет отличным сопровождением посиделок с друзьями, пикников и обеденной трапезы.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'kupaj-qırmızı-abrau', 'kupaj-krasniy-abrau', '2022-10-19 10:36:02', '2022-10-20 04:16:40', 'http://azabrau.testjed.me/mehsullar'),
(19, '{\"az\":\"Az Abrau Bayanşirə\",\"en\":\"\",\"ru\":\"Аз Абрау Баяншира\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '12%', '202210191337mehsul01.png', '{\"az\":\"\\\"Az Abrau Bayanşirə\\\" şərabı ətirli, yüngül və zərif Ağ balıqdan olan yeməklər, dəniz məhsulları və cavan pendirlər ilə uyğundur\",\"en\":\"\",\"ru\":\"Вино «Az Abrau Баяншира» ароматное, легкое и элегантное. Сочетается с блюдами из белой рыбы, морепродуктами и молодыми сырами\"}', '{\"az\":\"Azərbaycan\",\"en\":\"\",\"ru\":\"Азербайджан\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>İncə və saf sort dadı ilə olan məşhur yerli Azərbaycanın &uuml;z&uuml;m sortundan ətirli, y&uuml;ng&uuml;l və zərif şərab.</p>\\n\\n<p>Şərab yetişmiş meyvə və qarabaşaq balının &ccedil;alarları ilə zərif &ccedil;i&ccedil;əkli ətir n&uuml;mayiş etdirir. Yumşaq və xoş mineral dad y&uuml;ng&uuml;l ağzı qamaşdırıcı notu, limon n&uuml;ansları və təravətlındirici turşuluq ilə yetişmiş şirəli meyvələrin zərif tonları ilə fərqlənir. A&ouml;lzda qalan təam &ccedil;i&ccedil;ək &ccedil;alarları ilə qurudur&nbsp;</p>\\n\\n<p>Ağ balıqdan olan yeməklər, dəniz məhsulları və cavan pendirlər ilə uyğundur.</p>\\n\",\"en\":\"\",\"ru\":\"<p>Ароматное, легкое и элегантное вино из популярного аборигенного азербайджанского сорта винограда с нежным и чистым сортовым вкусом.</p>\\n\\n<p>Вино демонстрирует нежный цветочный аромат с оттенками спелых фруктов и гречишного меда. Мягкий и приятный минеральный вкус отличается легкой терпкой нотой, лимонными нюансами и нежными тонами спелых сочных фруктов с освежающей кислотностью. Послевкусие сухое с цветочными оттенками.&nbsp;</p>\\n\\n<p>Сочетается с блюдами из белой рыбы, морепродуктами и молодыми сырами.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '11', 'az-abrau-bayanshire', 'az-abrau-bayanshire', '2022-10-19 10:37:59', '2022-10-20 04:06:35', 'http://azabrau.testjed.me/mehsullar'),
(20, '{\"az\":\"Az Abrau Mədrəsə\",\"en\":\"\",\"ru\":\"Аз Абрау Мадраса\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '14%', '202210191343mehsul01.png', '{\"az\":\"\\\"Az Abrau Mədrəsə\\\" şərabı zəngin ətirə və təsirli məxməri dada malikdir. Soyuq ət qəlyanaltıları, qırmızı ətdən olan yeməklər və yetişmiş pendirlər ilə uyğundur\",\"en\":\"\",\"ru\":\"Вино «Az Abrau Мадраса» обладает насыщенным ароматом и выразительным бархатистым вкусом. Сочетается с холодными мясными закусками, блюдами из красного мяса и зрелыми сырами\"}', '{\"az\":\"Azərbaycan\",\"en\":\"\",\"ru\":\"Азербайджан\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"<p>Qafqaz şərabları &uuml;&ccedil;&uuml;n səciyyəvi olan zəngin dad ilə Azərbaycanın ən yaxşı yerli &uuml;z&uuml;m sortlarından birinin xoş ağız qamaşdırıcılığı ilə təsirli və məxməri şərab.</p>\\n\\n<p>Şərab ədviyyəlı otların, ədviyyatların və meşə giləmeyvələrinin meyvəli notlarının ahəngdar birləşməsi ilə təsirli sort ətirinə malikdir. Şərabın təravətli və məxməri turş dadı canlı turşuluğa, hiss edilən taninliyə və y&uuml;ng&uuml;l ağız qamaşdırıcılığına malikdir. Yetişmiş &ccedil;əyirdəkli meyvələrin &uuml;st&uuml;nl&uuml;y&uuml; ilə parlaq meyvəli notlar sortlu ədviyyəli n&uuml;anslarla haşiyələnir.</p>\\n\\n<p>Soyuq ət qəlyanaltıları, qırmızı ətdən olan yeməklər və yetişmiş pendirlər ilə uyğundur.</p>\\n\",\"en\":\"\",\"ru\":\"<p>Выразительное и бархатистое вино с приятной терпкостью из одного из лучших аборигенных азербайджанских сортов винограда с насыщенным вкусом типичным для кавказских вин.</p>\\n\\n<p>Вино обладает выразительным сортовым ароматом с гармоничным переплетением пряных трав, специй и фруктовых нот лесных ягод. Свежий и бархатистый сухой вкус вина имеет живую кислотностью, ощутимую танинность и легкую терпкость. Яркие фруктовые ноты с доминантой спелых косточковых обрамляются сортовыми пряными нюансами.</p>\\n\\n<p>Сочетается с холодными мясными закусками, блюдами из красного мяса и зрелыми сырами.</p>\\n\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '16', 'az-abrau-medrese', 'az-abrau-medrese', '2022-10-19 10:43:50', '2022-10-20 03:33:13', 'http://azabrau.testjed.me/mehsullar'),
(21, '{\"az\":\"Abrau Junior Qızılı\",\"en\":\"\",\"ru\":\"Abrau Junior Золотое\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '0%', '202210191348mehsul01.png', '{\"az\":\"Yayın və cənub günəşinin atmosferini özünə hopdurmuş istənilən uşaq şənliyini bəzəyəcək və xoş dadla sevindirəcək yüngül təravətləndirici içki\",\"en\":\"\",\"ru\":\"Легкий освежающий напиток, впитавший атмосферу лета и южного солнца, украсит любое детское торжество и порадует приятным вкусом\"}', '{\"az\":\"Rusiya\",\"en\":\"\",\"ru\":\"Россия\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '15', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '16', 'abrau-junior-gizili', 'abrau-junior-zolotoy', '2022-10-19 10:48:55', '2022-10-20 04:19:40', 'http://azabrau.testjed.me/mehsullar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sales__points`
--

CREATE TABLE `sales__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txtLat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `txtLng` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sales__points`
--

INSERT INTO `sales__points` (`id`, `name`, `address`, `txtLat`, `txtLng`, `phone_1`, `phone_2`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"azabrau test 4 sayli xestexana\",\"en\":\"AzAbrau şərab evi 1 en\",\"ru\":\"AzAbrau şərab evi 1 ru edited\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', '40.419339', '49.944117', '+994 51 458 62 47', '+994 51 458 62 47', '2022-10-10 03:34:59', '2022-10-20 02:34:12'),
(5, '{\"az\":\"AzAbrau şərab evi 2\",\"en\":\"AzAbrau şərab evi 2\",\"ru\":\"AzAbrau şərab evi 2\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', '40.393525', '49.842512', '+994 12 425 62 47', '+994 12 425 62 47', '2022-10-10 03:35:34', '2022-10-19 08:05:57'),
(6, '{\"az\":\"AzAbrau şərab evi 3\",\"en\":\"AzAbrau şərab evi 3\",\"ru\":\"AzAbrau şərab evi 3 ru\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', '40.401369', '49.804060', '+994 51 458 62 47', NULL, '2022-10-10 03:36:05', '2022-10-18 08:27:03'),
(7, '{\"az\":\"test adress with long lat az\",\"en\":\"\",\"ru\":\"test adress with long lat ru\"}', '{\"az\":\"test adress with long lat az\",\"en\":\"\",\"ru\":\"test adress with long lat ru\"}', '40.417756', '49.908448', '+994 51 458 62 47', '+994 51 458 62 47', '2022-10-18 08:23:54', '2022-10-18 08:23:54'),
(8, '{\"az\":\"yasil bazar az\",\"en\":\"\",\"ru\":\"yasil bazar az\"}', '{\"az\":\"yasil bazar az\",\"en\":\"\",\"ru\":\"yasil bazar az\"}', '40.384896', '49.854871', '+994 51 458 62 47', '+994 51 458 62 47', '2022-10-19 06:05:15', '2022-10-19 06:05:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(11, '202209300706team-img-1.png', '{\"az\":\"ŞƏKİ ŞƏRABI\",\"en\":\"\",\"ru\":\"ŞƏKİ ŞƏRABI ru\"}', '{\"az\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. az</p>\\n\",\"en\":\"\",\"ru\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\\n\"}', '2022-09-30 03:06:40', '2022-10-18 03:24:14'),
(12, '202210120700slider1.png', '{\"az\":\"az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\",\"ru\":\"ru Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\"}', '{\"az\":\"<p>dgdfg az</p>\\n\",\"en\":\"\",\"ru\":\"<p>dfgdfg ru</p>\\n\"}', '2022-09-30 03:07:04', '2022-10-20 02:29:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(10) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superadmin` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin_status`, `image`, `superadmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Firengiz', 'firengizsariyeva77@gmail.com', 1, '2022081711206.png', '1', NULL, '$2y$10$zaqRZO3V4T2fDDE7PRASh.pWWvPhJKDmMr3CwXVa3mJIrHolxw//K', NULL, '2022-08-17 04:53:45', '2022-08-17 08:51:56'),
(4, 'Firengiz user', 'fuser@gmail.com', 1, '202208311224blog-5.jpg', '3', NULL, '$2y$10$hPLeU1rLPYE7juobgvxPMOMY66rXmomMeQoKdNL99PTp.C9leWcO2', NULL, '2022-08-31 06:52:26', '2022-08-31 08:50:49'),
(6, 'Content', 'content@gmail.com', 1, '2022101806247.png', '2', NULL, '$2y$10$kovlubFCo.1N8Jdp3IvtIe8C5VM3JcfmrDSgETEpdwMMDOxLRu/Za', NULL, '2022-10-18 02:26:30', '2022-10-18 03:24:58');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sales__points`
--
ALTER TABLE `sales__points`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `sales__points`
--
ALTER TABLE `sales__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
