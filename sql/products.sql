CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productCode` varchar(45) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `category_id` int NOT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `cover_image` tinytext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `webItem` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `products_in_category` (`category_id`),
  CONSTRAINT `products_in_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
