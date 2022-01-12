<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class SelectTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectWithoutFilter()
    {
        $select = new Select;
        $select->table('pages');
        $actual = $select->getSql();
        $expected = 'SELECT * FROM pages;';
        $this->assertEquals($expected, $actual);
    }

    public function testSelectWithFilter()
    {
        $select = new Select;
        $select->table('pages');

        $stub = $this->getMockBuilder(Filters::class)
            ->disableOriginalConstructor()
            ->getMock();
        $stub->method('getSql')
            ->willReturn('WHERE id=1 ORDER BY created desc');

        $select->filters($stub);

        $actual = $select->getSql();
        $expected = 'SELECT * FROM pages WHERE id=1 ORDER BY created desc;';
        $this->assertEquals($expected, $actual);
    }

    public function testSelectInputtingFields()
    {
        $select = new Select;
        $select->table('pages');
        $select->fields(['name', 'email']);
        $actual = $select->getSql();
        $expected = 'SELECT name, email FROM pages;';
        $this->assertEquals($expected, $actual);
    }
}
