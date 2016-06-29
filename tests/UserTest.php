<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/29/16
 * Time: 5:44 PM
 */

class UserTest extends PHPUnit_Framework_TestCase {
    public function setUp(){
        $this->user = new Zooomapi\Zooapi\User();
    }

    public function testloggedin(){
        $this->assertSame("admin,amedora",$this->user->loggedin());
    }
}
 