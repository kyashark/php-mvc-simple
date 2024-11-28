<?php

class Database{

    public Static function connect(){
        return new PDO("mysql:host=localhost;dbname=mvc_demo","root","",[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    }
}