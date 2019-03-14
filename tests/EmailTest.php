<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {

  public function testCanbeCreatedFromValidEmailAddress(): void {
    $this->assertInstanceOf(
      Email::class,
      Email::fromString('user@example.com')
    );
  }

  public function testCannotBeCreatedFromInvalidEmailAddress(): void {
    $this->expectException(InvalidArgumentException::class);
    Email::fromString('invalid');

  }

  public function testCanBeUserAsString(): void {
    $this->assertEquals('user@example.com',Email::fromString('user@example.com'));
  }
}
