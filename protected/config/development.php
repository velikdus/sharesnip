<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/main.php'),
    array(
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
    )
);
