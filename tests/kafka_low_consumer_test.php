<?php

/**
 * kafka_low_consumer_test
 * @createdAt 2022-02-16
 * */

require_once __DIR__ . '/tests.php';

$consumer = new \learn\src\Kafka\LowConsumer();

$consumer->run();
