CREATE DATABASE afrinova;
use afrinova;

CREATE TABLE `pays` (
  `id_pays` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL
  `country_name` varchar(30) NOT NULL,
  `country_location` varchar(30) NOT NULL,
  `country_population` int(11) NOT NULL,
  `key_cities` varchar(200) NOT NULL,
  `country_languages` varchar(200) NOT NULL,
  `country_img` varchar(225) NOT NULL
);



INSERT INTO `countries_info` (`country_name`, `country_location`, `country_population`, `key_cities`, `country_languages`, `country_img`) VALUES
('Morocco', 'North Africa', 37, 'Rabat, Casablanca, Marrakech, Fès, Tangier, and Agadir', 'Arabic and Amazigh, with French widely used.', './img/Morroco.jpg'),
('Egypt', 'North Africa', 110, 'Cairo, Alexandria, Giza, Luxor, Aswan, and Sharm El Sheikh,', 'Arabic, with English ', './img/southAfrica.jpg'),
('South Africa', 'the southern tip', 60, 'Pretoria, Cape Town, Johannesburg, Durban, and Port Elizabeth.', 'Afrikaans, English, Zulu, Xhosa, and several', './img/Egypt.jpg');



CREATE TABLE `city` (
  `id_city` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL
  `city_name` varchar(30) NOT NULL,
  `city_description` text DEFAULT NULL,
  `type` enum(`capitale`,`autre`),
  `city_img` varchar(225) NOT NULL,
  `id_pays` int(11),
  FOREIGN KEY (`id_pays`) REFERENCES `pays`(`id_pays`)
);



INSERT INTO `city` (`city_name`, `city_description`, `type`, `city_img`, `id_pays`) VALUES
('Casablanca', 'Casablanca is the largest city in Morocco, known for its modern architecture and rich history.', 'autre', 'casablanca.jpg', 1),
('Marrakech', 'Marrakech is famous for its vibrant souks, palaces, and the historical Jemaa el-Fnaa square.', 'autre', 'marrakech.jpg', 1),
('Fes', 'Fes is home to one of the world’s oldest universities, the University of Al Quaraouiyine, and historic Medina.', 'autre', 'fes.jpg', 1),
('Rabat', 'Rabat is the capital of Morocco, known for its royal palaces and beautiful coastal views.', 'Capital', 'rabat.jpg', 1),
('Tangier', 'Tangier is a port city on the Mediterranean Sea, known for its mix of cultures and vibrant history.', 'autre', 'tangier.jpg', 1),
('Safi', 'Safi is a coastal city known for its pottery and its port, which is one of the largest fishing ports in Morocco.', 'autre', 'safi.jpg', 1);


select * from city;
select * from pays;


UPDATE pays 
SET 
    country_name = 'Morocco'
WHERE 
    id_pays = 1;


DELETE FROM city WHERE city_name = 'Tangier';


ALTER TABLE `city`
ADD best_place varchar(100) NOT NULL;

ALTER TABLE `city`
DROP COLUMN best_place;

ALTER TABLE `city`
 CHANGE COLUMN `best_place` `fav_place` VARCHAR(255);

ALTER TABLE `city`
MODIFY COLUMN `best_place` int;