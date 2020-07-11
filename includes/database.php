<?php

use Medoo\Medoo;

class Database
{

    private $host;
    private $db;
    private $user;
    private $pwd;
    private $charset;

    public function __construct()
    {
        $this->host = constant("HOST");
        $this->db = constant("DB_NAME");
        $this->user = constant("DB_USER");
        $this->pwd = constant("DB_PWD");
        $this->charset = constant("CHARSET");
    }

    function connect()
    {
        try {

            $medoo = new Medoo([
                'database_type' => 'mysql',
                'database_name' => $this->db,
                'server' => $this->host,
                'username' => $this->user,
                'password' => $this->pwd
            ]);


            if ($medoo->error() != null && $medoo->error()[0] != 00000) {
                $exceptionHandler = new ExceptionHandler($medoo->error()[1]);
                $exceptionHandler->getView();
            }
            return $medoo;

        } catch (PDOException $e) {
            $exceptionHandler = new ExceptionHandler("¡Error! No se ha podido conectar a la BBDD");
            $exceptionHandler->getView();
        }
    }
}
