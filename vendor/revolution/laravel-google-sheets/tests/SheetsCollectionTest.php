<?php
namespace Revolution\Google\Sheets\tests;

use PHPUnit\Framework\TestCase;

use Revolution\Google\Sheets\Sheets;

class SheetsCollectionTest extends TestCase
{
    protected $sheet;

    public function setUp()
    {
        parent::setUp();

        $this->sheet = new Sheets();
    }

    public function testCollection()
    {
        $header = ['id', 'name', 'mail'];
        $rows = [
            ['1', 'name1', 'mail1'],
            ['2', 'name2', 'mail2']
        ];

        $collection = $this->sheet->collection($header, $rows);

        $this->assertEquals('name1', $collection->first()['name']);
    }

    public function testCollection2()
    {
        $header = ['id', 'name', 'mail'];
        $rows = [
            ['1', 'name1', 'mail1'],
            ['2', 'name2']
        ];

        $collection = $this->sheet->collection($header, $rows);

        $this->assertNotNull($collection->last()['mail']);
    }

    public function testCollection3()
    {
        $rows = collect([
            ['id', 'name', 'mail'],
            ['1', 'name1', 'mail1'],
            ['2', 'name2', 'mail3']
        ]);

        $header = $rows->pull(0);

        $collection = $this->sheet->collection($header, $rows);

        $this->assertEquals('mail3', $collection->last()['mail']);
    }
}
