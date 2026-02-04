/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.30 : Database - laravel_lp_premium_voucher
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel_lp_premium_voucher` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `laravel_lp_premium_voucher`;

/*Table structure for table `benefits` */

DROP TABLE IF EXISTS `benefits`;

CREATE TABLE `benefits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `benefits` */

insert  into `benefits`(`id`,`icon`,`title`,`description`,`created_at`,`updated_at`) values 
(1,'fa-solid fa-bolt','Instant Delivery','Kode voucher Anda akan dikirim segera setelah konfirmasi pembayaran.','2026-01-24 02:57:59','2026-01-25 03:23:31'),
(2,'fa-solid fa-shield-halved','Secure Payment','Kami mendukung berbagai metode pembayaran yang aman untuk kenyamanan Anda.','2026-01-24 02:57:59','2026-01-25 03:23:45'),
(3,'fa-solid fa-headset','24/7 Support','Tim kami siap membantu Anda kapan saja, di mana saja.','2026-01-24 02:57:59','2026-01-25 03:23:58');

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

insert  into `cache`(`key`,`value`,`expiration`) values 
('laravel-cache-041490e778bd3bec8ecf7621920156a6','i:2;',1769319770),
('laravel-cache-041490e778bd3bec8ecf7621920156a6:timer','i:1769319770;',1769319770);

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`question`,`answer`,`created_at`,`updated_at`) values 
(1,'Berapa lama waktu pengirimannya?','Untuk sebagian besar voucher, prosesnya instan (kurang dari 1 menit). Untuk beberapa item yang diproses secara manual, mungkin membutuhkan waktu hingga 10-30 menit.','2026-01-24 02:57:59','2026-01-25 03:26:51'),
(2,'Metode pembayaran apa saja yang Anda terima?','Kami menerima Transfer Bank (BCA, Mandiri, BRI), E-Wallet (GoPay, OVO, Dana, ShopeePay), dan QRIS','2026-01-24 02:57:59','2026-01-25 03:27:16'),
(3,'Apakah ini legal dan aman?','Ya, 100% legal dan aman. Kami adalah reseller resmi untuk banyak produk.','2026-01-24 02:57:59','2026-01-25 03:27:40');

/*Table structure for table `hero_sections` */

DROP TABLE IF EXISTS `hero_sections`;

CREATE TABLE `hero_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `hero_sections` */

insert  into `hero_sections`(`id`,`title`,`subtitle`,`description`,`image_path`,`cta_text`,`cta_link`,`active`,`created_at`,`updated_at`) values 
(1,'Voucher Aplikasi Premium Termurah dan Terpercaya','Dapatkan harga terbaik dibanding dengan layanan penyedia lainnya','Pengiriman cepat, transaksi aman, dan 24/7 full support. Hubungi kami sekarang!','hero-images/TKWjUy5etGI7vQDL2e5KCE9h1W2gbDHyNRTycf2h.png','Beli Sekarang','#products',1,'2026-01-24 02:57:59','2026-01-25 03:16:01');

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_01_24_000001_create_hero_sections_table',1),
(5,'2025_01_24_000002_create_vouchers_table',1),
(6,'2025_01_24_000003_create_benefits_table',1),
(7,'2025_01_24_000004_create_testimonials_table',1),
(8,'2025_01_24_000005_create_faqs_table',1),
(9,'2025_01_24_000006_create_settings_table',1),
(10,'2026_01_24_104107_add_slug_to_vouchers_table',2),
(11,'2026_01_25_034508_add_seo_fields_to_vouchers_table',3);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('0X0UEuJWZ31wgf3p923FxIspyr1R4fyoGTWvoM5C',NULL,'127.0.0.1','Go-http-client/1.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2tad1V1TFN3N3NER2xHUDI3bUNQM2N3WlFQR2dySlEyeDdJQ2ZqciI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC92b3VjaGVyL21vYmlsZS1sZWdlbmRzLTg2LWRpYW1vbmRzIjtzOjU6InJvdXRlIjtzOjEyOiJ2b3VjaGVyLnNob3ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1769251359),
('FFCcBA5eN1Xi0FgXZ6ndlFlqDISQ1TN3c3HaBofa',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1NzZ2U0VkVIMHRZR2tKYlhKOXZFbks0NHd0TmdxTDJlYUdhaXlpQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9fQ==',1769251981),
('GDwI1m1ib758S6RNwAahyZvncfpdkTr0d3qrIzlL',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWNIR1BQb3RQZkkzRFRwdHNPMTluRTljSXBUM1VWWUxDTmJoM0VGViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9fQ==',1769319720);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`key`,`value`,`created_at`,`updated_at`) values 
(1,'whatsapp_number','081234567890','2026-01-24 02:57:59','2026-01-24 02:57:59'),
(2,'footer_text','The #1 Trusted Digital Voucher Store in Indonesia.','2026-01-24 02:57:59','2026-01-24 02:57:59'),
(3,'facebook_link','https://facebook.com','2026-01-24 02:57:59','2026-01-24 02:57:59'),
(4,'instagram_link','https://instagram.com','2026-01-24 02:57:59','2026-01-24 02:57:59');

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL DEFAULT '5',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `testimonials` */

insert  into `testimonials`(`id`,`name`,`photo_path`,`content`,`rating`,`created_at`,`updated_at`) values 
(1,'Iqbal S',NULL,'Transaksinya sangat cepat! Saya mendapatkan berlian saya dalam hitungan detik. Sangat direkomendasikan.',5,'2026-01-24 02:57:59','2026-01-25 03:24:31'),
(2,'Agus aw',NULL,'Penjual terpercaya. Saya selalu membeli langganan Netflix saya di sini. Tidak pernah ada masalah.',5,'2026-01-24 02:57:59','2026-01-25 03:25:16'),
(3,'Budi Santoso',NULL,'Harga bersahabat, admin ramah. Mantap jiwa!',4,'2026-01-24 02:57:59','2026-01-24 02:57:59');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin User','admin@example.com','2026-01-24 02:57:59','$2y$12$b/oQHVoAt/rJQ5t9qxixd.Hys/UvSQ0AC78r/R/HOdVHH2WyQvsHW',NULL,'2026-01-24 02:57:59','2026-01-24 02:57:59');

/*Table structure for table `vouchers` */

DROP TABLE IF EXISTS `vouchers`;

CREATE TABLE `vouchers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_best_seller` tinyint(1) NOT NULL DEFAULT '0',
  `is_promo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vouchers_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vouchers` */

insert  into `vouchers`(`id`,`name`,`slug`,`price`,`description`,`image_path`,`meta_title`,`meta_description`,`is_best_seller`,`is_promo`,`created_at`,`updated_at`) values 
(1,'Spotify Premium','spotify-premium',20000.00,'Layanan spotifiy premium','vouchers/4TROJRR0acaCHLqXuIuBNU9gEsIjCEAlMfObhqBB.png',NULL,NULL,1,0,'2026-01-24 02:57:59','2026-01-25 03:18:58'),
(2,'Netflix Premium','netflix-premium',20000.00,'Layanan netflix premium','vouchers/BjTRJbF6x0zqlNRhFLcbO92C3qWqPvOgNdqpysjM.png',NULL,NULL,0,1,'2026-01-24 02:57:59','2026-01-25 03:19:48'),
(3,'Video Premium','video-premium',55000.00,'Layanan video 1 bulan','vouchers/xRQ6SNGUVTtfLz5kzzjZxExWx6cDyv7bPnIFYLga.png',NULL,NULL,0,0,'2026-01-24 02:57:59','2026-01-25 03:20:26'),
(4,'WeTV Premium','wetv-premium',186000.00,'Layanan weTV premium','vouchers/HXxVY3QJWezTWpjB30vHZQKDptktWIEryA2AB8LY.png',NULL,NULL,1,0,'2026-01-24 02:57:59','2026-01-25 03:21:15'),
(5,'Disnet Hotstar+ Premium','disnet-hotstar-premium',150000.00,'Layanan premium disney','vouchers/DJpIKuC7L3vHP0eRws5QqqtvYdpNOasnlEiGbl2H.png',NULL,NULL,0,1,'2026-01-24 02:57:59','2026-01-25 03:22:04'),
(6,'Voucher Google Play','voucher-google-play',52000.00,'Layanan redeem voucher google play','vouchers/SYpQ39kPyjG9f5BZmBMwO2GYI2H9gh7FHjTcZrE8.png',NULL,NULL,0,0,'2026-01-24 02:57:59','2026-01-25 03:23:04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
