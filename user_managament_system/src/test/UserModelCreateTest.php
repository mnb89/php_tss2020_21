<?php

require __DIR__."/../entity/User.php";
require __DIR__."/../model/UserModel.php";


$model = new UserModel();
$user = new User("Tizio", "Cosimo", "tizio.co@email.com", "1980-10-12");
$model->create($user);


