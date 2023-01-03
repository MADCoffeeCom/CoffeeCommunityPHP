<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function __construct()
    {

        // $this->servername = 'sql6.freemysqlhosting.net';
        // $this->username = 'sql6587617';
        // $this->password = 'ueLJEfjwWf';
        // $this->databasename = 'sql6587617';

        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->databasename = 'coffeecomdb';

    }
}

?>
