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