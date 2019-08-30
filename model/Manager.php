<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=blog-p5;charset=utf8', 'root', '');
        return $db;
    }
}