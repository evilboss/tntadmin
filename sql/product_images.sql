CREATE TABLE `product_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(200) NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT ''slide'',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
