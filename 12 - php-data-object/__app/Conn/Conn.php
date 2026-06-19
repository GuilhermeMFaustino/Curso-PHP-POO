<?php

/**
 * Conn
 * Retorna um objeto PDO pelo metodo estatico getconn
 * classe abstrata de conexao. Padara singleton
 */
class Conn
{

    private static $Instance;

    private static function Conectar()
    {
        try {
            if (self::$Instance == null):
                $dsn = 'mysql:host='.HOST. ';dbname=' . DBSA.';charset=utf8mb4';
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ];
                self::$Instance = new PDO($dsn, USER, PASS, $options);
            endif;

        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die();
        }

        return self::$Instance;
    }

    /**
     * Retonr um objeto PDO Singleton Pattern
     * @return $conn
     */
    public static function getConn()
    {
        return self::Conectar();
    }

    
}