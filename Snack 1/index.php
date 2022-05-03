    <?php 
    $games = [
        [
            "home" => "NUTRIBULLET TREVISO BASKET",
            "away" => "VIRTUS SEGAFREDO BOLOGNA",
            "hpoints" => 76,
            "apoints" => 113
        ],
        [
            "home" => "A|X ARMANI EXCHANGE MILANO",
            "away" => "HAPPY CASA BRINDISI",
            "hpoints" => 92,
            "apoints" => 87
        ],
        [
            "home" => "BERTRAM DERTHONA BASKET TORTONA",
            "away" => "ALLIANZ PALLACANESTRO TRIESTE",
            "hpoints" => 80,
            "apoints" => 74
        ]
    ];

    for($i = 0; $i< count($games); $i++)
    {
        echo("<p>".$games[$i]["home"]." - ".$games[$i]["away"]." | ".$games[$i]["hpoints"]." - ".$games[$i]["apoints"]."</p>");

    }
    ?>
