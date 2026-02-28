<?php
/**
 * Tests for DAppCryonix
 */

use PHPUnit\Framework\TestCase;
use Dappcryonix\Dappcryonix;

class DappcryonixTest extends TestCase {
    private Dappcryonix $instance;

    protected function setUp(): void {
        $this->instance = new Dappcryonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dappcryonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
