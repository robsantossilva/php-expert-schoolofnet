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
