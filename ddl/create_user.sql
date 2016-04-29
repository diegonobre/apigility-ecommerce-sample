-- LOGGED IN AS ROOT
CREATE USER 'apigility'@'localhost' IDENTIFIED BY 'apigility';
GRANT ALL PRIVILEGES ON *.* TO 'apigility'@'localhost';

-- LOGGED IN AS APIGILITY
CREATE DATABASE apigility_ecommerce;

CREATE TABLE `category` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `product` (
	`id` int NOT NULL AUTO_INCREMENT ,
	`category_id` int NOT NULL,
	`name` varchar(250) NOT NULL,
	`price` numeric(12,2) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order` (
	`id` int NOT NULL AUTO_INCREMENT,
	`product_id` int NOT NULL,
	`customer_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `customer` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(250) NOT NULL,
	`email` varchar(250) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

ALTER TABLE `product` ADD CONSTRAINT `product_fk0` FOREIGN KEY (`category_id`) REFERENCES `category`(`id`);

ALTER TABLE `order` ADD CONSTRAINT `order_fk0` FOREIGN KEY (`product_id`) REFERENCES `product`(`id`);

ALTER TABLE `order` ADD CONSTRAINT `order_fk1` FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`);
