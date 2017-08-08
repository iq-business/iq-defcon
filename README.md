# iq-defcon
Web security master class resources.

## Requirements

To run this demo you'll need a LAMP stack with an Apache 2 webserver, PHP 5 (not PHP 7 as it deprecates some of the things we want to demo) and a MySQL 5 database server.

## Setup Guide

1. Create a config.php in the root directory of your webserver (yours might be /var/www/html) and add the following :

```css
<?php
define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASSWORD","password"); // obviously the password that you setup
define("DB_NAME","iq-defcon");
```

2. Run the following sql script to setup your database:

```css
resources/iq-defcon-schema.sql
```

3. Enjoy!

