<?php
/**
 * Tests for ChainCircle
 */

use PHPUnit\Framework\TestCase;
use Chaincircle\Chaincircle;

class ChaincircleTest extends TestCase {
    private Chaincircle $instance;

    protected function setUp(): void {
        $this->instance = new Chaincircle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincircle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
