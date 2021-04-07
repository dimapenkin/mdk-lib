<?php

use PHPUnit\Framework\TestCase;
use penkin\MyLog;

class MyLogTest extends TestCase {
    public function testLog() {
        $this->expectOutputString("Penkin Dima");
        MyLog::log("Penkin Dima");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}