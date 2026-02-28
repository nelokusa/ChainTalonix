<?php
/**
 * Tests for ChainTalonix
 */

use PHPUnit\Framework\TestCase;
use Chaintalonix\Chaintalonix;

class ChaintalonixTest extends TestCase {
    private Chaintalonix $instance;

    protected function setUp(): void {
        $this->instance = new Chaintalonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaintalonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
