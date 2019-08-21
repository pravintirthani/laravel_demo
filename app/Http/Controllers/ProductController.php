<?php
namespace App\Http\Controllers;

use App\Http\Controllers\GenericController;
use Illuminate\Http\Request;
use App\Http\Services\ProductService;
use App\model\Product;

class ProductController extends GenericController
{
    protected $productService ;
    function __construct(Request $request){
        parent::__construct(new Product(),$request);
        $this->productService = new ProductService(); 
    }    
}
