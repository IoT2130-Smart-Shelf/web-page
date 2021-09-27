<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

class GFirestone{

    protected $name;
    protected $database;

    public function __construct(string $store){        
        $this->name = $store;
        $firebase = (new Factory)
            ->withServiceAccount('includes/smart-shelf-44c69-firebase-adminsdk-ybsc7-fe02c5deb9.json')
            ->withDatabaseUri('https://smart-shelf-44c69-default-rtdb.firebaseio.com/');

        $this->database = $firebase->createDatabase();
    } // end construct

    public function getProductos(){
        $documents = $this->database->getReference('/Tiendas')->getValue()[$this->name]['Productos'];
        $products = [];
        foreach ($documents as $document) {
            array_push($products, $document);
        }
        return $products;
    } // end getProductos

    public function getCuentas(){
        $documents = $this->database->getReference('/Tiendas')->getValue()[$this->name]['Cuentas'];
        $accounts = [];
        foreach ($documents as $document) {
                array_push($accounts, $document->data());
        }
        return $accounts;
    } // end getCuentas
}
?>