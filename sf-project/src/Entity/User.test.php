<?php
namespace App\tests\Entity;

use .\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetter()
    {
        $user = new User();
        $user.setUsername("JeanPierre Cofee");

        $this->assertEquals("JeanPierre Cofee", $user.getUsername());
    }
}
