DROP TABLE IF EXISTS warehouse_lastnames;
CREATE TABLE warehouse_lastnames LIKE warehouse_data;
INSERT INTO warehouse_lastnames SELECT * FROM warehouse_data WHERE data_type='lastname' ORDER BY data_value;
