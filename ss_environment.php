<?php

/* What kind of environment is this: development, test, or live (ie, production)? */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* Database connection */
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_USERNAME', 'kris');
define('SS_DATABASE_PASSWORD', 'mbg2018');
define('SS_DATABASE_NAME', 'bicycle');

define('SS_DEFAULT_ADMIN_USERNAME', 'kris');
define('SS_DEFAULT_ADMIN_PASSWORD', 'mbg2018');

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING[realpath($_SERVER['DOCUMENT_ROOT'])] = 'http://bicycle.local';
$_FILE_TO_URL_MAPPING['/var/www/bicycle'] = 'http://bicycle.local';
