DROP TABLE IF EXISTS warehouse_types;
CREATE TABLE warehouse_types SELECT data_type, COUNT(data_type) total FROM warehouse_data GROUP BY data_type ORDER BY data_type;