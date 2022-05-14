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
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Заводов Дмитрий Александрович'));
        $this->assertSame('Уваров Ал...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 10]));
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 50]));
        $this->assertSame('Уваров Алексей Владимирович...', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => -10]));
        $this->assertSame('Уваров Ал*', $truncater->truncate('Заводов Дмитрий Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Уваров Алексей Владимирович*', $truncater->truncate('Заводов Дмитрий Александрович', ['separator' => '*']));
    }
}
