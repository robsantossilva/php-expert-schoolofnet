<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class FiltersTest extends \PHPUnit\Framework\TestCase
{
    public function testWhereOnly()
    {
        $filters = new Filters;
        $filters->where('id', '=', 1);

        $actual = $filters->getSql();
        $expected = 'WHERE id=1';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderByOnly()
    {
        $filters = new Filters;
        $filters->orderBy('created', 'desc');

        $actual = $filters->getSql();
        $expected = 'ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }

    public function testWhereWithOrderBy()
    {
        $filters = new Filters;
        $filters->where('id', '=', 1);
        $filters->orderBy('created', 'desc');

        $actual = $filters->getSql();
        $expected = 'WHERE id=1 ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderByWithWhere()
    {
        $filters = new Filters;
        $filters->orderBy('created', 'desc');
        $filters->where('id', '=', 1);


        $actual = $filters->getSql();
        $expected = 'WHERE id=1 ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }

    public function testWhereWithAnyOrderBy()
    {
        $filters = new Filters;
        $filters->where('id', '=', 1);
        $filters->orderBy('created', 'desc');
        $filters->orderBy('updated', 'asc');

        $actual = $filters->getSql();
        $expected = 'WHERE id=1 ORDER BY created desc, updated asc';

        $this->assertEquals($expected, $actual);
    }

    public function testOrderByWithAnyWhere()
    {
        $filters = new Filters;
        $filters->orderBy('created', 'desc');
        $filters->where('id', '=', 1);
        $filters->where('active', '=', 1);


        $actual = $filters->getSql();
        $expected = 'WHERE id=1 and active=1 ORDER BY created desc';

        $this->assertEquals($expected, $actual);
    }
}
