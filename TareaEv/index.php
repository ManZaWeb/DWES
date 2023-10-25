<?php
 

$clientes = [

    [
        "nombre" => 'Manolo',
        "lista de pedidos" => [
            [
                "Articulos" => "Anchoas, berberechos",
                "total" => 19.95
            ]
        ],
        "subscripcion" => true
    ],
    [

        "nombre" => 'Juan',

        "lista de pedidos" => [
            [
                "Articulos" => "Chorizo, lacon , lomo",
                "total" => 69.95
            ]
        ],

        "subscripcion" => true

        
    ],

    [

        "nombre" => 'Jose Luis',

        "lista de pedidos" => [
            [
                "Articulos" => "Cucaña, salmón , lubina",
                "total" => 119.95
            ]
        ],

        "subscripcion" => true

        
    ],

    [

        "nombre" => 'Pancho Villa',

        "lista de pedidos" => [
            [
                "Articulos" => "Aks47, SigSauers, Mg42",
                "total" => 1985.95
            ]
        ],

        "subscripcion" => false

        
    ],

    [

        "nombre" => 'Jaime Algersuari',

        "lista de pedidos" => [],

        "subscripcion" => true

        
    ]

];


 

$nuevaLista = array_filter($clientes, function($cliente) {
    return $cliente['subscripcion'] === true;
});

$nuevaLista2 = array_filter($clientes, function($cliente) {
    return $cliente['subscripcion'] === false;
});

$nuevaLista3 = array_filter($clientes, function($cliente) {
    return !empty($cliente['lista de pedidos']);
});

require "index.view.php";

 

?>