# CRUD Article in Symfony

## How to use this project
```bash
git clone ...
cd ...
composer install
configure your .env (DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name")
php bin/console make:migration
php bin/console doctrine:migrations:migrate
yarn encore dev
php -S 127.0.0.1:8000 -t public
```

## Tuto

### Create project

```bash
composer create-project symfony/website-skeleton crud_article
```

### Create an entity

```bash
php bin/console make:entity
```

### Create CRUD for your entity
```bash
php bin/console make:crud
```

### Configure your database and create one user
```bash
mysql -u root
create database databasename
GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT ON *.* TO 'username'@'localhost';
```

### Configure your .env
```bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"
```

### Prepare your migration
```bash
php bin/console make:migration
```

### Insert Entity in database
```bash
php bin/console doctrine:migrations:migrate
```

### List of all routes
```bash
php bin/console debug:router
```

### Start server
```bash
php -S 127.0.0.1:8000 -t public
```
