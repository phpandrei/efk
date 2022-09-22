<?php
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/fluentd-' . \Carbon\CarbonImmutable::now()->format('Ymd') . '.log', Logger::WARNING));

// add records to the log
$log->addWarning(
    'Foo',
    [
        'myWarning' => [
            'name' => 'myWarningAndrei',
            'old' => '18',
        ],
    ]
);
$log->addError(
    'Bar',
    [
        'myError' => [
            'name' => 'myErrorAndrei',
            'old' => '25',
        ],
    ]
);
$log->addInfo(
    'myInfo',
    [
        'myInfo' => [
            'name' => 'myInfoAndrei',
            'old' => '35',
        ],
    ]
);

dump($log);


dump(\Carbon\CarbonImmutable::now());
dump(\Carbon\CarbonImmutable::now()->toDateTimeString());
dump(\Carbon\CarbonImmutable::now()->toDateString());
dump(\Carbon\CarbonImmutable::now()->format('Ymd'));