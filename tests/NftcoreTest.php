<?php
/**
 * Tests for NFTCore
 */

use PHPUnit\Framework\TestCase;
use Nftcore\Nftcore;

class NftcoreTest extends TestCase {
    private Nftcore $instance;

    protected function setUp(): void {
        $this->instance = new Nftcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
