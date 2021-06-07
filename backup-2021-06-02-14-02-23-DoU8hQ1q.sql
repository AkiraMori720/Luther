-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: luthorr
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fqlRA_dy_accounts`
--

DROP TABLE IF EXISTS `fqlRA_dy_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_accounts` (
  `account_id` int unsigned NOT NULL AUTO_INCREMENT,
  `account_user_id` bigint unsigned NOT NULL,
  `account_balance` double NOT NULL DEFAULT '0',
  `account_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_add_time` bigint NOT NULL DEFAULT '1611767111',
  `account_update_time` bigint NOT NULL DEFAULT '1611767111',
  `account_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`account_id`),
  KEY `fk_dy_accounts_oz_users` (`account_user_id`),
  KEY `fk_dy_accounts_dy_currencies` (`account_currency_code`),
  CONSTRAINT `fk_dy_accounts_dy_currencies` FOREIGN KEY (`account_currency_code`) REFERENCES `fqlRA_dy_currencies` (`currency_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_accounts_oz_users` FOREIGN KEY (`account_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_accounts`
--

LOCK TABLES `fqlRA_dy_accounts` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_addresses`
--

DROP TABLE IF EXISTS `fqlRA_dy_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_addresses` (
  `address_id` int unsigned NOT NULL AUTO_INCREMENT,
  `address_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address_target_id` int unsigned NOT NULL,
  `address_is_main` tinyint(1) NOT NULL DEFAULT '0',
  `address_longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address_latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_add_time` bigint NOT NULL DEFAULT '1611767111',
  `address_update_time` bigint NOT NULL DEFAULT '1611767111',
  `address_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_addresses`
--

LOCK TABLES `fqlRA_dy_addresses` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_categories`
--

DROP TABLE IF EXISTS `fqlRA_dy_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_categories` (
  `category_id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(6500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0_0',
  `category_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_add_time` bigint NOT NULL DEFAULT '1611767111',
  `category_update_time` bigint NOT NULL DEFAULT '1611767111',
  `category_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_categories`
--

LOCK TABLES `fqlRA_dy_categories` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_categories` DISABLE KEYS */;
INSERT INTO `fqlRA_dy_categories` VALUES (1,'product','Pasta & risotto','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1_26e3c8d640b597e3a47c9368a0d6fe4a','[]',1610743439,1610743439,1),(2,'product','Salad','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2_e92f37bc0a392474b9ea537a1ce5acaf','[]',1610743509,1610743509,1),(3,'product','Pizza','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','3_042713213e832bf2b2e0ec9dd0089156','[]',1610743574,1610743574,1),(4,'product','Sandwiches & Wraps','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','4_9e5278aea5643440c5609a1354c25a58','[]',1610743704,1610743704,1),(5,'product','Drinks','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','5_626188526f964a6daaf411cef27e3dcd','[]',1610743844,1610743844,1),(6,'product','Bread & doughs','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','6_dd0acd5b8b0ca52d0268d78c978ccb43','[]',1610743962,1610743962,1);
/*!40000 ALTER TABLE `fqlRA_dy_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_chats`
--

DROP TABLE IF EXISTS `fqlRA_dy_chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_chats` (
  `chat_id` int unsigned NOT NULL AUTO_INCREMENT,
  `chat_created_by` bigint unsigned NOT NULL,
  `chat_company_id` int unsigned DEFAULT NULL,
  `chat_target_id` bigint unsigned DEFAULT NULL,
  `chat_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_add_time` bigint NOT NULL DEFAULT '1611767111',
  `chat_update_time` bigint NOT NULL DEFAULT '1611767111',
  `chat_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`chat_id`),
  KEY `fk_dy_chats_oz_users` (`chat_created_by`),
  KEY `fk_dy_chats_dy_companies` (`chat_company_id`),
  CONSTRAINT `fk_dy_chats_dy_companies` FOREIGN KEY (`chat_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_chats_oz_users` FOREIGN KEY (`chat_created_by`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_chats`
--

LOCK TABLES `fqlRA_dy_chats` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_chats` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_companies`
--

DROP TABLE IF EXISTS `fqlRA_dy_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_companies` (
  `company_id` int unsigned NOT NULL AUTO_INCREMENT,
  `company_owner_id` bigint unsigned NOT NULL,
  `company_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_image` varchar(6500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0_0',
  `company_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_add_time` bigint NOT NULL DEFAULT '1611767111',
  `company_update_time` bigint NOT NULL DEFAULT '1611767111',
  `company_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`company_id`),
  KEY `fk_dy_companies_oz_users` (`company_owner_id`),
  CONSTRAINT `fk_dy_companies_oz_users` FOREIGN KEY (`company_owner_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_companies`
--

LOCK TABLES `fqlRA_dy_companies` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_companies` DISABLE KEYS */;
INSERT INTO `fqlRA_dy_companies` VALUES (1,1,'restaurant','IKOKO','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','7_bccab23ce5d3d5c1a42899792cda741a','[]',1610905315,1610905315,1);
/*!40000 ALTER TABLE `fqlRA_dy_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_currencies`
--

DROP TABLE IF EXISTS `fqlRA_dy_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_currencies` (
  `currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name_real` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_mantissa` int NOT NULL DEFAULT '2',
  `currency_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_add_time` bigint NOT NULL DEFAULT '1611767111',
  `currency_update_time` bigint NOT NULL DEFAULT '1611767111',
  `currency_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`currency_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_currencies`
--

LOCK TABLES `fqlRA_dy_currencies` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_currencies` DISABLE KEYS */;
INSERT INTO `fqlRA_dy_currencies` VALUES ('EUR','€','Euro','Euro',2,'[]',1570706703,1570706703,1),('USD','$','United States dollar','United States dollar',2,'[]',1570706703,1570706703,1),('XOF','Fr','West African CFA franc','West African CFA franc',2,'[]',1570706703,1570706703,1);
/*!40000 ALTER TABLE `fqlRA_dy_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_deliverers`
--

DROP TABLE IF EXISTS `fqlRA_dy_deliverers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_deliverers` (
  `deliverer_id` int unsigned NOT NULL AUTO_INCREMENT,
  `deliverer_user_id` bigint unsigned NOT NULL,
  `deliverer_company_id` int unsigned DEFAULT NULL,
  `deliverer_available` tinyint(1) NOT NULL DEFAULT '1',
  `deliverer_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliverer_add_time` bigint NOT NULL DEFAULT '1611767111',
  `deliverer_update_time` bigint NOT NULL DEFAULT '1611767111',
  `deliverer_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`deliverer_id`),
  KEY `fk_dy_deliverers_oz_users` (`deliverer_user_id`),
  KEY `fk_dy_deliverers_dy_companies` (`deliverer_company_id`),
  CONSTRAINT `fk_dy_deliverers_dy_companies` FOREIGN KEY (`deliverer_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_deliverers_oz_users` FOREIGN KEY (`deliverer_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_deliverers`
--

LOCK TABLES `fqlRA_dy_deliverers` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_deliverers` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_deliverers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_deliveries`
--

DROP TABLE IF EXISTS `fqlRA_dy_deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_deliveries` (
  `delivery_id` int unsigned NOT NULL AUTO_INCREMENT,
  `delivery_user_id` bigint unsigned NOT NULL,
  `delivery_order_id` int unsigned NOT NULL,
  `delivery_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_stars` tinyint DEFAULT NULL,
  `delivery_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_add_time` bigint NOT NULL DEFAULT '1611767111',
  `delivery_update_time` bigint NOT NULL DEFAULT '1611767111',
  `delivery_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`delivery_id`),
  KEY `fk_dy_deliveries_oz_users` (`delivery_user_id`),
  KEY `fk_dy_deliveries_dy_orders` (`delivery_order_id`),
  CONSTRAINT `fk_dy_deliveries_dy_orders` FOREIGN KEY (`delivery_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_deliveries_oz_users` FOREIGN KEY (`delivery_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_deliveries`
--

LOCK TABLES `fqlRA_dy_deliveries` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_deliveries` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_devices`
--

DROP TABLE IF EXISTS `fqlRA_dy_devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_devices` (
  `dv_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dv_user_id` bigint unsigned DEFAULT NULL,
  `dv_os` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dv_app` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dv_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dv_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dv_add_time` bigint NOT NULL DEFAULT '1611767111',
  `dv_update_time` bigint NOT NULL DEFAULT '1611767111',
  `dv_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dv_id`),
  KEY `fk_dy_devices_oz_users` (`dv_user_id`),
  CONSTRAINT `fk_dy_devices_oz_users` FOREIGN KEY (`dv_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_devices`
--

LOCK TABLES `fqlRA_dy_devices` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_discounts`
--

DROP TABLE IF EXISTS `fqlRA_dy_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_discounts` (
  `order_discount_id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_discount_user_id` bigint unsigned NOT NULL,
  `order_discount_order_id` int unsigned NOT NULL,
  `order_discount_order_line_id` int unsigned DEFAULT NULL,
  `order_discount_promo_id` int unsigned DEFAULT NULL,
  `order_discount_amount` double NOT NULL,
  `order_discount_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_discount_exchange_id` int unsigned NOT NULL,
  `order_discount_before_vat` tinyint(1) NOT NULL,
  `order_discount_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_discount_add_time` bigint NOT NULL DEFAULT '1611767111',
  `order_discount_update_time` bigint NOT NULL DEFAULT '1611767111',
  `order_discount_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_discount_id`),
  KEY `fk_dy_discounts_dy_promos` (`order_discount_promo_id`),
  KEY `fk_dy_discounts_dy_orders` (`order_discount_order_id`),
  KEY `fk_dy_discounts_dy_order_lines` (`order_discount_order_line_id`),
  KEY `fk_dy_discounts_dy_exchanges` (`order_discount_exchange_id`),
  KEY `fk_dy_discounts_oz_users` (`order_discount_user_id`),
  CONSTRAINT `fk_dy_discounts_dy_exchanges` FOREIGN KEY (`order_discount_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_discounts_dy_order_lines` FOREIGN KEY (`order_discount_order_line_id`) REFERENCES `fqlRA_dy_order_lines` (`order_line_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_discounts_dy_orders` FOREIGN KEY (`order_discount_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_discounts_dy_promos` FOREIGN KEY (`order_discount_promo_id`) REFERENCES `fqlRA_dy_promos` (`promo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_discounts_oz_users` FOREIGN KEY (`order_discount_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_discounts`
--

LOCK TABLES `fqlRA_dy_discounts` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_employees`
--

DROP TABLE IF EXISTS `fqlRA_dy_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_employees` (
  `employee_id` int unsigned NOT NULL AUTO_INCREMENT,
  `employee_user_id` bigint unsigned NOT NULL,
  `employee_company_id` int unsigned DEFAULT NULL,
  `employee_role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_access` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_add_time` bigint NOT NULL DEFAULT '1611767111',
  `employee_update_time` bigint NOT NULL DEFAULT '1611767111',
  `employee_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_id`),
  KEY `fk_dy_employees_oz_users` (`employee_user_id`),
  KEY `fk_dy_employees_dy_companies` (`employee_company_id`),
  CONSTRAINT `fk_dy_employees_dy_companies` FOREIGN KEY (`employee_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_employees_oz_users` FOREIGN KEY (`employee_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_employees`
--

LOCK TABLES `fqlRA_dy_employees` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_exchanges`
--

DROP TABLE IF EXISTS `fqlRA_dy_exchanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_exchanges` (
  `exchange_id` int unsigned NOT NULL AUTO_INCREMENT,
  `exchange_from` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_to` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` double NOT NULL,
  `exchange_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_add_time` bigint NOT NULL DEFAULT '1611767111',
  `exchange_update_time` bigint NOT NULL DEFAULT '1611767111',
  `exchange_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`exchange_id`),
  KEY `fk_dy_exchanges_dy_currencies` (`exchange_from`),
  KEY `fk_e845fbea4fa64c8500d58e99fd6ea357` (`exchange_to`),
  CONSTRAINT `fk_dy_exchanges_dy_currencies` FOREIGN KEY (`exchange_from`) REFERENCES `fqlRA_dy_currencies` (`currency_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_e845fbea4fa64c8500d58e99fd6ea357` FOREIGN KEY (`exchange_to`) REFERENCES `fqlRA_dy_currencies` (`currency_code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_exchanges`
--

LOCK TABLES `fqlRA_dy_exchanges` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_exchanges` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_exchanges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_fees`
--

DROP TABLE IF EXISTS `fqlRA_dy_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_fees` (
  `fee_id` int unsigned NOT NULL AUTO_INCREMENT,
  `fee_order_id` int unsigned NOT NULL,
  `fee_order_line_id` int unsigned DEFAULT NULL,
  `fee_vat_id` int unsigned DEFAULT NULL,
  `fee_delivery_id` int unsigned DEFAULT NULL,
  `fee_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_amount` double NOT NULL,
  `fee_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_exchange_id` int unsigned NOT NULL,
  `fee_before_vat` tinyint(1) NOT NULL,
  `fee_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_add_time` bigint NOT NULL DEFAULT '1611767111',
  `fee_update_time` bigint NOT NULL DEFAULT '1611767111',
  `fee_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`fee_id`),
  KEY `fk_dy_fees_dy_orders` (`fee_order_id`),
  KEY `fk_dy_fees_dy_order_lines` (`fee_order_line_id`),
  KEY `fk_dy_fees_dy_exchanges` (`fee_exchange_id`),
  KEY `fk_dy_fees_dy_vats` (`fee_vat_id`),
  KEY `fk_dy_fees_dy_deliveries` (`fee_delivery_id`),
  CONSTRAINT `fk_dy_fees_dy_deliveries` FOREIGN KEY (`fee_delivery_id`) REFERENCES `fqlRA_dy_deliveries` (`delivery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_fees_dy_exchanges` FOREIGN KEY (`fee_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_fees_dy_order_lines` FOREIGN KEY (`fee_order_line_id`) REFERENCES `fqlRA_dy_order_lines` (`order_line_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_fees_dy_orders` FOREIGN KEY (`fee_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_fees_dy_vats` FOREIGN KEY (`fee_vat_id`) REFERENCES `fqlRA_dy_vats` (`vat_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_fees`
--

LOCK TABLES `fqlRA_dy_fees` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_messages`
--

DROP TABLE IF EXISTS `fqlRA_dy_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_messages` (
  `message_id` int unsigned NOT NULL AUTO_INCREMENT,
  `message_sender_id` bigint unsigned NOT NULL,
  `message_chat_id` int unsigned NOT NULL,
  `message_ref_id` int unsigned DEFAULT NULL,
  `message_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_read` tinyint(1) NOT NULL DEFAULT '0',
  `message_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_add_time` bigint NOT NULL DEFAULT '1611767111',
  `message_update_time` bigint NOT NULL DEFAULT '1611767111',
  `message_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`message_id`),
  KEY `fk_dy_messages_dy_chats` (`message_chat_id`),
  KEY `fk_dy_messages_oz_users` (`message_sender_id`),
  KEY `fk_dy_messages_dy_messages` (`message_ref_id`),
  CONSTRAINT `fk_dy_messages_dy_chats` FOREIGN KEY (`message_chat_id`) REFERENCES `fqlRA_dy_chats` (`chat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_messages_dy_messages` FOREIGN KEY (`message_ref_id`) REFERENCES `fqlRA_dy_messages` (`message_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_messages_oz_users` FOREIGN KEY (`message_sender_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_messages`
--

LOCK TABLES `fqlRA_dy_messages` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_order_lines`
--

DROP TABLE IF EXISTS `fqlRA_dy_order_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_order_lines` (
  `order_line_id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_line_order_id` int unsigned NOT NULL,
  `order_line_product_id` bigint unsigned NOT NULL,
  `order_line_company_id` int unsigned NOT NULL,
  `order_line_quantity` double NOT NULL DEFAULT '1',
  `order_line_price` double NOT NULL,
  `order_line_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_line_exchange_id` int unsigned NOT NULL,
  `order_line_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_line_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_line_add_time` bigint NOT NULL DEFAULT '1611767111',
  `order_line_update_time` bigint NOT NULL DEFAULT '1611767111',
  `order_line_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_line_id`),
  KEY `fk_dy_order_lines_dy_orders` (`order_line_order_id`),
  KEY `fk_dy_order_lines_dy_products` (`order_line_product_id`),
  KEY `fk_dy_order_lines_dy_companies` (`order_line_company_id`),
  KEY `fk_dy_order_lines_dy_exchanges` (`order_line_exchange_id`),
  CONSTRAINT `fk_dy_order_lines_dy_companies` FOREIGN KEY (`order_line_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_order_lines_dy_exchanges` FOREIGN KEY (`order_line_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_order_lines_dy_orders` FOREIGN KEY (`order_line_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_order_lines_dy_products` FOREIGN KEY (`order_line_product_id`) REFERENCES `fqlRA_dy_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_order_lines`
--

LOCK TABLES `fqlRA_dy_order_lines` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_order_lines` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_order_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_orders`
--

DROP TABLE IF EXISTS `fqlRA_dy_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_orders` (
  `order_id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_user_id` bigint unsigned NOT NULL,
  `order_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_add_time` bigint NOT NULL DEFAULT '1611767111',
  `order_update_time` bigint NOT NULL DEFAULT '1611767111',
  `order_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_id`),
  KEY `fk_dy_orders_oz_users` (`order_user_id`),
  CONSTRAINT `fk_dy_orders_oz_users` FOREIGN KEY (`order_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_orders`
--

LOCK TABLES `fqlRA_dy_orders` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_payments`
--

DROP TABLE IF EXISTS `fqlRA_dy_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_payments` (
  `payment_id` int unsigned NOT NULL AUTO_INCREMENT,
  `payment_ref` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_order_id` int unsigned NOT NULL,
  `payment_amount` double NOT NULL,
  `payment_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_exchange_id` int unsigned NOT NULL,
  `payment_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_add_time` bigint NOT NULL DEFAULT '1611767111',
  `payment_update_time` bigint NOT NULL DEFAULT '1611767111',
  `payment_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`payment_id`),
  KEY `fk_dy_payments_dy_orders` (`payment_order_id`),
  KEY `fk_dy_payments_dy_exchanges` (`payment_exchange_id`),
  CONSTRAINT `fk_dy_payments_dy_exchanges` FOREIGN KEY (`payment_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_payments_dy_orders` FOREIGN KEY (`payment_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_payments`
--

LOCK TABLES `fqlRA_dy_payments` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_products`
--

DROP TABLE IF EXISTS `fqlRA_dy_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_products` (
  `product_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_company_id` int unsigned NOT NULL,
  `product_category_id` int unsigned NOT NULL,
  `product_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `product_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_images` varchar(6500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_vat_id` int unsigned DEFAULT NULL,
  `product_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_add_time` bigint NOT NULL DEFAULT '1611767111',
  `product_update_time` bigint NOT NULL DEFAULT '1611767111',
  `product_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`),
  KEY `fk_dy_products_dy_companies` (`product_company_id`),
  KEY `fk_dy_products_dy_categories` (`product_category_id`),
  KEY `fk_dy_products_dy_currencies` (`product_currency_code`),
  KEY `fk_dy_products_dy_vats` (`product_vat_id`),
  CONSTRAINT `fk_dy_products_dy_categories` FOREIGN KEY (`product_category_id`) REFERENCES `fqlRA_dy_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_products_dy_companies` FOREIGN KEY (`product_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_products_dy_currencies` FOREIGN KEY (`product_currency_code`) REFERENCES `fqlRA_dy_currencies` (`currency_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_products_dy_vats` FOREIGN KEY (`product_vat_id`) REFERENCES `fqlRA_dy_vats` (`vat_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_products`
--

LOCK TABLES `fqlRA_dy_products` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_products` DISABLE KEYS */;
INSERT INTO `fqlRA_dy_products` VALUES (1,1,1,NULL,'Honeymoon spaghetti','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','[\"8_b9830a9484213086a8a3078ff64dd998\"]',15,'USD',NULL,'[]',1611692172,1616331454,1),(2,1,3,NULL,'Pizza twister bread','','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','[\"9_2cb9a9c08a1fc71df458a0e16bd930cf\"]',7,'USD',NULL,'[]',1611697780,1611697780,1);
/*!40000 ALTER TABLE `fqlRA_dy_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_promo_products`
--

DROP TABLE IF EXISTS `fqlRA_dy_promo_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_promo_products` (
  `pp_promo_id` int unsigned NOT NULL,
  `pp_product_id` bigint unsigned NOT NULL,
  `pp_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pp_add_time` bigint NOT NULL DEFAULT '1611767111',
  `pp_update_time` bigint NOT NULL DEFAULT '1611767111',
  `pp_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pp_promo_id`,`pp_product_id`),
  KEY `fk_dy_promo_products_dy_products` (`pp_product_id`),
  CONSTRAINT `fk_dy_promo_products_dy_products` FOREIGN KEY (`pp_product_id`) REFERENCES `fqlRA_dy_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_promo_products_dy_promos` FOREIGN KEY (`pp_promo_id`) REFERENCES `fqlRA_dy_promos` (`promo_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_promo_products`
--

LOCK TABLES `fqlRA_dy_promo_products` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_promo_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_promo_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_promos`
--

DROP TABLE IF EXISTS `fqlRA_dy_promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_promos` (
  `promo_id` int unsigned NOT NULL AUTO_INCREMENT,
  `promo_ref` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_company_id` int unsigned DEFAULT NULL,
  `promo_title` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_auto_apply` tinyint(1) NOT NULL DEFAULT '0',
  `promo_total_applied` int NOT NULL DEFAULT '0',
  `promo_max_apply` int NOT NULL DEFAULT '1',
  `promo_max_user_apply` int NOT NULL DEFAULT '1',
  `promo_before_vat` tinyint(1) NOT NULL,
  `promo_amount` double NOT NULL DEFAULT '0',
  `promo_percent` double NOT NULL DEFAULT '0',
  `promo_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_start_time` bigint DEFAULT NULL,
  `promo_end_time` bigint DEFAULT NULL,
  `promo_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_add_time` bigint NOT NULL DEFAULT '1611767111',
  `promo_update_time` bigint NOT NULL DEFAULT '1611767111',
  `promo_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`promo_id`),
  KEY `fk_dy_promos_dy_companies` (`promo_company_id`),
  CONSTRAINT `fk_dy_promos_dy_companies` FOREIGN KEY (`promo_company_id`) REFERENCES `fqlRA_dy_companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_promos`
--

LOCK TABLES `fqlRA_dy_promos` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_promos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_promos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_pubs`
--

DROP TABLE IF EXISTS `fqlRA_dy_pubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_pubs` (
  `pub_id` int unsigned NOT NULL AUTO_INCREMENT,
  `pub_ref` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub_image` varchar(6500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pub_add_time` bigint NOT NULL DEFAULT '1611767111',
  `pub_update_time` bigint NOT NULL DEFAULT '1611767111',
  `pub_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_pubs`
--

LOCK TABLES `fqlRA_dy_pubs` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_pubs` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_pubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_refunds`
--

DROP TABLE IF EXISTS `fqlRA_dy_refunds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_refunds` (
  `refund_id` int unsigned NOT NULL AUTO_INCREMENT,
  `refund_order_id` int unsigned NOT NULL,
  `refund_order_line_id` int unsigned DEFAULT NULL,
  `refund_payment_id` int unsigned DEFAULT NULL,
  `refund_transaction_id` int unsigned DEFAULT NULL,
  `refund_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_exchange_id` int unsigned NOT NULL,
  `refund_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_add_time` bigint NOT NULL DEFAULT '1611767111',
  `refund_update_time` bigint NOT NULL DEFAULT '1611767111',
  `refund_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`refund_id`),
  KEY `fk_dy_refunds_dy_orders` (`refund_order_id`),
  KEY `fk_dy_refunds_dy_order_lines` (`refund_order_line_id`),
  KEY `fk_dy_refunds_dy_payments` (`refund_payment_id`),
  KEY `fk_dy_refunds_dy_transactions` (`refund_transaction_id`),
  KEY `fk_dy_refunds_dy_exchanges` (`refund_exchange_id`),
  CONSTRAINT `fk_dy_refunds_dy_exchanges` FOREIGN KEY (`refund_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_refunds_dy_order_lines` FOREIGN KEY (`refund_order_line_id`) REFERENCES `fqlRA_dy_order_lines` (`order_line_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_refunds_dy_orders` FOREIGN KEY (`refund_order_id`) REFERENCES `fqlRA_dy_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_refunds_dy_payments` FOREIGN KEY (`refund_payment_id`) REFERENCES `fqlRA_dy_payments` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_refunds_dy_transactions` FOREIGN KEY (`refund_transaction_id`) REFERENCES `fqlRA_dy_transactions` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_refunds`
--

LOCK TABLES `fqlRA_dy_refunds` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_refunds` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_refunds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_transactions`
--

DROP TABLE IF EXISTS `fqlRA_dy_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_transactions` (
  `transaction_id` int unsigned NOT NULL AUTO_INCREMENT,
  `transaction_ref` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_user_id` bigint unsigned DEFAULT NULL,
  `transaction_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_amount` double NOT NULL,
  `transaction_currency_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_exchange_id` int unsigned NOT NULL,
  `transaction_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_add_time` bigint NOT NULL DEFAULT '1611767111',
  `transaction_update_time` bigint NOT NULL DEFAULT '1611767111',
  `transaction_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`transaction_id`),
  KEY `fk_dy_transactions_dy_exchanges` (`transaction_exchange_id`),
  KEY `fk_dy_transactions_oz_users` (`transaction_user_id`),
  CONSTRAINT `fk_dy_transactions_dy_exchanges` FOREIGN KEY (`transaction_exchange_id`) REFERENCES `fqlRA_dy_exchanges` (`exchange_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dy_transactions_oz_users` FOREIGN KEY (`transaction_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_transactions`
--

LOCK TABLES `fqlRA_dy_transactions` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_dy_vats`
--

DROP TABLE IF EXISTS `fqlRA_dy_vats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_dy_vats` (
  `vat_id` int unsigned NOT NULL AUTO_INCREMENT,
  `vat_company_id` int unsigned DEFAULT NULL,
  `vat_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_name` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_value` double NOT NULL,
  `vat_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_add_time` bigint NOT NULL DEFAULT '1611767111',
  `vat_update_time` bigint NOT NULL DEFAULT '1611767111',
  `vat_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_dy_vats`
--

LOCK TABLES `fqlRA_dy_vats` WRITE;
/*!40000 ALTER TABLE `fqlRA_dy_vats` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_dy_vats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_administrators`
--

DROP TABLE IF EXISTS `fqlRA_oz_administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_administrators` (
  `admin_user_id` bigint unsigned NOT NULL,
  `admin_level` tinyint NOT NULL DEFAULT '1',
  `admin_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_add_time` bigint NOT NULL DEFAULT '1611767111',
  `admin_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_user_id`),
  CONSTRAINT `fk_oz_administrators_oz_users` FOREIGN KEY (`admin_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_administrators`
--

LOCK TABLES `fqlRA_oz_administrators` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_administrators` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_administrators` VALUES (1,1,'[]',1510920268,1),(2,1,'[]',1510920268,1);
/*!40000 ALTER TABLE `fqlRA_oz_administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_authenticator`
--

DROP TABLE IF EXISTS `fqlRA_oz_authenticator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_authenticator` (
  `auth_label` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_for` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_token` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_try_max` int unsigned NOT NULL DEFAULT '1',
  `auth_try_count` int unsigned NOT NULL DEFAULT '0',
  `auth_expire` bigint NOT NULL,
  `auth_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_add_time` bigint NOT NULL DEFAULT '1611767111',
  `auth_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`auth_label`,`auth_for`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_authenticator`
--

LOCK TABLES `fqlRA_oz_authenticator` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_authenticator` DISABLE KEYS */;
/*!40000 ALTER TABLE `fqlRA_oz_authenticator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_clients`
--

DROP TABLE IF EXISTS `fqlRA_oz_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_clients` (
  `client_api_key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_user_id` bigint unsigned DEFAULT NULL,
  `client_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_session_life_time` bigint unsigned NOT NULL DEFAULT '86400',
  `client_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_add_time` bigint NOT NULL DEFAULT '1611767111',
  `client_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`client_api_key`),
  KEY `fk_oz_clients_oz_users` (`client_user_id`),
  CONSTRAINT `fk_oz_clients_oz_users` FOREIGN KEY (`client_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_clients`
--

LOCK TABLES `fqlRA_oz_clients` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_clients` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_clients` VALUES ('636453B6-C0B601E4-98B1029D-074F1080',NULL,'http://www.luthorr.com',86400,'Luthorr Website.','[]',1598976464,1),('C055DB5D-7EF6DB26-48A5043E-D10BD9D0',NULL,'http://app.luthorr.com',2592000,'Luthorr App','[]',1588688875,1);
/*!40000 ALTER TABLE `fqlRA_oz_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_countries`
--

DROP TABLE IF EXISTS `fqlRA_oz_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_countries` (
  `country_cc2` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name_real` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_add_time` bigint NOT NULL DEFAULT '1611767111',
  `country_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`country_cc2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_countries`
--

LOCK TABLES `fqlRA_oz_countries` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_countries` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_countries` VALUES ('AD','+376','Andorra','Andorra','[]',1570706703,1),('AE','+971','United Arab Emirates','‫الإمارات العربية المتحدة‬‎','[]',1570706703,1),('AF','+93','Afghanistan','‫افغانستان‬‎','[]',1570706703,1),('AG','+1268','Antigua and Barbuda','Antigua and Barbuda','[]',1570706703,1),('AI','+1264','Anguilla','Anguilla','[]',1570706703,1),('AL','+355','Albania','Shqipëri','[]',1570706703,1),('AM','+374','Armenia','Հայաստան','[]',1570706703,1),('AO','+244','Angola','Angola','[]',1570706703,1),('AR','+54','Argentina','Argentina','[]',1570706703,1),('AS','+1684','American Samoa','American Samoa','[]',1570706703,1),('AT','+43','Austria','Österreich','[]',1570706703,1),('AU','+61','Australia','Australia','[]',1570706703,1),('AW','+297','Aruba','Aruba','[]',1570706703,1),('AX','+358','Åland Islands','Åland Islands','[]',1570706703,1),('AZ','+994','Azerbaijan','Azərbaycan','[]',1570706703,1),('BA','+387','Bosnia and Herzegovina','Босна и Херцеговина','[]',1570706703,1),('BB','+1246','Barbados','Barbados','[]',1570706703,1),('BD','+880','Bangladesh','বাংলাদেশ','[]',1570706703,1),('BE','+32','Belgium','België','[]',1570706703,1),('BF','+226','Burkina Faso','Burkina Faso','[]',1570706703,1),('BG','+359','Bulgaria','България','[]',1570706703,1),('BH','+973','Bahrain','‫البحرين‬‎','[]',1570706703,1),('BI','+257','Burundi','Uburundi','[]',1570706703,1),('BJ','+229','Benin','Bénin','[]',1570706703,1),('BL','+590','Saint Barthélemy','Saint-Barthélemy','[]',1570706703,1),('BM','+1441','Bermuda','Bermuda','[]',1570706703,1),('BN','+673','Brunei','Brunei','[]',1570706703,1),('BO','+591','Bolivia','Bolivia','[]',1570706703,1),('BQ','+599','Caribbean Netherlands','Caribbean Netherlands','[]',1570706703,1),('BR','+55','Brazil','Brasil','[]',1570706703,1),('BS','+1242','Bahamas','Bahamas','[]',1570706703,1),('BT','+975','Bhutan','འབྲུག','[]',1570706703,1),('BW','+267','Botswana','Botswana','[]',1570706703,1),('BY','+375','Belarus','Беларусь','[]',1570706703,1),('BZ','+501','Belize','Belize','[]',1570706703,1),('CA','+1','Canada','Canada','[]',1570706703,1),('CC','+61','Cocos (Keeling) Islands','Cocos (Keeling) Islands','[]',1570706703,1),('CD','+243','Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)','Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)','[]',1570706703,1),('CF','+236','Central African Republic','République centrafricaine','[]',1570706703,1),('CG','+242','Congo (Republic) (Congo-Brazzaville)','Congo (Republic) (Congo-Brazzaville)','[]',1570706703,1),('CH','+41','Switzerland','Schweiz','[]',1570706703,1),('CI','+225','Côte d’Ivoire','Côte d’Ivoire','[]',1570706703,1),('CK','+682','Cook Islands','Cook Islands','[]',1570706703,1),('CL','+56','Chile','Chile','[]',1570706703,1),('CM','+237','Cameroon','Cameroun','[]',1570706703,1),('CN','+86','China','中国','[]',1570706703,1),('CO','+57','Colombia','Colombia','[]',1570706703,1),('CR','+506','Costa Rica','Costa Rica','[]',1570706703,1),('CU','+53','Cuba','Cuba','[]',1570706703,1),('CV','+238','Cape Verde','Kabu Verdi','[]',1570706703,1),('CW','+599','Curaçao','Curaçao','[]',1570706703,1),('CX','+61','Christmas Island','Christmas Island','[]',1570706703,1),('CY','+357','Cyprus','Κύπρος','[]',1570706703,1),('CZ','+420','Czech Republic','Česká republika','[]',1570706703,1),('DE','+49','Germany','Deutschland','[]',1570706703,1),('DJ','+253','Djibouti','Djibouti','[]',1570706703,1),('DK','+45','Denmark','Danmark','[]',1570706703,1),('DM','+1767','Dominica','Dominica','[]',1570706703,1),('DO','+1','Dominican Republic','República Dominicana','[]',1570706703,1),('DZ','+213','Algeria','‫الجزائر‬‎','[]',1570706703,1),('EC','+593','Ecuador','Ecuador','[]',1570706703,1),('EE','+372','Estonia','Eesti','[]',1570706703,1),('EG','+20','Egypt','‫مصر‬‎','[]',1570706703,1),('EH','+212','Western Sahara','‫الصحراء الغربية‬‎','[]',1570706703,1),('ER','+291','Eritrea','Eritrea','[]',1570706703,1),('ES','+34','Spain','España','[]',1570706703,1),('ET','+251','Ethiopia','Ethiopia','[]',1570706703,1),('FI','+358','Finland','Suomi','[]',1570706703,1),('FJ','+679','Fiji','Fiji','[]',1570706703,1),('FK','+500','Falkland Islands','Islas Malvinas','[]',1570706703,1),('FM','+691','Micronesia','Micronesia','[]',1570706703,1),('FO','+298','Faroe Islands','Føroyar','[]',1570706703,1),('FR','+33','France','France','[]',1570706703,1),('GA','+241','Gabon','Gabon','[]',1570706703,1),('GB','+44','United Kingdom','United Kingdom','[]',1570706703,1),('GD','+1473','Grenada','Grenada','[]',1570706703,1),('GE','+995','Georgia','საქართველო','[]',1570706703,1),('GF','+594','French Guiana','Guyane française','[]',1570706703,1),('GG','+44','Guernsey','Guernsey','[]',1570706703,1),('GH','+233','Ghana','Gaana','[]',1570706703,1),('GI','+350','Gibraltar','Gibraltar','[]',1570706703,1),('GL','+299','Greenland','Kalaallit Nunaat','[]',1570706703,1),('GM','+220','Gambia','Gambia','[]',1570706703,1),('GN','+224','Guinea','Guinée','[]',1570706703,1),('GP','+590','Guadeloupe','Guadeloupe','[]',1570706703,1),('GQ','+240','Equatorial Guinea','Guinea Ecuatorial','[]',1570706703,1),('GR','+30','Greece','Ελλάδα','[]',1570706703,1),('GT','+502','Guatemala','Guatemala','[]',1570706703,1),('GU','+1671','Guam','Guam','[]',1570706703,1),('GW','+245','Guinea-Bissau','Guiné Bissau','[]',1570706703,1),('GY','+592','Guyana','Guyana','[]',1570706703,1),('HK','+852','Hong Kong','香港','[]',1570706703,1),('HN','+504','Honduras','Honduras','[]',1570706703,1),('HR','+385','Croatia','Hrvatska','[]',1570706703,1),('HT','+509','Haiti','Haiti','[]',1570706703,1),('HU','+36','Hungary','Magyarország','[]',1570706703,1),('ID','+62','Indonesia','Indonesia','[]',1570706703,1),('IE','+353','Ireland','Ireland','[]',1570706703,1),('IL','+972','Israel','‫ישראל‬‎','[]',1570706703,1),('IM','+44','Isle of Man','Isle of Man','[]',1570706703,1),('IN','+91','India','भारत','[]',1570706703,1),('IO','+246','British Indian Ocean Territory','British Indian Ocean Territory','[]',1570706703,1),('IQ','+964','Iraq','‫العراق‬‎','[]',1570706703,1),('IR','+98','Iran','‫ایران‬‎','[]',1570706703,1),('IS','+354','Iceland','Ísland','[]',1570706703,1),('IT','+39','Italy','Italia','[]',1570706703,1),('JE','+44','Jersey','Jersey','[]',1570706703,1),('JM','+1876','Jamaica','Jamaica','[]',1570706703,1),('JO','+962','Jordan','‫الأردن‬‎','[]',1570706703,1),('JP','+81','Japan','日本','[]',1570706703,1),('KE','+254','Kenya','Kenya','[]',1570706703,1),('KG','+996','Kyrgyzstan','Кыргызстан','[]',1570706703,1),('KH','+855','Cambodia','កម្ពុជា','[]',1570706703,1),('KI','+686','Kiribati','Kiribati','[]',1570706703,1),('KM','+269','Comoros','‫جزر القمر‬‎','[]',1570706703,1),('KN','+1869','Saint Kitts and Nevis','Saint Kitts and Nevis','[]',1570706703,1),('KP','+850','North Korea','조선 민주주의 인민 공화국','[]',1570706703,1),('KR','+82','South Korea','대한민국','[]',1570706703,1),('KW','+965','Kuwait','‫الكويت‬‎','[]',1570706703,1),('KY','+1345','Cayman Islands','Cayman Islands','[]',1570706703,1),('KZ','+7','Kazakhstan','Казахстан','[]',1570706703,1),('LA','+856','Laos','ລາວ','[]',1570706703,1),('LB','+961','Lebanon','‫لبنان‬‎','[]',1570706703,1),('LC','+1758','Saint Lucia','Saint Lucia','[]',1570706703,1),('LI','+423','Liechtenstein','Liechtenstein','[]',1570706703,1),('LK','+94','Sri Lanka','ශ්‍රී ලංකාව','[]',1570706703,1),('LR','+231','Liberia','Liberia','[]',1570706703,1),('LS','+266','Lesotho','Lesotho','[]',1570706703,1),('LT','+370','Lithuania','Lietuva','[]',1570706703,1),('LU','+352','Luxembourg','Luxembourg','[]',1570706703,1),('LV','+371','Latvia','Latvija','[]',1570706703,1),('LY','+218','Libya','‫ليبيا‬‎','[]',1570706703,1),('MA','+212','Morocco','‫المغرب‬‎','[]',1570706703,1),('MC','+377','Monaco','Monaco','[]',1570706703,1),('MD','+373','Moldova','Republica Moldova','[]',1570706703,1),('ME','+382','Montenegro','Crna Gora','[]',1570706703,1),('MF','+590','Saint Martin (Saint-Martin (partie française))','Saint Martin (Saint-Martin (partie française))','[]',1570706703,1),('MG','+261','Madagascar','Madagasikara','[]',1570706703,1),('MH','+692','Marshall Islands','Marshall Islands','[]',1570706703,1),('MK','+389','Macedonia (FYROM) (Македонија)','Macedonia (FYROM) (Македонија)','[]',1570706703,1),('ML','+223','Mali','Mali','[]',1570706703,1),('MM','+95','Myanmar (Burma) (မြန်မာ)','Myanmar (Burma) (မြန်မာ)','[]',1570706703,1),('MN','+976','Mongolia','Монгол','[]',1570706703,1),('MO','+853','Macau','澳門','[]',1570706703,1),('MP','+1670','Northern Mariana Islands','Northern Mariana Islands','[]',1570706703,1),('MQ','+596','Martinique','Martinique','[]',1570706703,1),('MR','+222','Mauritania','‫موريتانيا‬‎','[]',1570706703,1),('MS','+1664','Montserrat','Montserrat','[]',1570706703,1),('MT','+356','Malta','Malta','[]',1570706703,1),('MU','+230','Mauritius','Moris','[]',1570706703,1),('MV','+960','Maldives','Maldives','[]',1570706703,1),('MW','+265','Malawi','Malawi','[]',1570706703,1),('MX','+52','Mexico','México','[]',1570706703,1),('MY','+60','Malaysia','Malaysia','[]',1570706703,1),('MZ','+258','Mozambique','Moçambique','[]',1570706703,1),('NA','+264','Namibia','Namibië','[]',1570706703,1),('NC','+687','New Caledonia','Nouvelle-Calédonie','[]',1570706703,1),('NE','+227','Niger','Nijar','[]',1570706703,1),('NF','+672','Norfolk Island','Norfolk Island','[]',1570706703,1),('NG','+234','Nigeria','Nigeria','[]',1570706703,1),('NI','+505','Nicaragua','Nicaragua','[]',1570706703,1),('NL','+31','Netherlands','Nederland','[]',1570706703,1),('NO','+47','Norway','Norge','[]',1570706703,1),('NP','+977','Nepal','नेपाल','[]',1570706703,1),('NR','+674','Nauru','Nauru','[]',1570706703,1),('NU','+683','Niue','Niue','[]',1570706703,1),('NZ','+64','New Zealand','New Zealand','[]',1570706703,1),('OM','+968','Oman','‫عُمان‬‎','[]',1570706703,1),('PA','+507','Panama','Panamá','[]',1570706703,1),('PE','+51','Peru','Perú','[]',1570706703,1),('PF','+689','French Polynesia','Polynésie française','[]',1570706703,1),('PG','+675','Papua New Guinea','Papua New Guinea','[]',1570706703,1),('PH','+63','Philippines','Philippines','[]',1570706703,1),('PK','+92','Pakistan','‫پاکستان‬‎','[]',1570706703,1),('PL','+48','Poland','Polska','[]',1570706703,1),('PM','+508','Saint Pierre and Miquelon','Saint-Pierre-et-Miquelon','[]',1570706703,1),('PR','+1','Puerto Rico','Puerto Rico','[]',1570706703,1),('PS','+970','Palestine','‫فلسطين‬‎','[]',1570706703,1),('PT','+351','Portugal','Portugal','[]',1570706703,1),('PW','+680','Palau','Palau','[]',1570706703,1),('PY','+595','Paraguay','Paraguay','[]',1570706703,1),('QA','+974','Qatar','‫قطر‬‎','[]',1570706703,1),('RE','+262','Réunion','La Réunion','[]',1570706703,1),('RO','+40','Romania','România','[]',1570706703,1),('RS','+381','Serbia','Србија','[]',1570706703,1),('RU','+7','Russia','Россия','[]',1570706703,1),('RW','+250','Rwanda','Rwanda','[]',1570706703,1),('SA','+966','Saudi Arabia','‫المملكة العربية السعودية‬‎','[]',1570706703,1),('SB','+677','Solomon Islands','Solomon Islands','[]',1570706703,1),('SC','+248','Seychelles','Seychelles','[]',1570706703,1),('SD','+249','Sudan','‫السودان‬‎','[]',1570706703,1),('SE','+46','Sweden','Sverige','[]',1570706703,1),('SG','+65','Singapore','Singapore','[]',1570706703,1),('SH','+290','Saint Helena','Saint Helena','[]',1570706703,1),('SI','+386','Slovenia','Slovenija','[]',1570706703,1),('SJ','+47','Svalbard and Jan Mayen','Svalbard and Jan Mayen','[]',1570706703,1),('SK','+421','Slovakia','Slovensko','[]',1570706703,1),('SL','+232','Sierra Leone','Sierra Leone','[]',1570706703,1),('SM','+378','San Marino','San Marino','[]',1570706703,1),('SN','+221','Senegal','Sénégal','[]',1570706703,1),('SO','+252','Somalia','Soomaaliya','[]',1570706703,1),('SR','+597','Suriname','Suriname','[]',1570706703,1),('SS','+211','South Sudan','‫جنوب السودان‬‎','[]',1570706703,1),('ST','+239','São Tomé and Príncipe','São Tomé e Príncipe','[]',1570706703,1),('SV','+503','El Salvador','El Salvador','[]',1570706703,1),('SX','+1721','Sint Maarten','Sint Maarten','[]',1570706703,1),('SY','+963','Syria','‫سوريا‬‎','[]',1570706703,1),('SZ','+268','Swaziland','Swaziland','[]',1570706703,1),('TC','+1649','Turks and Caicos Islands','Turks and Caicos Islands','[]',1570706703,1),('TD','+235','Chad','Tchad','[]',1570706703,1),('TG','+228','Togo','Togo','[]',1570706703,1),('TH','+66','Thailand','ไทย','[]',1570706703,1),('TJ','+992','Tajikistan','Tajikistan','[]',1570706703,1),('TK','+690','Tokelau','Tokelau','[]',1570706703,1),('TL','+670','Timor-Leste','Timor-Leste','[]',1570706703,1),('TM','+993','Turkmenistan','Turkmenistan','[]',1570706703,1),('TN','+216','Tunisia','‫تونس‬‎','[]',1570706703,1),('TO','+676','Tonga','Tonga','[]',1570706703,1),('TR','+90','Turkey','Türkiye','[]',1570706703,1),('TT','+1868','Trinidad and Tobago','Trinidad and Tobago','[]',1570706703,1),('TV','+688','Tuvalu','Tuvalu','[]',1570706703,1),('TW','+886','Taiwan','台灣','[]',1570706703,1),('TZ','+255','Tanzania','Tanzania','[]',1570706703,1),('UA','+380','Ukraine','Україна','[]',1570706703,1),('UG','+256','Uganda','Uganda','[]',1570706703,1),('US','+1','United States','United States','[]',1570706703,1),('UY','+598','Uruguay','Uruguay','[]',1570706703,1),('UZ','+998','Uzbekistan','Oʻzbekiston','[]',1570706703,1),('VA','+39','Vatican City','Città del Vaticano','[]',1570706703,1),('VC','+1784','Saint Vincent and the Grenadines','Saint Vincent and the Grenadines','[]',1570706703,1),('VE','+58','Venezuela','Venezuela','[]',1570706703,1),('VG','+1284','British Virgin Islands','British Virgin Islands','[]',1570706703,1),('VI','+1340','U.S. Virgin Islands','U.S. Virgin Islands','[]',1570706703,1),('VN','+84','Vietnam','Việt Nam','[]',1570706703,1),('VU','+678','Vanuatu','Vanuatu','[]',1570706703,1),('WF','+681','Wallis and Futuna','Wallis and Futuna','[]',1570706703,1),('WS','+685','Samoa','Samoa','[]',1570706703,1),('XK','+383','Kosovo','Kosovo','[]',1570706703,1),('YE','+967','Yemen','‫اليمن‬‎','[]',1570706703,1),('YT','+262','Mayotte','Mayotte','[]',1570706703,1),('ZA','+27','South Africa','South Africa','[]',1570706703,1),('ZM','+260','Zambia','Zambia','[]',1570706703,1),('ZW','+263','Zimbabwe','Zimbabwe','[]',1570706703,1);
/*!40000 ALTER TABLE `fqlRA_oz_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_files`
--

DROP TABLE IF EXISTS `fqlRA_oz_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_files` (
  `file_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `file_user_id` bigint unsigned DEFAULT NULL,
  `file_key` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_clone` bigint unsigned NOT NULL DEFAULT '0',
  `file_origin` bigint unsigned NOT NULL DEFAULT '0',
  `file_size` bigint NOT NULL,
  `file_type` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_label` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_add_time` bigint NOT NULL DEFAULT '1611767111',
  `file_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`file_id`),
  KEY `fk_oz_files_oz_users` (`file_user_id`),
  CONSTRAINT `fk_oz_files_oz_users` FOREIGN KEY (`file_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_files`
--

LOCK TABLES `fqlRA_oz_files` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_files` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_files` VALUES (1,1,'26e3c8d640b597e3a47c9368a0d6fe4a',0,0,59266,'image/jpeg','past-and-risoto.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743439_9580527711.jpg','1/_thumb/1610743439_9580527711.jpg','[]',1610743439,1),(2,1,'e92f37bc0a392474b9ea537a1ce5acaf',0,0,48942,'image/jpeg','salad.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743509_9738520035.jpg','1/_thumb/1610743509_9738520035.jpg','[]',1610743509,1),(3,1,'042713213e832bf2b2e0ec9dd0089156',0,0,53813,'image/jpeg','pizza.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743574_2690907622.jpg','1/_thumb/1610743574_2690907622.jpg','[]',1610743574,1),(4,1,'9e5278aea5643440c5609a1354c25a58',0,0,33467,'image/jpeg','sandwiches-and-wraps.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743704_7440520210.jpg','1/_thumb/1610743704_7440520210.jpg','[]',1610743704,1),(5,1,'626188526f964a6daaf411cef27e3dcd',0,0,21184,'image/jpeg','drinks.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743844_8448138438.jpg','1/_thumb/1610743844_8448138438.jpg','[]',1610743844,1),(6,1,'dd0acd5b8b0ca52d0268d78c978ccb43',0,0,38762,'image/jpeg','bread-and-doughs.jpg','OZ_FILE_UPLOAD_LABEL','1/1610743962_0996642785.jpg','1/_thumb/1610743962_0996642785.jpg','[]',1610743962,1),(7,1,'bccab23ce5d3d5c1a42899792cda741a',0,0,16156,'image/jpeg','ikoko.jpg','OZ_FILE_UPLOAD_LABEL','1/1610778418_3520540830.jpg','1/_thumb/1610778418_3520540830.jpg','[]',1610778419,1),(8,1,'b9830a9484213086a8a3078ff64dd998',0,0,36210,'image/jpeg','honneymoon-spaghetti.jpg','OZ_FILE_UPLOAD_LABEL','1/1611692172_4764372795.jpg','1/_thumb/1611692172_4764372795.jpg','[]',1611692172,1),(9,1,'2cb9a9c08a1fc71df458a0e16bd930cf',0,0,72946,'image/jpeg','Pizza twister bread.jpg','OZ_FILE_UPLOAD_LABEL','1/1611697780_5011367182.jpg','1/_thumb/1611697780_5011367182.jpg','[]',1611697780,1);
/*!40000 ALTER TABLE `fqlRA_oz_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_sessions`
--

DROP TABLE IF EXISTS `fqlRA_oz_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_sessions` (
  `session_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_client_api_key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_user_id` bigint unsigned DEFAULT NULL,
  `session_token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_expire` bigint NOT NULL,
  `session_last_seen` bigint NOT NULL,
  `session_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_add_time` bigint NOT NULL DEFAULT '1611767111',
  `session_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`session_id`),
  KEY `fk_oz_sessions_oz_clients` (`session_client_api_key`),
  KEY `fk_oz_sessions_oz_users` (`session_user_id`),
  CONSTRAINT `fk_oz_sessions_oz_clients` FOREIGN KEY (`session_client_api_key`) REFERENCES `fqlRA_oz_clients` (`client_api_key`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_oz_sessions_oz_users` FOREIGN KEY (`session_user_id`) REFERENCES `fqlRA_oz_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_sessions`
--

LOCK TABLES `fqlRA_oz_sessions` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_sessions` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_sessions` VALUES ('29fbd37476a018ccf5146e3c1afdd7a14a3155e33c9d0928d0004f5e558ce29d','C055DB5D-7EF6DB26-48A5043E-D10BD9D0',1,'3b6114f30fff1ef06f4979ea55b687c69ed57ca7867d90c25cb0cd65f15df82e',1618947317,1616314798,'{\"ozone\":{\"user\":{\"id\":\"1\",\"verified\":true,\"token\":\"3b6114f30fff1ef06f4979ea55b687c69ed57ca7867d90c25cb0cd65f15df82e\"}}}',1616314798,1),('8942cddd6a6145d330431823b397534c6787ee09f548fd9d5672217602de4d6e','636453B6-C0B601E4-98B1029D-074F1080',NULL,'451087e56e82f97184cf8197350f9c77892d2e29a77233e1914ebf0e3f6148f8',1622623772,1622530982,'[]',1622530982,1);
/*!40000 ALTER TABLE `fqlRA_oz_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fqlRA_oz_users`
--

DROP TABLE IF EXISTS `fqlRA_oz_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fqlRA_oz_users` (
  `user_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birth_date` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_picid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0_0',
  `user_cc2` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_add_time` bigint NOT NULL DEFAULT '1611767111',
  `user_valid` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `fk_oz_users_oz_countries` (`user_cc2`),
  CONSTRAINT `fk_oz_users_oz_countries` FOREIGN KEY (`user_cc2`) REFERENCES `fqlRA_oz_countries` (`country_cc2`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fqlRA_oz_users`
--

LOCK TABLES `fqlRA_oz_users` WRITE;
/*!40000 ALTER TABLE `fqlRA_oz_users` DISABLE KEYS */;
INSERT INTO `fqlRA_oz_users` VALUES (1,'+22996719161',NULL,'$2y$10$CETg2hEASFEgEBcUzcUqc.BxUF4k9dMDFiOMAOflIdVAMYnI/Npbu','Silas Sare','Male','1993-05-22','0_0','BJ','[]',1582024287,1),(2,'+13476915991',NULL,'$2y$10$CfNSHlWpEHu/rW4IqpN08.Xn3gf..PHblUmRST4nr6N.0tGe51PtG','Moussa Andjorin','Male','1980-01-01','0_0','US','[]',1582024287,1);
/*!40000 ALTER TABLE `fqlRA_oz_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-02 15:02:51
