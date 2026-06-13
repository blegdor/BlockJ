<?php
/**
 * Tests for BlockJ
 */

use PHPUnit\Framework\TestCase;
use Blockj\Blockj;

class BlockjTest extends TestCase {
    private Blockj $instance;

    protected function setUp(): void {
        $this->instance = new Blockj(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockj::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
