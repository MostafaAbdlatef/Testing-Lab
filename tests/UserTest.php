<?php
require './src/User.php';
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase
{
    public function testUser()
    {
        // create instance from User calss
        $user = new User("samy","mostafa@yahoo.com");

        // Test username
        $user->name("samy");
        $name->$user->name();
        $this->assertEquals("samy",$name);

        // Test Email
        $user->email("samy@gmail.com");
        $name->$user->email();
        $this->assertEquals("samy@gmail.com",$email);
    }
}
