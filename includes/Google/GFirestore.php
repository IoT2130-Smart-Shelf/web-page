<?php 

require_once 'vendor/autoload.php';
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

    public function getDocument(string $name){
        try{
            if($this->collection_name->document($name)->snapshot()->exists()){
                return $this->collection_name->document($name)->snapshot()->data();
            }else{
                throw new Exception('Documento no existe');
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    } // end getDocument

public function getDocuments(){
    $documents = $this->collection_name->documents();
    foreach ($documents as $document) {
        if ($document->exists()) {
            printf('Datos del documento %s:' . PHP_EOL, $document->id());
            print_r($document->data());
            printf(PHP_EOL);
        } else {
            printf('Documento %s no existe!' . PHP_EOL, $document->id());
        }
    }
} // end getDocument

    public function getWhere(string $field, string $operator, $value)
    {
        $arr = [];
        $query = $this->database->collection($this->name)->where($field, $operator, $value)->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $item) {
                $arr[] = $item->data();
            }
        }
        return $arr;
    }

}

?>