*list from mysql*

`mysql --user= --password=  -e "SELECT * from table" db_name | sed 's/\t/","/g;s/^/"/;s/$/"/' >  /tmp/list.csv`


