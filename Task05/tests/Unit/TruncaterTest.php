<?php

namespace trapezaiv\Tests;
use \PHPUnit\Framework\TestCase;
use trapezaiv\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Трапеза Игорь Владимирович...', $truncater->truncate('Трапеза Игорь Владимирович'));
        $this->assertSame('Трапез Игор...', $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 10]));
        $this->assertSame('Трапеза Игорь Владимирович...', $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 50]));
        $this->assertSame('Трапеза Игорь Владимирович...', $truncater->truncate('Трапеза Игорь Владимирович', ['length' => -10]));
        $this->assertSame('Трапез Игор*', $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Трапеза Игорь Владимирович*', $truncater->truncate('Трапеза Игорь Владимирович', ['separator' => '*']));
    }
}
