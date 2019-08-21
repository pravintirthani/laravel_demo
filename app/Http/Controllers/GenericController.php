<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Services\GenericService;

class GenericController extends BaseController
{
    protected $genericService ;
    protected $request;
    function __construct($modelObject,Request $request){
        $this->request=$request;
        $this->genericService = new GenericService($modelObject); 
    }
    
    public function save(){
        $this->genericService->save($this->request['data']);
    }
    
    public function update(){
        $this->genericService->update($this->request['data']);
    }

   
    
}
