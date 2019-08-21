<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $table = 'product';

    protected $id;
    protected $name;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name'];
    // protected $fillable = [
    //     'id','name', 'email', 'password','userName'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        $this->name;
    }

    public static function toObject($request)
    {
        $obj = new Product;
        $obj->name=$request['name'];        
        return $obj;
    }  

    public static function toCustomArray($obj)
    {
        $request= array(
                        'id'=> $obj->id,
                        'name'=> $obj->name
            );

        return $request;
    }    

    public function saveProduct($product){
        Product::update($this->toCustomArray($product));
    }

}
