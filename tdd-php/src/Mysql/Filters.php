<?php

namespace Robsantossilva\QueryBuilder\Mysql;

class Filters
{

    private $sql = "";
    private $where = [];
    private $orderBy = [];

    public function where(string $field, string $condition, string $value): Filters
    {
        $this->where[] = sprintf('%s%s%s', $field, $condition, $value);
        return $this;
    }

    public function orderBy(string $field, string $order): Filters
    {
        $this->orderBy[] = sprintf('%s %s', $field, $order);
        return $this;
    }

    public function getSql(): string
    {
        if ($this->where) {
            $this->sql .= "WHERE ";
            $this->sql .= implode(' and ', $this->where);
        }
        if ($this->orderBy) {
            if ($this->where) {
                $this->sql .= " ORDER BY ";
            } else {
                $this->sql .= "ORDER BY ";
            }

            $this->sql .= implode(", ", $this->orderBy);
        }
        return $this->sql;
    }
}
