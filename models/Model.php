<?php


namespace home\models;


abstract class Model
{
    protected $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }
}