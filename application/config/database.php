<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$active_group  = 'default';
$query_builder = TRUE;

$db['default'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'port'         => 3306,
    'database'     => '',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    //'db_debug' => (ENVIRONMENT !== 'production'),
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
 // -- DATA
$db['pu'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'fnotifikasiproduk',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);

$db['hr'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'lessential_hris',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
 // -- DATA KPI
 $db['kpi'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'lessential_kpi',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
// -- SECURITY
$db['am'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'lessential_accessapps',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
// -- Notif
$db['mst'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'lessential_dbmasterdata',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),     
    'save_queries' => TRUE
);
// -- hris local
$db['hris'] = array (
    'dsn'	       => '',
    'hostname'     => '(local)',
    'port'         => '1433',
    'username'     => '',
    'password'     => '',
    'database'     => 'EZ-TNA',
    'dbdriver'     => 'sqlsrv',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    // 'db_debug' => (ENVIRONMENT !== 'production') 43I0@kQ;iHmG1v,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);
// -- blog saya
$db['st'] = array (
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'lessential_recyclebin',
    'port'         => 3306,
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => TRUE,
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'stricton'     => FALSE,
    'failover'     => array(),
    'save_queries' => TRUE
);

    $db['chat'] = array (
        'dsn'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'lessential_chat',
        'port'         => 3306,
        'dbdriver'     => 'mysqli',
        'dbprefix'     => '',
        'pconnect'     => FALSE,
        'db_debug'     => TRUE,
        'cache_on'     => FALSE,
        'cachedir'     => '',
        'char_set'     => 'utf8',
        'dbcollat'     => 'utf8_general_ci',
        'swap_pre'     => '',
        'encrypt'      => FALSE,
        'compress'     => FALSE,
        'stricton'     => FALSE,
        'failover'     => array(),
        'save_queries' => TRUE
    );

    $db['dummy'] = array (
        'dsn'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'lessential_dummy',
        'port'         => 3306,
        'dbdriver'     => 'mysqli',
        'dbprefix'     => '',
        'pconnect'     => FALSE,
        'db_debug'     => TRUE,
        'cache_on'     => FALSE,
        'cachedir'     => '',
        'char_set'     => 'utf8',
        'dbcollat'     => 'utf8_general_ci',
        'swap_pre'     => '',
        'encrypt'      => FALSE,
        'compress'     => FALSE,
        'stricton'     => FALSE,
        'failover'     => array(),
        'save_queries' => TRUE
    );
// hris live
    // $db['hris'] = array(
    // 	'dsn'	=> '',
    // 	'hostname' => '192.168.200.2',
    // 	'port' => '1433',
    // 	'username' => 'sa',
    // 	'password' => 'admin_esn',
    // 	'database' => 'EZ-TNA',
    // 	'dbdriver' => 'sqlsrv',
    // 	'dbprefix' => '',
    // 	'pconnect' => FALSE,
    // 	'db_debug' => (ENVIRONMENT !== 'production'),
    // 	'cache_on' => FALSE,
    // 	'cachedir' => '',
    // 	'char_set' => 'utf8',
    // 	'dbcollat' => 'utf8_general_ci',
    // 	'swap_pre' => '',
    // 	'encrypt' => FALSE,
    // 	'compress' => FALSE,
    // 	'stricton' => FALSE,
    // 	'failover' => array(),
    // 	'save_queries' => TRUE
    // );

