<?php
/**
 * Tests for ApiRoutes
 */

use PHPUnit\Framework\TestCase;
use Apiroutes\Apiroutes;

class ApiroutesTest extends TestCase {
    private Apiroutes $instance;

    protected function setUp(): void {
        $this->instance = new Apiroutes(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apiroutes::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
