<?php

namespace ZFTTest;


use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use ZFT\User;

class UserTest extends AbstractHttpControllerTestCase
{
    public function testCenCreateUserObject()
    {
        $user = new User();
        $this->assertInstanceOf(User::class,$user);
    }

}