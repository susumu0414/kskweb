cd C:\xampp\htdocs\kskweb\BAT
mysqldump -u ec_user -pec -h 133.242.167.219 -t ecdb ecdb_t_warranty >ecdb_t_warranty.sql
mysql -u root -pksk kskweb_db -e "delete from ecdb_t_warranty"
mysql -u root -pksk kskweb_db <ecdb_t_warranty.sql
