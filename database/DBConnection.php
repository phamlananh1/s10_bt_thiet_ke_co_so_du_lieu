<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-02-12
 * Time: 10:02
 */

class DBConnection
{
    public $dsn;
    public $username;
    public $password;

    public function __construct($dns,$username,$password)
    {
        $this->dsn = $dns;
        $this->username = $username;
        $this->password = $password;
    }
    //thuc hien ket noi csdl tra ve chuoi ket noi
    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        return $conn;
    }
}