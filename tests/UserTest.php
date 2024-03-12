<?php
namespace Francis\PhpUnitFreecodecamp;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    // Tests will go here
    public function testClassConstructor()
    {
      $user = new User(18, 'John');

      $this->assertSame('John', $user->name);
      $this->assertSame(18, $user->age);
      $this->assertEmpty($user->favorite_movies);
    }
}