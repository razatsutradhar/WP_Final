CREATE TABLE sellers (
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`fname` VARCHAR(50),
	`lname` VARCHAR(50)
);

CREATE TABLE properties (
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`seller` INT(7),
	`street` VARCHAR(50),
	`city` VARCHAR(50),
	`state` CHAR(2),
	`year` INT(4),
	`price` DECIMAL(10, 2),
	`bed` INT(3),
	`garden` CHAR(1) DEFAULT 'n'
);

INSERT INTO sellers 
	(`fname`,
	`lname`) 
VALUES 
	('John',
	'Smith'),
	('Steve',
	'Johnson');

INSERT INTO properties 
	(`seller`,
	`street`,
	`city`,
	`state`,
	`year`,
	`price`,
	`bed`,
	`garden`)
	VALUES
	(
	1,
	'123 Hawks Lane',
	'Atlanta',
	'GA',
	2001,
	550000.00,
	4,
	'n'
	),
	(
	2,
	'456 Blooper Drive',
	'Marietta',
	'GA',
	1995,
	900000.00,
	6,
	'y'
	);