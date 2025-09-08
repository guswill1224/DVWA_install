<?php

# Database management system to use
# DVWA solo soporta MySQL y SQLite
$DBMS = getenv('DBMS') ?: 'MySQL';  // Railway -> usamos MySQL

# Database variables
#   Railway expone las credenciales en variables de entorno
$_DVWA = array();
$_DVWA['db_server']   = getenv('MYSQLHOST')     ?: '127.0.0.1';
$_DVWA['db_database'] = getenv('MYSQLDATABASE') ?: 'dvwa';
$_DVWA['db_user']     = getenv('MYSQLUSER')     ?: 'dvwa';
$_DVWA['db_password'] = getenv('MYSQLPASSWORD') ?: 'VXZMoWpPIrSRFVoSOpAIhWsSRZUFLBIN';
$_DVWA['db_port']     = getenv('MYSQLPORT')     ?: '3306';
$_DVWA['db_type']     = $DBMS;

# ReCAPTCHA settings
$_DVWA['recaptcha_public_key']  = getenv('RECAPTCHA_PUBLIC_KEY')  ?: '';
$_DVWA['recaptcha_private_key'] = getenv('RECAPTCHA_PRIVATE_KEY') ?: '';

# Default security level
$_DVWA['default_security_level'] = getenv('DEFAULT_SECURITY_LEVEL') ?: 'impossible';

# Default locale
$_DVWA['default_locale'] = getenv('DEFAULT_LOCALE') ?: 'en';

# Disable authentication (false por defecto)
$_DVWA['disable_authentication'] = getenv('DISABLE_AUTHENTICATION') ?: false;

# Constantes para SQLi DB
define('MYSQL', 'mysql');
define('SQLITE', 'sqlite');

$_DVWA['SQLI_DB'] = getenv('SQLI_DB') ?: MYSQL;

?>
