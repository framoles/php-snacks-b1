<?php

$classe = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [7,10,9,6,8,5]
    ],
    [
        "nome" => "Gino",
        "cognome" => "Bianchi",
        "voti" => [6,5,4,5,6,6]
    ],
    [
        "nome" => "Peppe",
        "cognome" => "Verdi",
        "voti" => [8,3,6,7,9,5]
    ],
];

foreach($classe as $alunno){
    $somma = 0;
    foreach($alunno["voti"] as $voto)
    {
        $somma += $voto;
    }
    $media = $somma/count($alunno["voti"]);
    echo $alunno["nome"]." ".$alunno["cognome"]." ".round($media,1)."<br>";
}

?>