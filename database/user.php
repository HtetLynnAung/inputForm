<?php
class User {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function getPosts(){
        $query = "SELECT * FROM user_info";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

