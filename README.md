# COMP4150-Project

## Development Setup

1. Install [MySQL](https://dev.mysql.com/downloads/installer/)
2. Install PHP `brew install php` (on mac)
3. Run `mysql -h localhost -u root -p`
4. Create the database
5. Add the databses in [the sql file](phase3_create.sql)
6. Create your own user `CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';`
7. Give it enough priveleges `GRANT ALL ON database.* TO 'username'@'localhost';`
8. Edit [database.php](database.php) with the new databse, username, and password you created
9. Run `php -S localhost:9000`. Make sure you're running it where the php files are located.
10. Open localhost:9000
