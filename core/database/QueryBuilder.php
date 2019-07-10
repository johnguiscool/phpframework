<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return ($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function insert($table, $values)
    {

        $onlyKeys = [];
        $onlyValues = [];

        foreach ($values as $key => $value) {
            $onlyKeys[] = $key;
            $onlyValues[] = $value;
        }



        $csvValues = implode(",", $onlyValues);
        $csvKeys = implode(",", $onlyKeys);

        var_dump($csvValues);;
        var_dump($csvKeys);

        $statement = $this->pdo->prepare("insert into {$table} ($csvKeys) values ($csvValues)");
        var_dump($statement);
        $statement->execute();
    }
}
