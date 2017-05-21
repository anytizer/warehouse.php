DROP TABLE IF EXISTS warehouse_lastnames;
-- CREATE TABLE warehouse_lastnames LIKE warehouse_data;
-- INSERT INTO warehouse_lastnames SELECT * FROM warehouse_data WHERE data_type='lastname' ORDER BY data_value;

CREATE TABLE `warehouse_lastnames` (
  `data_lastname` VARCHAR(255) NOT NULL COMMENT 'Last Name',
  PRIMARY KEY `data_lastname` (`data_lastname`) COMMENT 'Unique Data'
);
INSERT INTO warehouse_lastnames SELECT data_value FROM warehouse_data WHERE data_type='lastname' ORDER BY data_value;
