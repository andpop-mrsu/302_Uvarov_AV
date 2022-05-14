<?php

namespace AUvarov\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович') . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Уваров Алексей Владимирович', ['separator' => '*']) . PHP_EOL;
}
