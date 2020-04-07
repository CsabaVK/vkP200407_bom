CREATE TABLE `Cars`(
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `producer` varchar(20) COMMENT 'Az autó gyártója',
    `type` varchar(30) COMMENT 'Az autó típusa',
    `vintage` int COMMENT 'Az autó forgalomba helyezésének éve',
    `fuel` varchar(10) DEFAULT 'benzin' COMMENT 'Az üzemanyag típusa - benzin, dizel'
)DEFAULT CHARSET = UTF8;

insert into `Cars` (`producer`,`type`,`vintage`, `fuel`) VALUES 
('Audi', 'A3', '1996', 'benzin'),
('Aston MArtin', 'DB11', '2016', 'benzin'),
('Chevrolet Corvette', 'c8', '2019', 'benzin'),
('Volkswagen', 'A3', '2012', 'benzin'),
('BMW', '7', '2017', 'dizel'),
('Rover Mini', 'specs', '1991', 'benzin'),
('Alfa Romeo', '155', '1992', 'benzin'),
('Cadillac', 'C16', '2017', 'benzin'),
('Lotus', 'Europa', '2006', 'benzin'),
('Toyota', 'Corolla', '2019', 'benzin');