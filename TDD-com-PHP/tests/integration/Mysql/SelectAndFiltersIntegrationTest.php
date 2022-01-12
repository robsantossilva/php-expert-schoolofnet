<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class SelectAndFiltersIntegrationTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectWithWhereAndOrderBy()
    {
        $select = new Select;
        $select->table('users');

        $filters = new Filters;
        $filters->where('id', '=', 1);
        $filters->orderBy('created', 'desc');

        $select->filters($filters);
        $actual = $select->getSql();
        $expected = "SELECT * FROM users WHERE id=1 ORDER BY created desc;";
        $this->assertEquals($expected, $actual);
    }

    public function testSelectWithOrderByAndWhere()
    {
        $select = new Select;
        $select->table('users');

        $filters = new Filters;
        $filters->orderBy('created', 'desc');
        $filters->where('id', '=', 1);


        $select->filters($filters);
        $actual = $select->getSql();
        $expected = "SELECT * FROM users WHERE id=1 ORDER BY created desc;";
        $this->assertEquals($expected, $actual);
    }

    public function testSelectWithWhereOnly()
    {
        $select = new Select;
        $select->table('users');

        $filters = new Filters;
        $filters->where('id', '=', 1);

        $select->filters($filters);
        $actual = $select->getSql();
        $expected = "SELECT * FROM users WHERE id=1;";
        $this->assertEquals($expected, $actual);
    }

    public function testSelectWithOrderByOnly()
    {
        $select = new Select;
        $select->table('users');

        $filters = new Filters;
        $filters->orderBy('created', 'desc');

        $select->filters($filters);
        $actual = $select->getSql();
        $expected = "SELECT * FROM users ORDER BY created desc;";
        $this->assertEquals($expected, $actual);
    }

    public function testSelectWithoutFilters()
    {
        $select = new Select;
        $select->table('users');

        $filters = new Filters;

        $select->filters($filters);
        $actual = $select->getSql();
        $expected = "SELECT * FROM users;";
        $this->assertEquals($expected, $actual);
    }
}
