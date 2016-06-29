<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/29/16
 * Time: 5:29 PM
 */
namespace Zooomapi\Zooapi;
class User {
    public $user_id = 5;
    public $username="Admin";
    public $password = "admin123";

    function __construct(){

    }

    public function  loggedin($username,$password){
        $object = new self;
        if($username=="Admin" && $password=="admin123" ){
            $object->username="Admin";
            $object->password="admin123";
            return $object;
        }else{
            return null;
        }
    }
} 