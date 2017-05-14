@echo off
mysql -uawesome -pawesome awesome_warehouse < mine-firstname.sql
mysql -uawesome -pawesome awesome_warehouse < mine-lastname.sql
mysqldump --routines --no-data -uawesome -pawesome awesome_warehouse > warehouse.dmp
mysqldump --routines -uawesome -pawesome awesome_warehouse > warehouse-data.dmp
