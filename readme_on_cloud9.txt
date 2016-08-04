1. First, plase mod config file.

> sudo vi /etc/apache2/sites-available/001-cloud9.conf
DocumentRoot /home/ubuntu/workspace/public


2. Restart apache2.


3. Add MySQL root user password.

> mysql -u root
mysql> update mysql.user set password=password('masa1234') where user = 'root';
mysql> flush privileges;
mysql> create database masasikatano
mysql> exit;


4. Restore MySQL database.

> mysql -u root -pmasa1234 masasikatano < app/database/masasikatano.sql

4. you can access admin page.

https://masasikatano-masasikatano.c9users.io/bolt/login

ID: masasikatano
PASS: masa1234

5. Please update by update.sh

> ./update.sh