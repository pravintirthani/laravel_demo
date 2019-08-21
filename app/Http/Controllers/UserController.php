<?php
namespace App\Http\Controllers;

use App\Http\Controllers\GenericController;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use App\User;

class UserController extends GenericController
{
    private $userService; 

    function __construct(Request $request){
        parent::__construct(new User(),$request);
         $this->userService=new UserService($request);
    }
    public function login(){
        $this->userService->login();
    }

    public function findById($id){
        var_dump($id);
    }
    
}
