<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    array(
        'components' => array(
            'fixture' => array(
                'class' => 'system.test.CDbFixtureManager',
            ),
            'db' => array(
                'connectionString' => 'mysql:host=localhost;dbname=sharesnip_test',
                'emulatePrepare' => true,
                'username' => 'sharesnip_test',
                'password' => 'sharesnip_test',
                'charset' => 'utf8',
                'enableParamLogging' => true,
                'enableProfiling' => true
            ),
        ),
        'params' => array(
            'test' => '/index-test.php'
        ),
    )
);
