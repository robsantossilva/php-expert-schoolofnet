<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class Select
{
    private $table;
    private $fields = [];
    private $filters;
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

        $fields = "*";
        if ($this->fields) {
            $fields = implode(", ", $this->fields);
        }

        $filters = "";
        if ($this->filters) {
            $filters = " " . $this->filters;
        }

        return $this->sql = sprintf('SELECT %s FROM %s%s;', $fields, $this->table, $filters);
    }

    public function filters(Filters $filters)
    {
        $this->filters = $filters->getSql();
        return $this;
    }
}
