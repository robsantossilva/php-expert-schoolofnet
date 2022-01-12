<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class Select
{
    private $table;
    private $fields = [];
    private $sql;

    public function table(string $table)
    {
        $this->table = $table;

        return $this;
    }

    public function fields(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function getSql(): string
    {
        if ($this->fields) {
            return $this->sql = sprintf('SELECT %s FROM %s;', implode(", ", $this->fields), $this->table);
        }

        return $this->sql = sprintf('SELECT * FROM %s;', $this->table);
    }
}
