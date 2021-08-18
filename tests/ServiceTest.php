<?php

namespace App\Tests;

use App\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testShouldBlah(): void
    {
        // Given
        $downloadService = new Service();

        // When
        $result = $downloadService->blah();

        // Then
        self::assertTrue($result);
    }
}
