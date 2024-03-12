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

    public function testTellName()
    {
      $user = new User(18, 'John');

      $this->assertIsString($user->tellName());
      $this->assertStringContainsStringIgnoringCase('John', $user->tellName());
    }

    public function testTellAge()
    {
      $user = new User(18, 'John');

      $this->assertIsString($user->tellAge());
      $this->assertStringContainsStringIgnoringCase('18', $user->tellAge());
    }

    public function testAddFavoriteMovie()
    {
      $user = new User(18, 'John');
      
      /*
      Here, we use a few new assertions – assertTrue, assertContains, and assertCount – 
      to check that the returned value is true, that it contains the newly added 
      string, and that the array now has one item in it.
      */
      $this->assertTrue($user->addFavoriteMovie('Avengers'));
      $this->assertContains('Avengers', $user->favorite_movies);
      $this->assertCount(1, $user->favorite_movies);
    }

    public function testRemoveFavoriteMovie()
    {
      $user = new User(18, 'John');

      /*
      Here, we're adding some movies to the list. Then, we remove one of them, and 
      confirm that the function returned true. Next, we confirm the removal by 
      checking that the value is no longer in the list. Finally, we confirm that 
      we have only one movie in the list, instead of two.
      */
      $this->assertTrue($user->addFavoriteMovie('Avengers'));
      $this->assertTrue($user->addFavoriteMovie('Justice League'));

      $this->assertTrue($user->removeFavoriteMovie('Avengers'));
      $this->assertNotContains('Avengers', $user->favorite_movies);
      $this->assertCount(1, $user->favorite_movies);
    }
}