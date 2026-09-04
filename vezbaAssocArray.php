<?php
//Vezba 1 Napraviti associjativni niz pod imenom "user" i onda u njega upisati
//sledece podatke "name", "lastName", "age"

//Vezba 2 Napraviti prazan asocijativni niz i u njega naknadno upisati vrednost
//"age"

//Vezba 3 Iz datog niza obrisati key pod imenom "model" $data = ["model" =>
//"PC", "version" => 2.0, "price" => 999];

    //Vezba 1
    $user = [
        "name" => "Sale",
        "lastName" => "Radovan",
        "age" => 30
    ];

        


    //Vezba 2 
    $prazan = [];

    $prazan["age"] = 28;
    

    //Vezba 3
    $data = [
        "model" =>"PC",
        "version" => 2.0,
        "price" => 999
         ];
    unset($data['model']);
    var_dump($data);

 ?>
