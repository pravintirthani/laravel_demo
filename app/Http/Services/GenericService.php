<?php
namespace App\Http\Services;

use Illuminate\Http\Request;

class GenericService
{
    protected $modelObject;
    
    public function __construct($modelObject){        
        $this->modelObject=$modelObject;
    }
    
    public function save($requestData){
        foreach($requestData as $key=>$value){
            $this->modelObject->$key=$value;
        }
        $this->modelObject->save();
    }
    public function update(){
        // $this->modelObject=
        foreach($requestData as $key=>$value){
            $this->modelObject->$key=$value;
        }
        $this->modelObject->save();
    }
}
