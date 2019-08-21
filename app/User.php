<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    private $id;
    private $name;
    private $email;
    private $password;
    private $userName;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['*'];
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

    public function setPassword($password){
        $this->password=$password;
    }

    public function getPassword(){
        $this->password;
    }

    public function setUserName($userName){
        $this->userName=$userName;
    }

    public function getUserName(){
        $this->userName;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        $this->email;
    }

    public static function toObject($request)
    {
        $obj = new User;
        $obj->name=$request['name'];
        $obj->email=$request['email'];        
        $obj->password=$request['password'];  
        $obj->userName=$request['userName'];
        var_dump($obj);
        var_dump($obj->save());  
        return $obj;
    }  

    public static function toCustomArray($obj)
    {
        $request= array(
                        'name'=> $obj->name(),
                        'email'=>$obj->email(),                        
                        'password'=>$obj->password(),
                        'userName'=>$obj->userName());

        return $request;
    }    

}
