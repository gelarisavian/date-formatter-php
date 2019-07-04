<?php

use \Mockery;
use DateFormatter\DateFormatter;

class DateFormatterTest extends TestCase
{

    /**
     * @covers \src\DateFormatter::newDateTime
     */
    public function testNewDateTime()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->newDateTime($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInstanceOf(DateTime::class, $date);
    }

    /**
     * @covers \src\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHumanNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->dateDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers \src\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHuman()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->dateDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers \src\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHumanFormat()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->dateDbToHuman($myDate, 'd/m/Y');
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers \src\DateFormatter::dateHumanToDb
     */
    public function testdateHumanToDbNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->dateHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers \src\DateFormatter::dateHumanToDb
     */
    public function testdateHumanToDb()
    {
        $classFormatter = new DateFormatter();
        $myDate =  date('d/m/Y H:i:s');
        $date = $classFormatter->dateHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers \src\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHumanNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->datetimeDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers \src\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHuman()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d H:i:s');
        $date = $classFormatter->datetimeDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers \src\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHumanFormat()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d H:i:s');
        $date = $classFormatter->datetimeDbToHuman($myDate, 'd/m/Y');
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers \src\DateFormatter::datetimeHumanToDb
     */
    public function testDatetimeHumanToDbNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->datetimeHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers \src\DateFormatter::datetimeHumanToDb
     */
    public function testDatetimeHumanToDb()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('d/m/Y H:i:s');
        $date = $classFormatter->datetimeHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
