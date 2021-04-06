<?php

require 'src/entity/User.php';

try {

    $conn = new PDO ('mysql:dbname=corso_formarete;host=localhost','root','');

    $stm = $conn->prepare('select * from User;');

    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_CLASS,'User');

    print_r($result);   

    echo $result[0]->getUserId();

} catch (\PDOException $e) {
    echo $e->getMessage()."\n";
}