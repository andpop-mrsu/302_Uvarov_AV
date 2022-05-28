<?php

namespace AUvarov\Tests;
use \PHPUnit\Framework\TestCase;
use AUvarov\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Уваров Алексей Владимирович'));
        $this->assertSame('Уваров Ал...', $truncater->truncate('Уваров Алексей Владимирович', ['length' => 10]));
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Уваров Алексей Владимирович', ['length' => 50]));
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Уваров Алексей Владимирович', ['length' => -10]));
        $this->assertSame('Уваров Ал*', $truncater->truncate('Уваров Алексей Владимирович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Уваров Алексей Владимирович*', $truncater->truncate('Уваров Алексей Владимирович', ['separator' => '*']));
    }
}
