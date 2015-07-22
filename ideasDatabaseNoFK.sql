-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ideas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ideas` ;

-- -----------------------------------------------------
-- Schema ideas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ideas` DEFAULT CHARACTER SET utf8 ;
USE `ideas` ;

-- -----------------------------------------------------
-- Table `ideas`.`states`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`states` ;

CREATE TABLE IF NOT EXISTS `ideas`.`states` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(2) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`addresses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`addresses` ;

CREATE TABLE IF NOT EXISTS `ideas`.`addresses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `first_name` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `last_name` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `address_2` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `city` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `zip` INT(11) NULL DEFAULT NULL COMMENT '',
  `state_id` INT(11) NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`shopping_cart`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`shopping_cart` ;

CREATE TABLE IF NOT EXISTS `ideas`.`shopping_cart` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`user_levels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`user_levels` ;

CREATE TABLE IF NOT EXISTS `ideas`.`user_levels` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `user_level` INT(11) NULL DEFAULT NULL COMMENT '',
  `name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`users` ;

CREATE TABLE IF NOT EXISTS `ideas`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `shopping_cart_id` INT(11) NULL COMMENT '',
  `user_level_id` INT(11) NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`admins`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`admins` ;

CREATE TABLE IF NOT EXISTS `ideas`.`admins` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `password` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `user_id` INT(11) NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`categories` ;

CREATE TABLE IF NOT EXISTS `ideas`.`categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`categories_has_images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`categories_has_images` ;

CREATE TABLE IF NOT EXISTS `ideas`.`categories_has_images` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `category_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `image_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`ideas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`ideas` ;

CREATE TABLE IF NOT EXISTS `ideas`.`ideas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `description` TEXT NULL DEFAULT NULL COMMENT '',
  `inventory` INT(11) NULL DEFAULT NULL COMMENT '',
  `number_sold` INT(11) NULL DEFAULT NULL COMMENT '',
  `price` DECIMAL(2,0) NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 32
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`ideas_has_images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`ideas_has_images` ;

CREATE TABLE IF NOT EXISTS `ideas`.`ideas_has_images` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `idea_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `image_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`tags`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`tags` ;

CREATE TABLE IF NOT EXISTS `ideas`.`tags` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `category_id` INT(11) NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 63
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`ideas_has_tags`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`ideas_has_tags` ;

CREATE TABLE IF NOT EXISTS `ideas`.`ideas_has_tags` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `idea_id` INT(11) NULL COMMENT '',
  `tag_id` INT(11) NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 143
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`images` ;

CREATE TABLE IF NOT EXISTS `ideas`.`images` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `alt_text` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `location` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`order_statuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`order_statuses` ;

CREATE TABLE IF NOT EXISTS `ideas`.`order_statuses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `status` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '	',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`orders` ;

CREATE TABLE IF NOT EXISTS `ideas`.`orders` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `user_id` INT(11) NULL COMMENT '',
  `stripe_token` INT(11) NULL DEFAULT NULL COMMENT '',
  `order_status_id` INT(11) NULL COMMENT '',
  `shipping_address_id` INT(11) NULL COMMENT '',
  `billing_address_id` INT(11) NULL COMMENT '',
  `total_price` DECIMAL(2,0) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`orders_has_ideas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`orders_has_ideas` ;

CREATE TABLE IF NOT EXISTS `ideas`.`orders_has_ideas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `order_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `idea_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`shopping_cart_has_ideas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`shopping_cart_has_ideas` ;

CREATE TABLE IF NOT EXISTS `ideas`.`shopping_cart_has_ideas` (
  `id` INT(11) NOT NULL COMMENT '',
  `shopping_cart_id` INT(11) NULL AUTO_INCREMENT COMMENT '',
  `idea_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `quantity` INT(11) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ideas`.`tags_has_images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ideas`.`tags_has_images` ;

CREATE TABLE IF NOT EXISTS `ideas`.`tags_has_images` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `tag_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `image_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `created_at` DATETIME NULL DEFAULT NULL COMMENT '',
  `updated_at` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
