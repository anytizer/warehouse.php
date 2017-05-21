DROP TABLE IF EXISTS warehouse_firstnames;
-- CREATE TABLE warehouse_firstnames LIKE warehouse_data;
CREATE TABLE `warehouse_firstnames` (
  `data_firstname` VARCHAR(255) NOT NULL COMMENT 'First Name',
  PRIMARY KEY `data_firstname` (`data_firstname`) COMMENT 'Unique Data'
);
INSERT INTO warehouse_firstnames SELECT data_value FROM warehouse_data WHERE data_type='firstname' ORDER BY data_value;
