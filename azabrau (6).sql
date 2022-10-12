-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Eki 2022, 13:51:34
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `azabrau`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `blogs` (`id`, `image`, `name`, `title`, `desc`, `slug_az`, `slug_en`, `slug_ru`, `created_at`, `updated_at`) VALUES
(7, '202210100755aesop-wines-yH6kh_DGBHY-unsplash 2.png', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', '{\"az\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A rhoncus turpis phasellus nec. Sed elementum ut lobortis cras cursus quisque. Lobortis lobortis dolor facilisi purus dui magna libero tortor vitae. Purus nisl tincidunt molestie non. At in pellentesque arcu, congue pharetra velit. Quis malesuada montes, commodo in.<br />\\nSit volutpat volutpat ante neque at. A, nulla sed proin pharetra lorem sed proin commodo. Eros lorem sed mus pretium. Fermentum ornare sit magna scelerisque nibh. Amet, a nibh pulvinar auctor et sollicitudin aliquet nibh non. Elementum convallis a in donec a laoreet vel. Vulputate consequat parturient nisi ac aliquet. Fusce arcu eleifend sed nec. Ipsum eget quam leo nisi ut. Ac nec aliquam, quis neque. Lorem nisl platea faucibus dapibus ac auctor fermentum, donec non. Donec urna neque senectus iaculis tristique mattis gravida in volutpat. A, elit vel non molestie magna tincidunt pretium sollicitudin. Mauris ultrices risus ut enim vestibulum eget maecenas metus porttitor.<br />\\nGravida imperdiet et, id in vestibulum scelerisque. Enim vitae ornare quis euismod. Porttitor amet, leo quam quis. Facilisis donec libero purus massa netus amet. Ac laoreet facilisis in in auctor ut tristique sed. Pharetra tortor aliquam posuere odio risus at lobortis. Lorem etiam quis dictum nulla in massa. Varius augue in sem congue nullam hendrerit nunc. Sed porta dolor non semper iaculis ultrices. Et lectus natoque erat donec tellus, ante. az</p>\\n\",\"en\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A rhoncus turpis phasellus nec. Sed elementum ut lobortis cras cursus quisque. Lobortis lobortis dolor facilisi purus dui magna libero tortor vitae. Purus nisl tincidunt molestie non. At in pellentesque arcu, congue pharetra velit. Quis malesuada montes, commodo in.<br />\\nSit volutpat volutpat ante neque at. A, nulla sed proin pharetra lorem sed proin commodo. Eros lorem sed mus pretium. Fermentum ornare sit magna scelerisque nibh. Amet, a nibh pulvinar auctor et sollicitudin aliquet nibh non. Elementum convallis a in donec a laoreet vel. Vulputate consequat parturient nisi ac aliquet. Fusce arcu eleifend sed nec. Ipsum eget quam leo nisi ut. Ac nec aliquam, quis neque. Lorem nisl platea faucibus dapibus ac auctor fermentum, donec non. Donec urna neque senectus iaculis tristique mattis gravida in volutpat. A, elit vel non molestie magna tincidunt pretium sollicitudin. Mauris ultrices risus ut enim vestibulum eget maecenas metus porttitor.<br />\\nGravida imperdiet et, id in vestibulum scelerisque. Enim vitae ornare quis euismod. Porttitor amet, leo quam quis. Facilisis donec libero purus massa netus amet. Ac laoreet facilisis in in auctor ut tristique sed. Pharetra tortor aliquam posuere odio risus at lobortis. Lorem etiam quis dictum nulla in massa. Varius augue in sem congue nullam hendrerit nunc. Sed porta dolor non semper iaculis ultrices. Et lectus natoque erat donec tellus, ante. en</p>\\n\",\"ru\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A rhoncus turpis phasellus nec. Sed elementum ut lobortis cras cursus quisque. Lobortis lobortis dolor facilisi purus dui magna libero tortor vitae. Purus nisl tincidunt molestie non. At in pellentesque arcu, congue pharetra velit. Quis malesuada montes, commodo in.<br />\\nSit volutpat volutpat ante neque at. A, nulla sed proin pharetra lorem sed proin commodo. Eros lorem sed mus pretium. Fermentum ornare sit magna scelerisque nibh. Amet, a nibh pulvinar auctor et sollicitudin aliquet nibh non. Elementum convallis a in donec a laoreet vel. Vulputate consequat parturient nisi ac aliquet. Fusce arcu eleifend sed nec. Ipsum eget quam leo nisi ut. Ac nec aliquam, quis neque. Lorem nisl platea faucibus dapibus ac auctor fermentum, donec non. Donec urna neque senectus iaculis tristique mattis gravida in volutpat. A, elit vel non molestie magna tincidunt pretium sollicitudin. Mauris ultrices risus ut enim vestibulum eget maecenas metus porttitor.<br />\\nGravida imperdiet et, id in vestibulum scelerisque. Enim vitae ornare quis euismod. Porttitor amet, leo quam quis. Facilisis donec libero purus massa netus amet. Ac laoreet facilisis in in auctor ut tristique sed. Pharetra tortor aliquam posuere odio risus at lobortis. Lorem etiam quis dictum nulla in massa. Varius augue in sem congue nullam hendrerit nunc. Sed porta dolor non semper iaculis ultrices. Et lectus natoque erat donec tellus, ante. ru</p>\\n\"}', 'news-7-az', 'news-7-en', 'news-7-ru', '2022-10-10 03:55:21', '2022-10-12 03:25:09'),
(8, '202210100756nathaniel-kohfield-EMrhlmTDUSg-unsplash 1.png', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', '{\"az\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası az\",\"en\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası en\",\"ru\":\"Abrau Winonah De - alkoqolsuz sərinləşdirici içkilərin yeni kolleksiyası ru\"}', 'news-8-az', 'news-8-en', 'news-8-ru', '2022-10-10 03:56:07', '2022-10-11 06:07:46'),
(9, '202210100756aesop-wines-yH6kh_DGBHY-unsplash 2.png', '{\"az\":\"sdfg\",\"en\":\"sdf\",\"ru\":\"sdfg\"}', '{\"az\":\"sdfg\",\"en\":\"sdf\",\"ru\":\"sdfg\"}', '{\"az\":\"sdfg\",\"en\":\"sdf\",\"ru\":\"sdfg\"}', 'news-9-az', 'news-9-en', 'news-9-ru', '2022-10-10 03:56:30', '2022-10-11 06:07:56'),
(10, '202210101019slider1.jpg', '{\"az\":\"asdf\",\"en\":\"asdf\",\"ru\":\"asdf\"}', '{\"az\":\"asdf\",\"en\":\"asfd\",\"ru\":\"asfd\"}', '{\"az\":\"<p>asdfasdf</p>\\n\",\"en\":\"<p>safasdf</p>\\n\",\"ru\":\"<p>asdf</p>\\n\"}', 'news-10-az', 'news-10-en', 'news-10-ru', '2022-10-10 06:19:47', '2022-10-11 06:07:36');

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
(9, '{\"az\":\"Şəki şərabı az\",\"en\":\"Şəki şərabı\",\"ru\":\"Şəki şərabı ru\"}', 'seki-serabi-az', 'seki-serabi-en', 'seki-serabi-ru', '0', '2022-10-11 03:03:23', '2022-10-11 05:35:08'),
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
(7, '+944 50 123 45 67', '+944 50 123 45 67', '{\"az\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan\",\"en\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan\",\"ru\":\"Port Baku,Neftchilar Avenue 153, Baku Azerbaijan\"}', 'info@azabrau.az', 'google.com', 'google.com', 'google.com', '2022-09-01 08:04:51', '2022-10-10 02:48:48');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'Home Page', 'Home Page', 'Home Page', '/', '/', '/', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'Home Page', 'index', 'index', '0', '0', '11', '2022-10-10 00:41:25', '2022-10-10 02:14:53'),
(2, 'Contact-az', 'Contact-en', 'Contact-ru', 'elaqe', 'contact', 'contact-ru', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'contact', 'contact', '0', '1', '5', '2022-10-10 01:27:45', '2022-10-10 02:15:04'),
(4, 'Haqqimizda', 'About', 'About-ru', 'haqqimizda', 'about', 'about-ru', 'Haqqimizda', 'About', 'About-ru', 'Haqqimizda', 'About', 'About-ru', 'Haqqimizda', 'About', 'About-ru', 'about', 'about', '0', '1', '1', '2022-10-10 02:12:21', '2022-10-10 02:12:21'),
(5, 'AZ ABRAU', 'AZ ABRAU', 'AZ ABRAU', 'mehsullar', 'products', 'products-ru', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'azabrau', 'products', 'products', '0', '1', '2', '2022-10-10 02:14:00', '2022-10-11 02:57:18'),
(6, 'SATIŞ MƏNTƏQƏLƏRİ', 'SATIŞ MƏNTƏQƏLƏRİ-en', 'SATIŞ MƏNTƏQƏLƏRİ-ru', 'satis-menteqeleri', 'satis-menteqeleri-en', 'satis-menteqeleri-ru', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis-menteqeleri', 'satis_menteqeleri', 'satis_menteqeleri', '0', '1', '3', '2022-10-10 02:14:46', '2022-10-10 02:14:46'),
(7, 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'xeberler', 'news', 'xeberler-ru', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'XƏBƏRLƏR', 'news', 'news', '0', '1', '4', '2022-10-10 02:15:39', '2022-10-10 02:15:39'),
(8, 'Single News', 'Single News', 'Single News', 'xeberler', 'news', 'xeberler-ru', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'single-news', 'news_single', 'news_single', '0', '0', '7', '2022-10-10 07:27:29', '2022-10-12 02:43:52'),
(9, 'Single Product', 'Single Product', 'Single Product', 'mehsullar', 'products', 'products-ru', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single-product', 'single_product', 'single_product', '0', '0', '9', '2022-10-11 03:56:33', '2022-10-12 02:47:24');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `cesid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spirt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menseyi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `istehsal_il` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `terkibi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uygunluq` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saxlama_formasi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `cesid`, `spirt`, `thumbnail`, `title`, `menseyi`, `istehsal_il`, `desc`, `terkibi`, `uygunluq`, `temp`, `saxlama_formasi`, `cat_id`, `slug_az`, `slug_en`, `slug_ru`, `created_at`, `updated_at`) VALUES
(2, '{\"az\":\"Sarab 1 az edited\",\"en\":\"Sarab 1 en edited\",\"ru\":\"Sarab 1 ru\"}', '{\"az\":\"Sarab 1 az\",\"en\":\"Sarab 1 en\",\"ru\":\"Sarab 1 ru\"}', '25', '202210120750koton.jpg', '{\"az\":\"Sarab 1 az\",\"en\":\"Sarab 1 en\",\"ru\":\"Sarab 1 ru\"}', '{\"az\":\"Baku\",\"en\":\"Baku en\",\"ru\":\"Sarab 1 ru\"}', '{\"az\":\"1999\",\"en\":\"1999\",\"ru\":\"1999\"}', '{\"az\":\"<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp; az</p>\\n\",\"en\":\"<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp; az</p>\\n\",\"ru\":\"<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s,&nbsp; ru</p>\\n\"}', '{\"az\":\"Spirt\",\"en\":\"Sarab 1 en\",\"ru\":\"Sarab 1 ru\"}', '{\"az\":\"ela\",\"en\":\"ela\",\"ru\":\"Sarab 1 ru\"}', '12', '{\"az\":\"quru yerde saxlayin az\",\"en\":\"quru yerde saxlayin en\",\"ru\":\"quru yerde saxlayin\"}', '11', 'sarab-1-az', 'sarab-1-en', 'sarab-1-ru', '2022-10-11 03:22:14', '2022-10-12 03:50:49'),
(5, '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '345', '202210110736sharab.png', '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '{\"az\":\"2333\",\"en\":\"345\",\"ru\":\"3444\"}', '{\"az\":\"<p>&nbsp;web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). az</p>\\n\",\"en\":\"<p>&nbsp;web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). en</p>\\n\",\"ru\":\"<p>m Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ru</p>\\n\"}', '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '{\"az\":\"sarab 2 az\",\"en\":\"sarab2 \",\"ru\":\"sarab2  ru\"}', '345', '{\"az\":\"sarab 2 az\",\"en\":\"f\",\"ru\":\"sarab2  ru\"}', '13', 'sarab-2-az', 'sarab-2-en', 'sarab-2-ru', '2022-10-11 03:36:13', '2022-10-12 03:21:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sales__points`
--

CREATE TABLE `sales__points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sales__points`
--

INSERT INTO `sales__points` (`id`, `name`, `address`, `link`, `phone_1`, `phone_2`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"AzAbrau şərab evi 1 az\",\"en\":\"AzAbrau şərab evi 1 en\",\"ru\":\"AzAbrau şərab evi 1 ru\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403062b925a4172f%3A0x2f12045b9d07b467!2s%C5%9Eefa%20Stadyumu!5e0!3m2!1str!2s!4v1664343197348!5m2!1str!2s', '+994 51 458 62 47', '+994 51 458 62 47', '2022-10-10 03:34:59', '2022-10-10 03:34:59'),
(5, '{\"az\":\"AzAbrau şərab evi 2\",\"en\":\"AzAbrau şərab evi 2\",\"ru\":\"AzAbrau şərab evi 2\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030620968b5a159%3A0xae9146e7969a73ac!2sSabunchu%20Hospital!5e0!3m2!1str!2s!4v1664343216646!5m2!1str!2s', '+994 12 425 62 47', '+994 12 425 62 47', '2022-10-10 03:35:34', '2022-10-10 03:35:34'),
(6, '{\"az\":\"AzAbrau şərab evi 3\",\"en\":\"AzAbrau şərab evi 3\",\"ru\":\"AzAbrau şərab evi 3 ru\"}', '{\"az\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"en\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\",\"ru\":\"K. Rəhimov küç. 19 Bakı ş. Azərbaycan\"}', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24299.165344529018!2d49.9081197!3d40.4222368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40306247891484fd%3A0x2256fb8d0393e0f3!2sABB%20-%20Sabun%C3%A7u%20filial%C4%B1!5e0!3m2!1str!2s!4v1664343227734!5m2!1str!2s', '+994 51 458 62 47', NULL, '2022-10-10 03:36:05', '2022-10-10 03:36:05');

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
(11, '202209300706team-img-1.png', '{\"az\":\"ŞƏKİ ŞƏRABI\",\"en\":\"ŞƏKİ ŞƏRABI en\",\"ru\":\"ŞƏKİ ŞƏRABI ru\"}', '{\"az\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. az</p>\\n\",\"en\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. en</p>\\n\",\"ru\":\"<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\\n\"}', '2022-09-30 03:06:40', '2022-10-12 03:04:52'),
(12, '202210120700slider1.png', '{\"az\":\"az Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\",\"ru\":\"ru Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has\"}', '{\"az\":\"\",\"en\":\"\",\"ru\":\"\"}', '2022-09-30 03:07:04', '2022-10-12 03:00:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(10) NOT NULL DEFAULT 1,
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
(2, 'Firengiz2', 'firengizsariyeva772@gmail.com', 1, NULL, '1', NULL, '$2y$10$MRSOThO2QDKWKoCyh3gOtOqAcuiphMDM9xDxHvowBS.YtX2GbG5lK', NULL, '2022-08-17 04:55:03', '2022-08-17 04:55:03'),
(4, 'Firengiz user', 'fuser@gmail.com', 1, '202208311224blog-5.jpg', '3', NULL, '$2y$10$hPLeU1rLPYE7juobgvxPMOMY66rXmomMeQoKdNL99PTp.C9leWcO2', NULL, '2022-08-31 06:52:26', '2022-08-31 08:50:49'),
(5, 'firengizsariyeva79@gmail.com', 'firengizsariyeva79@gmail.com', 1, NULL, '2', NULL, '$2y$10$d0NJmcd34OcTddUHAtVi6uwmuwmBhl38D7lc0vHMlB5n888v23SHy', NULL, '2022-09-01 04:06:18', '2022-09-01 04:06:18');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sales__points`
--
ALTER TABLE `sales__points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
