<?php

namespace trapezaiv\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович') . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Трапеза Игорь Владимирович', ['separator' => '*']) . PHP_EOL;
}
