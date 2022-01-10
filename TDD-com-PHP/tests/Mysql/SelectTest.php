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
}
