<?php
/**
 * Tests for NeuralDriftar
 */

use PHPUnit\Framework\TestCase;
use Neuraldriftar\Neuraldriftar;

class NeuraldriftarTest extends TestCase {
    private Neuraldriftar $instance;

    protected function setUp(): void {
        $this->instance = new Neuraldriftar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Neuraldriftar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
