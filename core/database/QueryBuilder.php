<?php
class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function fetchALLTasks($table){
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchALL(PDO::FETCH_CLASS);

    }
    public function insert($table,$parametrs){
                               // insert into names (name,email) values (:name, :email)
                               // $statement->execute(['name' => 'Agits', 'email' => 'aghybf@me.com']);
                               //die(var_dump(array_keys($parametrs)));
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',  ', array_keys($parametrs)),
            ':' . implode(', : ', array_keys($parametrs)), // :name, :email, :age
        );
                               //die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parametrs);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

}
