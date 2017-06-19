<?php

function get_config()
{
    // if cached version does not exist
    if(!file_exists('cached_data.php'))
    {
        // read the yaml file
        require_once 'Spyc.php';

        $read_data = Spyc::YAMLLoad('data.yml');

        // save the cache
        $php_code_for_data = var_export($read_data, true);
        $php_code = "<?php\r\n\$cached_data = ".$php_code_for_data.";";

        file_put_contents('cached_data.php', $php_code);
    }

    // read the cache
    include 'cached_data.php';

    // return cached data
    return $cached_data;
}

$config = get_config();

var_dump($config);