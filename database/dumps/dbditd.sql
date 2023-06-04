-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.24-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Membuang data untuk tabel dbd_itd.abj: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `abj` DISABLE KEYS */;
/*!40000 ALTER TABLE `abj` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.broods: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `broods` DISABLE KEYS */;
/*!40000 ALTER TABLE `broods` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.building_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `building_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `building_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.cases: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.detail_larvae: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_larvae` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_larvae` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.detail_sample_morphotypes: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_sample_morphotypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_sample_morphotypes` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.detail_sample_serotypes: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_sample_serotypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_sample_serotypes` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.detail_sample_viruses: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_sample_viruses` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_sample_viruses` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.districts: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.environment_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `environment_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `environment_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.environment_variables: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `environment_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `environment_variables` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.floor_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `floor_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `floor_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.ksh: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `ksh` DISABLE KEYS */;
/*!40000 ALTER TABLE `ksh` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.larvae: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `larvae` DISABLE KEYS */;
/*!40000 ALTER TABLE `larvae` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.location_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `location_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `location_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.login_user: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `login_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_user` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.migrations: ~32 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_11_181633_create_login_user_table', 1),
	(6, '2023_05_11_194043_create_provinces_table', 1),
	(7, '2023_05_11_194118_create_regencies_table', 1),
	(8, '2023_05_11_194252_create_district_table', 1),
	(9, '2023_05_11_194500_create_sample_method_table', 1),
	(10, '2023_05_11_194542_create_morphotypes_table', 1),
	(11, '2023_05_11_194726_create_serotypes_table', 1),
	(12, '2023_05_11_195031_create_viruses_table', 1),
	(13, '2023_05_11_195239_create_environtment_type_table', 1),
	(14, '2023_05_11_195314_create_tpa_type_table', 1),
	(15, '2023_05_11_195345_create_location_types_table', 1),
	(16, '2023_05_11_195415_create_settlement_types_table', 1),
	(17, '2023_05_11_195455_create_building_type_table', 1),
	(18, '2023_05_11_195515_create_floor_type_table', 1),
	(19, '2023_05_11_195653_create_samples_table', 1),
	(20, '2023_05_11_200129_create_broods_table', 1),
	(21, '2023_05_11_200811_create_ksh_table', 1),
	(22, '2023_05_11_201033_create_abj_table', 1),
	(23, '2023_05_11_201156_create_cases_table', 1),
	(24, '2023_05_11_201437_create_environment_variables_table', 1),
	(25, '2023_05_11_201743_create_larvae_table', 1),
	(26, '2023_05_13_152709_create_villages_table', 1),
	(27, '2023_05_29_082513_create_detail_sample_morphotypes_table', 1),
	(28, '2023_05_29_082730_create_detail_sample_serotypes_table', 1),
	(29, '2023_05_29_084138_add_description_samples', 1),
	(30, '2023_05_30_042250_create_detail_sample_viruses', 1),
	(31, '2023_05_30_052237_add_location_type_id_column_samples', 1),
	(32, '2023_06_03_072539_create_detail_larva_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.morphotypes: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `morphotypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `morphotypes` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.password_reset_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.personal_access_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.provinces: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.regencies: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `regencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `regencies` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.samples: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `samples` DISABLE KEYS */;
/*!40000 ALTER TABLE `samples` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.sample_methods: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `sample_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `sample_methods` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.serotypes: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `serotypes` DISABLE KEYS */;
/*!40000 ALTER TABLE `serotypes` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.settlement_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `settlement_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `settlement_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.tpa_types: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tpa_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `tpa_types` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.users: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.villages: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `villages` DISABLE KEYS */;
/*!40000 ALTER TABLE `villages` ENABLE KEYS */;

-- Membuang data untuk tabel dbd_itd.viruses: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `viruses` DISABLE KEYS */;
/*!40000 ALTER TABLE `viruses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
