<?php
class DATABASE_CONFIG {

    public $url;

    public $default = array();

    public function __construct() {
        if(getenv("CLEARDB_DATABASE_URL")) {
            $this->url = parse_url(getenv("CLEARDB_DATABASE_URL"));
            $this->default = array(
                'datasource' => 'Database/Mysql',
                'persistent' => false,
                'host' => $this->url['host'],
                'port' => 3306,
                'login' => $this->url['user'],
                'password' => $this->url['pass'],
                'database' => substr($this->url['path'], 1)
            );
        } else {
            $this->default = array(
                'datasource' => 'Database/Mysql',
                'persistent' => false,
                'host' => 'localhost',
                'port' => 3306,
                'login' => 'root',
                'password' => '',
                'database' => 'sonoricstudios',
            );
        }
    }

}
