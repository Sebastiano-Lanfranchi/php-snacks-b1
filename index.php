<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $calendar=[];
    $partita1=[
      "squadraO" => "VL Pesaro",
      "squadraC" => "Trento",
      "punteggioO" => "81",
      "punteggioC" => "70"
    ];
    $partita2=[
      "squadraO" => "Brescia",
      "squadraC" => "Venezia",
      "punteggioO" => "71",
      "punteggioC" => "69"
    ];
    $partita3=[
      "squadraO" => "Trieste",
      "squadraC" => "Virtus Bologna",
      "punteggioO" => "60",
      "punteggioC" => "77"
    ];
    $partita4=[
      "squadraO" => "Trento",
      "squadraC" => "Cantu",
      "punteggioO" => "74",
      "punteggioC" => "73"
    ];
    $partita5=[
      "squadraO" => "Olimpia Milano",
      "squadraC" => "Brindisi",
      "punteggioO" => "82",
      "punteggioC" => "88"
    ];
    $partita6=[
      "squadraO" => "Varese",
      "squadraC" => "Reggiana",
      "punteggioO" => "76",
      "punteggioC" => "89"
    ];
    $partita7=[
      "squadraO" => "Universo Treviso",
      "squadraC" => "Cremona",
      "punteggioO" => "101",
      "punteggioC" => "90"
    ];
    $partita8=[
      "squadraO" => "Olimpia Milano",
      "squadraC" => "Cantu",
      "punteggioO" => "55",
      "punteggioC" => "60"
    ];
    $partita9=[
      "squadraO" => "Trieste",
      "squadraC" => "Trento",
      "punteggioO" => "92",
      "punteggioC" => "82"
    ];

    array_push( $calendar,$partita1, $partita2, $partita3, $partita4, $partita5, $partita6, $partita7, $partita8, $partita9);
        var_dump($calendar);




     ?>
  </body>
</html>
