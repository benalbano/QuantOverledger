<?php
/**
 * Tests for QuantOverledger
 */

use PHPUnit\Framework\TestCase;
use Quantoverledger\Quantoverledger;

class QuantoverledgerTest extends TestCase {
    private Quantoverledger $instance;

    protected function setUp(): void {
        $this->instance = new Quantoverledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Quantoverledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
