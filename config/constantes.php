<?php
$envVariables = parse_ini_file('.env');

/**
 * URL base del sistema
 */
define('SERVERURL', $envVariables['APP_URL']);

/**
 * Página por defecto de los empleados
 */
define('PAGE_DEFAULT_EMPLOYEES', $envVariables['PAGE_DEFAULT_EMPLOYEES']);

/**
 * Página por defecto de los clientes
 */
define('PAGE_DEFAULT_CUSTOMERS', $envVariables['PAGE_DEFAULT_CUSTOMERS']);

/**
 * ID del rol de los empleados
 */
define('ID_ROLE_EMPLOYEES', $envVariables['ID_ROLE_EMPLOYEES']);

/**
 * ID del rol de los clientes
 */
define('ID_ROLE_CUSTOMERS', $envVariables['ID_ROLE_CUSTOMERS']);

/**
 * host de la base de datos
 */
define('DB_HOST', $envVariables['DB_HOST']);

/**
 * puerto de la base de datos
 */
define('DB_PORT',$envVariables['DB_PORT']);

/**
 * nombre de la base de datos
 */
define('DB_DATABASE',$envVariables['DB_DATABASE']);

/**
 * nombre de usuario de la base de datos
 */
define('DB_USERNAME',$envVariables['DB_USERNAME']);

/**
 *  contraseña de la base de datos
 */
define('DB_PASSWORD',$envVariables['DB_PASSWORD']);