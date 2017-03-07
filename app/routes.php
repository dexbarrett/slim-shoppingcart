<?php

$app->get('/', ['Cart\Controllers\HomeController', 'index'])
    ->setName('home');

    $app->get('/products/{slug}', ['Cart\Controllers\ProductController', 'get'])
    ->setName('product.get');

    $app->get('/cart', ['Cart\Controllers\CartController', 'index'])
        ->setName('cart.index');

    $app->get('/cart/add/{slug}/{quantity}', ['Cart\Controllers\CartController', 'add'])
        ->setName('cart.add');

    $app->post('/cart/update/{slug}', ['Cart\Controllers\CartController', 'update'])
        ->setName('cart.update');

    $app->get('/order', ['Cart\Controllers\OrderController', 'index'])
        ->setName('order.index');

    $app->post('/order', ['Cart\Controllers\OrderController', 'create'])
        ->setName('order.create');