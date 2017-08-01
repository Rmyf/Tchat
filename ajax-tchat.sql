DROP DATABASE IF EXISTS `ajax-tchat`;

CREATE DATABASE`ajax-tchat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


GRANT ALL PRIVILEGES ON `ajax-chat`.* TO 'ajax-chat-user'@'localhost' IDENTIFIED BY 'SQLAPI!';

use `ajax-tchat`;

CREATE TABLE `message` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL
);