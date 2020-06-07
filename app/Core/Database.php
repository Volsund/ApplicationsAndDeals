<?php

namespace App\Core;

use Medoo\Medoo;

class Database
{
    private $connection;

    public static $instance = null;

    public function __construct()
    {
        if (self::$instance === null) {
            self::$instance = $this;
        }
        $this->connection = new Medoo([
            'database_type' => 'mysql',
            'database_name' => '**DATABASE NAME HERE**',
            'server' => 'localhost',
            'username' => '**DATABASE USER NAME HERE**',
            'password' => '**DATABASE PASSWORD HERE**'
        ]);
    }

    public static function getInstance(): self
    {
        return self::$instance ?? new Database();
    }

    public function connection()
    {
        return $this->connection;
    }
}