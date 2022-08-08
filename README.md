# Application E-commerce PhP/Laravel.
## I. About the project
E-commerce website the project for Chamel Info shop. launched at the beginning of 01-03-2022. and it is supposed to end on 05-06-2022. it is now 06-21-2022 but still, en going. the developer in a charge of the development is  "Mohamed laaroussi". as a first experience  thanks you Mohammed for your hard work.
## II. Documents check list
- [ ] Conception.
- [x] Specifications (Cahier des charges). 
- [x] Quotation.
- [x] Documentation. 
- [ ] Code Documentation.
- [ ] Database UML. 
- [ ] Planification.
- [ ] User manual.
- [ ] Formation.
## III. Pre-Requirement.
To clone the project and start the project on your personal computer you need to check the existence of the pre-requirements listed below.  "we supposed that you working with Linux as an operating system".
### 1. MySQL 
First of all you need to verify the existence of MySQL and verify the version since Knowing the version number helps to determine if a specific feature is available or compatible with your system.
```
mysql --version
```
If doesn't exist you need to install Mysql database.
To install it, update the package index on your server if you haven't done so recently: 
```
sudo apt update
sudo apt install mysql-server
```
For new installations of MySQL, you will need to run the security script included in the DBMS. This script changes some of the less secure default options for things like remote root logins and sample users.
```
sudo mysql_secure_installation
```
Once the installation is completed, the MySQL service will start automatically. To check whether the MySQL server is running, type:
```
sudo systemctl status mysql
```
In order to use a password to connect to MySQL as root, use the following command.
```
sudo mysql -uroot -p
```
To create a new MySQL user, type:
```
CREATE USER 'username' IDENTIFIED BY 'password';
```
Replace username and password with a username and password of your choice.

For more security you can set up a user by specifying the machine hosting the database.
```
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
```
To grant specific privileges to a user account, use the following syntax:

```
GRANT permission1, permission2 ON database_name.table_name TO 'database_user'@'localhost';
```
### 2. PhP/composer 
You need to install the following packages PHP and cURL. So, for that use the given commands to install both.


```
sudo apt install curl unzip
sudo apt install php php-curl
```
As we know the Composer to install is not available via the default Ubuntu 22.04 or 20.04 LTS, hence use the cURL command:

```
curl -sS https://getcomposer.org/installer -o composer-setup.php
```
Now, we can use PHP to install the composer setup we have downloaded above while declaring the directory where we want to install it.
```
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
Once you are done with the setting up by running the commands given above, we can check its version.
```
composer -V
```

### 3. Nginx 

Since Nginx is available in Ubuntu's repositories by default, it is possible to install it from those repositories using the package manager ```apt```.

```
sudo apt install nginx 
```
Now that your web server is running, let's look at some basic management commands.
To stop your web server, type:
```
sudo systemctl stop nginx
```
To start the web server when it is stopped, type:

```
sudo systemctl start nginx
```
To stop and then restart the service, type:
```
sudo systemctl restart nginx
```
If you are only making configuration changes, Nginx may often reload without breaking connections. To do this, type:
```
sudo systemctl reload nginx
```
## III. run a project locally
First of all, you need to clone the project from the repository to your machine. since is a private repository you need to have access. you can give access to your developers using different techniques such as adding your public key to your GitHub account or generating a ```Tokens``` for your team. 
```
git clone https://tocken@github.com/mednourconsulting/ecommerce
```
To run the project type the following command, but be sure that you create the database with a username and password.
```
cd ecommerce
sudo composer install
sudo mv .env.example .env
sudo php artisan key:generate
```
go to : sudo nano config/database.php and change the username and password 

run this commandes:
```
php artisan migrate
php artisan serve
```
If for any reason the project is not running try clearing the cache.
```
php artisan config:cache
```
## IV. Deployement.
First, make sure that the Nginx service is running. you need to create a config file under the path ```/etc/nginx/conf.d/name_file.conf```


```
server{
    listen 80;
    #listen [::]:80 default_server;
    server_name ecommerce.mednour-consulting.com;
    root /var/www/ecommerce/public;
    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php7.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }


}
```
cd /var/www/ecommerce/config
sudo nano database.php 
```

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' =>'ecom',
            'username' => 'preprod',
            'password' => '*****',
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => false,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

```
And make sure that you code source is placed under the following path ```/var/www/ecommerce```.
Rename .env.example file to .env inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
```
mv .env.example .env
nano .env
```
```
APP_NAME=NameOfYourApp (this is used in emails and other things, so your company name?)
APP_ENV=production
APP_DEBUG=false
APP_URL=https://ecommerce.mednour-consulting.com/
```
and run php artisan key:generate so it will create a new APP_KEY. of course all of your db credentials, email credentials, etc., need to match the production server, as well as everything else that your project uses.

you should also make sure that you run the config:cache Artisan command during your deployment process
```
php artisan config:cache
```

When deploying to production, make sure that you are optimizing Composer's class autoloader map so Composer can quickly find the proper file to load for a given class
```
composer install --optimize-autoloader --no-dev
```



## V. Activating HTTPS Using Certbot with NGINX.
A web server must possess a signed public-key certificate from a trusted Certificate Authority before it can accept HTTPS requests. Let’s Encrypt is one of the most widely-used of these authorities. It manages a free automated service that distributes basic SSL/TLS certificates to eligible websites. Let’s Encrypt leverages the Automatic Certificate Management Environment (ACME) protocol to automate the certificate granting process through a challenge-response technique. The Let’s Encrypt site provides more comprehensive technical details about domain validation.
```
 sudo certbot --nginx -d ecommerce.mednour-consulting.com
```

## VI. Configuring Firewall Rules with UFW

## VII. Plans for the future.

