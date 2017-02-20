<?php

define('TOP_DIR', __DIR__);
//define('DEFAULT_CONFIG', TOP_DIR . "/config.php");
define('DEFAULT_CONFIG', "config.php");

/**
 * @param string $path
 * @return array
 */
function read_config($path = DEFAULT_CONFIG) {
    $config = require_once($path);
    return $config;
}
