<?php 

use Google\Cloud\Firestore\FirestoreClient;

class GFirestore{

    protected $database;
    protected $name;
    protected $collection_name;

    public function __construct(string $collection){        
        $this->database = new FirestoreClient([
            'projectId' => 'smart-shelf-44c69'
        ]);
        $this->name = $collection;
        $this->collection_name = $this->database->collection($this->name);
    } // end construct

    public function getProductos(string $store){
        $documents = $this->collection_name->document($store)->collection('Productos')->documents();
        $products = [];
        foreach ($documents as $document) {
            if ($document->exists()) {
                array_push($products, $document->data());
            }
        }
        return $products;
    } // end getProductos

    public function getCuentas(string $store){
        $documents = $this->collection_name->document($store)->collection('Cuentas')->documents();
        $accounts = [];
        foreach ($documents as $document) {
            if ($document->exists()) {
                array_push($accounts, $document->data());
            }
        }
        return $accounts;
    } // end getCuentas
}

?>