CREATE DATABASE `ipg_estate_trial`;

USE `ipg_estate_trial`;

CREATE TABLE `appointment_time` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `time` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `doctor` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `appointment` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `appointment_date` DATE NOT NULL,
  `appointment_time_id` INT NOT NULL,
  `doctor_id` INT NOT NULL,
  FOREIGN KEY (`appointment_time_id`) REFERENCES `appointment_time`(`id`),
  FOREIGN KEY (`doctor_id`) REFERENCES `doctor`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `appointment_time` (`time`) VALUES ('07:00-08:00');
INSERT INTO `appointment_time` (`time`) VALUES ('08:00-09:00');
INSERT INTO `appointment_time` (`time`) VALUES ('09:00-10:00');

INSERT INTO `doctor` (`name`) VALUES ('Иванов А.');
INSERT INTO `doctor` (`name`) VALUES ('Петров Б.');
INSERT INTO `doctor` (`name`) VALUES ('Сидоров В.');
