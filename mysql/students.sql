-- MySQL Script generated by MySQL Workbench
-- Thu May 11 14:30:47 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`city`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`city` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`students` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(127) NULL DEFAULT NULL,
  `last_name` VARCHAR(127) NULL DEFAULT NULL,
  `class_year` YEAR NULL DEFAULT NULL,
  `year_of_enrollment` YEAR NULL DEFAULT NULL,
  `year_of_graduation` YEAR NULL DEFAULT NULL,
  `is_alumni` TINYINT(1) NOT NULL,
  `date_of_birth` DATE NULL DEFAULT NULL,
  `favourite_quote` TEXT NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `created_by` VARCHAR(127) NULL DEFAULT NULL,
  `updated_by` VARCHAR(127) NULL DEFAULT NULL,
  `university_city` VARCHAR(127) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_students_city1_idx` (`university_city` ASC),
  CONSTRAINT `fk_students_city1`
    FOREIGN KEY (`university_city`)
    REFERENCES `mydb`.`city` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`courses` (
  `id` INT NOT NULL,
  `name` VARCHAR(127) NULL,
  `start_date` DATE NULL,
  `end_date` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`courses_has_students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`courses_has_students` (
  `courses_id` INT UNSIGNED NOT NULL,
  `students_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`courses_id`, `students_id`),
  INDEX `fk_courses_has_students_students1_idx` (`students_id` ASC),
  INDEX `fk_courses_has_students_courses1_idx` (`courses_id` ASC),
  CONSTRAINT `fk_courses_has_students_courses1`
    FOREIGN KEY (`courses_id`)
    REFERENCES `mydb`.`courses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courses_has_students_students1`
    FOREIGN KEY (`students_id`)
    REFERENCES `mydb`.`students` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
