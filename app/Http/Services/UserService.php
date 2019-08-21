<?php
namespace App\Http\Services;

use App\Http\Services\BaseService;
use Illuminate\Http\Request;
use App\User;

class UserService extends BaseService
{
    private $user;

    public function __construct(Request $request){
        $this->user=User::toObject($request['data']);
        
    }

    public function login(){
       
    }

    public function signUp(){
        // $data=User::toCustomArray($this->user);
        // $this->user->fill($data);
        // $this->user->save();
    }

    public function findById($id){
        var_dump($id);
    }
    
}
