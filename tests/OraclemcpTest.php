<?php
/**
 * Tests for OracleMCP
 */

use PHPUnit\Framework\TestCase;
use Oraclemcp\Oraclemcp;

class OraclemcpTest extends TestCase {
    private Oraclemcp $instance;

    protected function setUp(): void {
        $this->instance = new Oraclemcp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oraclemcp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
