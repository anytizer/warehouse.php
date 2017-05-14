DROP TABLE IF EXISTS warehouse_firstnames;
CREATE TABLE warehouse_firstnames LIKE warehouse_data;
INSERT INTO warehouse_firstnames SELECT * FROM warehouse_data WHERE data_type='firstname' ORDER BY data_value;
