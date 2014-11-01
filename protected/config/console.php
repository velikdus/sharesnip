<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Share your code snippets console Application',

    // application components
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=sharesnip_dev',
            'emulatePrepare' => true,
            'username' => 'sharesnip_dev',
            'password' => 'sharesnip_dev',
            'charset' => 'utf8',
            'enableParamLogging' => true,
            'enableProfiling' => true
        ),
    ),
);