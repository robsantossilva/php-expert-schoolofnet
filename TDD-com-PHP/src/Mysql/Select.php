<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class Select
{
    protected $table;
    protected $sql;

    public function table(string $table)
    {
        $this->table = $table;
        $this->sql = sprintf('SELECT * FROM %s;', $table);
    }

    public function getSql(): string
    {
        return $this->sql;
    }
}
