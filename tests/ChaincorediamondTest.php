<?php
/**
 * Tests for ChainCoreDiamond
 */

use PHPUnit\Framework\TestCase;
use Chaincorediamond\Chaincorediamond;

class ChaincorediamondTest extends TestCase {
    private Chaincorediamond $instance;

    protected function setUp(): void {
        $this->instance = new Chaincorediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincorediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
