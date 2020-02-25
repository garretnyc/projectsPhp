<?php
namespace  phpTest\models ;

class Manager
{
    protected function dbConnect()   //protected is like private but can be used by other classes.
    {
        $db = new \PDO('mysql:host=localhost;dbname=phpTest;charset=utf8', 'root', '');
        return $db;  //pdo must be in the roots.
    }
}