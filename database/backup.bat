@echo off
mysqldump --routines --no-data -uawesome -pawesome awesome_warehouse > warehouse.dmp
mysqldump --routines -uawesome -pawesome awesome_warehouse > warehouse-data.dmp
