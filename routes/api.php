<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return response()->json([
        [
            'id' => 1,
            'title' => 'T-shirt Homme',
            'price' => 120,
            'category' => 'Homme'
        ],
        [
            'id' => 2,
            'title' => 'Robe Femme',
            'price' => 220,
            'category' => 'Femme'
        ],
        [
            'id' => 3,
            'title' => 'Chaussures Enfant',
            'price' => 180,
            'category' => 'Enfant'
        ]
    ]);
});