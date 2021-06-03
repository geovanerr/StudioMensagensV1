-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: studiom
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bairros`
--

DROP TABLE IF EXISTS `bairros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bairros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bairros`
--

LOCK TABLES `bairros` WRITE;
/*!40000 ALTER TABLE `bairros` DISABLE KEYS */;
INSERT INTO `bairros` VALUES (1,'Aparecida','2021-05-31 17:39:51','2021-05-31 17:39:51'),(2,'Centro','2021-05-31 17:39:58','2021-05-31 17:39:58'),(3,'Aeroporto','2021-05-31 17:40:07','2021-05-31 17:40:07'),(4,'Asa Branca','2021-05-31 17:40:15','2021-05-31 17:40:15'),(5,'Murilo Texeira','2021-05-31 17:40:24','2021-05-31 17:40:24');
/*!40000 ALTER TABLE `bairros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logradouro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro_id` bigint(20) unsigned NOT NULL,
  `referencia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` datetime NOT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_bairro_id_foreign` (`bairro_id`),
  CONSTRAINT `clientes_bairro_id_foreign` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Andreya Gomes','Rua Enedia Jucene','742',5,NULL,NULL,'(95) 98123-1419','2000-04-01 00:00:00','Feminino',NULL,'2021-05-31 17:47:18','2021-05-31 17:47:18'),(2,'Chico','Av, Princesa Isabel','1616',4,'proximo al tal',NULL,'(95) 98123-2323','1989-12-10 00:00:00','Masculino','Lele','2021-05-31 17:48:31','2021-05-31 17:48:31'),(3,'Julia','Pedo Praça','1911',3,NULL,NULL,'(95) 98117-1819','2006-12-13 00:00:00','Feminino',NULL,'2021-05-31 17:49:10','2021-05-31 17:49:10'),(4,'Ari','La placa del nero','3131',1,'Ari Referencia',NULL,'(95) 9811-51010','2001-05-31 00:00:00','Masculino','Lalblauaaeee','2021-05-31 17:50:23','2021-06-01 11:59:50'),(5,'Bob Esponha','Fenda do Biquini','100',2,'Vizinho do lula molusco',NULL,'(95) 98110-1010','2000-10-01 00:00:00','Masculino','Calça Quadrada.','2021-06-01 11:58:38','2021-06-01 11:58:38');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cobradores`
--

DROP TABLE IF EXISTS `cobradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cobradores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cobrador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cobradores`
--

LOCK TABLES `cobradores` WRITE;
/*!40000 ALTER TABLE `cobradores` DISABLE KEYS */;
INSERT INTO `cobradores` VALUES (1,'Uber',10.00,'2021-05-31 17:43:49','2021-05-31 17:43:49'),(2,'99 Taxi',12.00,'2021-05-31 17:44:02','2021-05-31 17:44:02'),(3,'Seu barriga',6.00,'2021-05-31 17:44:11','2021-05-31 17:44:11'),(4,'Chiquinho',7.00,'2021-05-31 17:44:24','2021-05-31 17:44:24');
/*!40000 ALTER TABLE `cobradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logradouro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro_id` bigint(20) unsigned NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` datetime NOT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `funcionarios_email_unique` (`email`),
  KEY `funcionarios_bairro_id_foreign` (`bairro_id`),
  CONSTRAINT `funcionarios_bairro_id_foreign` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagens`
--

LOCK TABLES `mensagens` WRITE;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` VALUES (1,'Casamento M - 001','2021-05-31 17:41:00','2021-05-31 17:41:00'),(2,'Casamento F - 002','2021-05-31 17:41:12','2021-05-31 17:41:12'),(3,'Namoro F - 003','2021-05-31 17:41:39','2021-05-31 17:41:39'),(4,'Namoro M - 004','2021-05-31 17:41:50','2021-05-31 17:41:50'),(5,'Feliz dia das Mães M - 005','2021-05-31 17:42:10','2021-05-31 17:42:27'),(6,'Feliz dia das Mães F - 006','2021-05-31 17:42:38','2021-05-31 17:42:38'),(7,'Pais M - 007','2021-05-31 17:42:54','2021-05-31 17:42:54'),(8,'Pais F - 008','2021-05-31 17:43:03','2021-05-31 17:43:03');
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_09_25_164243_creat_bairros_table',1),(2,'2014_09_25_164243_creat_cobradores_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(6,'2019_08_19_000000_create_failed_jobs_table',1),(7,'2019_12_14_000001_create_personal_access_tokens_table',1),(8,'2021_03_24_172301_create_servicos_table',1),(9,'2021_03_27_001433_create_clientes_table',1),(10,'2021_03_27_164243_creat_mensagens_table',1),(11,'2021_03_31_170538_create_sessions_table',1),(12,'2021_04_13_211511_create_ordens_table',1),(13,'2021_04_27_180651_create_ordem_servicos_table',1),(14,'2021_05_04_002532_creat_funcionarios_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem_servicos`
--

DROP TABLE IF EXISTS `ordem_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordem_servicos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ordem_id` bigint(20) unsigned NOT NULL,
  `servico_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ordem_servicos_ordem_id_foreign` (`ordem_id`),
  KEY `ordem_servicos_servico_id_foreign` (`servico_id`),
  CONSTRAINT `ordem_servicos_ordem_id_foreign` FOREIGN KEY (`ordem_id`) REFERENCES `ordens` (`id`),
  CONSTRAINT `ordem_servicos_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_servicos`
--

LOCK TABLES `ordem_servicos` WRITE;
/*!40000 ALTER TABLE `ordem_servicos` DISABLE KEYS */;
INSERT INTO `ordem_servicos` VALUES (1,1,6,NULL,NULL),(2,2,1,NULL,NULL),(3,2,2,NULL,NULL),(4,2,5,NULL,NULL),(5,3,1,NULL,NULL),(6,3,6,NULL,NULL),(7,4,4,NULL,NULL),(8,5,2,NULL,NULL),(9,4,1,NULL,NULL),(10,6,2,NULL,NULL),(11,6,3,NULL,NULL);
/*!40000 ALTER TABLE `ordem_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordens`
--

DROP TABLE IF EXISTS `ordens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint(20) unsigned NOT NULL,
  `mensagem_id` bigint(20) unsigned NOT NULL,
  `cobrador_id` bigint(20) unsigned NOT NULL,
  `receptor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoros` decimal(10,2) NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataos` datetime NOT NULL,
  `horarioos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obscobrador` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ordens_cliente_id_foreign` (`cliente_id`),
  KEY `ordens_mensagem_id_foreign` (`mensagem_id`),
  KEY `ordens_cobrador_id_foreign` (`cobrador_id`),
  CONSTRAINT `ordens_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `ordens_cobrador_id_foreign` FOREIGN KEY (`cobrador_id`) REFERENCES `cobradores` (`id`),
  CONSTRAINT `ordens_mensagem_id_foreign` FOREIGN KEY (`mensagem_id`) REFERENCES `mensagens` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordens`
--

LOCK TABLES `ordens` WRITE;
/*!40000 ALTER TABLE `ordens` DISABLE KEYS */;
INSERT INTO `ordens` VALUES (1,4,2,3,'Maria do Carmo',85.50,NULL,'(95) 9811-70806','Feminino','2021-06-01 00:00:00','4:03 PM','Realizada',NULL,NULL,'2021-05-31 17:59:33','2021-05-31 19:43:44'),(2,2,3,1,'Pepa pig',160.10,'(95) 3626-2323','(95) 9812-32322','Feminino','2021-05-31 00:00:00','10:03 PM','Realizada','OS teste pepa','Pagamento no cartão','2021-05-31 18:21:26','2021-05-31 19:41:29'),(3,1,2,4,'Didioo',130.00,'(95) 3626-2323','(95) 9812-14111','Masculino','2021-05-31 00:00:00','6:00 PM','Aberta','Teste','LalaLele','2021-05-31 19:51:22','2021-05-31 22:15:35'),(4,3,3,2,'MIcs',65.50,'(95) 3626-2323','(95) 9811-01313','Masculino','2021-05-31 00:00:00','9:00 PM','Realizada',NULL,NULL,'2021-05-31 20:01:13','2021-06-01 12:00:48'),(5,1,5,1,'Isys',35.00,NULL,'(95) 9212-31515','Nao Informar','2021-06-01 00:00:00','6:00 PM','Realizada',NULL,NULL,'2021-05-31 20:04:09','2021-05-31 22:07:53'),(6,5,7,3,'Patrick',135.30,NULL,'(95) 98110-1010','Masculino','2021-06-02 00:00:00','9:00 AM','Aberta','Desejo a Você um Feliz dia dos Pais Patriiiickkkkee','Pagando na fenda do biqueini','2021-06-01 12:05:52','2021-06-01 12:05:52');
/*!40000 ALTER TABLE `ordens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `servico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (1,'Fonada',13.00,'2021-05-31 17:44:44','2021-06-01 11:57:40'),(2,'Cesta de Café',60.00,'2021-05-31 17:44:55','2021-05-31 17:44:55'),(3,'Carro de SOm',62.50,'2021-05-31 17:45:06','2021-05-31 17:45:06'),(4,'Flores - P',30.00,'2021-05-31 17:45:22','2021-05-31 17:45:22'),(5,'Flores - M',45.00,'2021-05-31 17:45:33','2021-05-31 17:45:33'),(6,'Flores - G',90.50,'2021-05-31 17:45:56','2021-05-31 17:45:56');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('X26yyU0AJiIU5lnDC6J9VNaeKT9OYi1MAzFYOmPZ',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoienNiZGI4eDJiSklFdWpvTXVmc2QzY3I1eVNtdXVHNlVDTVd2a3B5TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1622552202),('zYdDzejsxVv58uoDnncH82Ro7wq7VMQqoCkajyTI',2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTFRqY3VheGNVTjNqNHJRcXAxZHIwbVd6Y2VwQ1o2ZlVlTGRFdndFRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbC5zdG0uY29tL3JlbGF0b3Jpb3MvaW5kZXhvcmRlbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkeFNTYTBhbHdqM1J4LllBSVlETk55dXVlVHEuVlRmMjRjdUhBcFB1ZzRBUkpoLnlSMVBXcHkiO30=',1622552794);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logradouro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro_id` bigint(20) unsigned DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nascimento` datetime DEFAULT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_bairro_id_foreign` (`bairro_id`),
  CONSTRAINT `users_bairro_id_foreign` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Geovane Vieira','geovanerr@gmail.com',NULL,'$2y$10$8dNiENfoTuuSsuq1uGiI2uHwXwUFPkbPv.vWnYqtvqj34YCxFSaoO',NULL,NULL,'992.153.492-00','Eneida Jucene','742',NULL,'(95) 3626-2323','(95) 98121-4111','2021-07-21 00:00:00','Masculino','Administrador',NULL,NULL,NULL,NULL,NULL),(2,'Sandro Feal','sandro@teste',NULL,'$2y$10$xSSa0alwj3Rx.YAIYDNNyuueTq.VTf24cuHApPug4ARJh.yR1PWpy',NULL,NULL,'111.111.111-11','Rua Vai e volta','15',4,NULL,'(95) 98123-1313','1987-05-13 00:00:00','Masculino','Gerente',NULL,NULL,NULL,'2021-05-31 17:51:57','2021-05-31 17:51:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-03 14:03:00
