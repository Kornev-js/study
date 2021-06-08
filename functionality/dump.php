<?php
exec('mysqldump --user=admin --password=root --host=localhost my_db > /var/www/myresume.com/public_html/dump_db.sql');
header('location:/index.php');
