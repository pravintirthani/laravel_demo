<?php
namespace App\Http\Services;

use App\Http\Services\GenericService;
use Illuminate\Http\Request;
use App\model\Product;

class ProductService extends GenericService
{
    public function __construct(){   
        $this->modelObject=new Product();
    }

    // public function customSave(Request $request){        
    //     $this->save($request['data']);
    // }

    public function customUpdate(Request $request){
        $product=Product::find($request['data']['id']);     
        $product->name=$request['data']['name'];
        $product->save();
    }

    public function findById($id){
        Product::find($id);
    }
    
}
