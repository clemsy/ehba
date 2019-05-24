<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

/*

return [
    'driver' => getenv('DB_DRIVER'),
    'server' => getenv('DB_SERVER'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'database' => getenv('DB_DATABASE'),
    'schema' => getenv('DB_SCHEMA'),
    'tablePrefix' => getenv('DB_TABLE_PREFIX'),
    'port' => getenv('DB_PORT')
];


return array(
    '*' => array(
        'driver' => getenv('DB_DRIVER'),
        'server' => getenv('DB_SERVER'),
        'database' => getenv('DB_DATABASE'),
        'schema' => getenv('DB_SCHEMA'),
        'tablePrefix' => getenv('DB_TABLE_PREFIX'),
        'port' => getenv('DB_PORT')
    ),
    'hbp.clm' => array(
        'user' => 'root',
        'password' => '',
    ),
    'hbp.ovh' => array(
        'user' => 'hbp',
        'password' => 'ehbc2019zzz',
    ),
);

*/
// $_ENV constants are loaded by craft-multi-environment from .env.php via public/index.php
return array(

    // All environments
    '*' => array(
        'driver' => getenv('DB_DRIVER'),
        'database' => getenv('DB_DATABASE'),
        'schema' => getenv('DB_SCHEMA'),
        'tablePrefix' => getenv('DB_TABLE_PREFIX'),
        'port' => getenv('DB_PORT')
    ),

    // Live (production) environment
    'prod'  => array(
        'server' => getenv('DB_SERVER'),
        'user' => 'hbp',
        'password' => 'ehbc2019zzz',
    ),

    // Staging (pre-production) environment
    'dev'  => array(
        'server' => '51.83.44.51',
        'user' => 'hbp',
        'password' => 'ehbc2019zzz',
    ),

    // Local (development) environment
    'local'  => array(
        'server' => '51.83.44.51',
        'user' => 'hbp',
        'password' => 'ehbc2019zzz',
    ),
);