<?php

$app->get('/', function ($params) use ($app) {
    $c = $app->getContainer();
    $users = $c['model_user'];
    $data = $users->findAll();
    return $c['view']->render('index.phtml', ['users' => $data]);
});

$app->get('/admin/users', function ($params) use ($c, $auth) {
});

$app->get('/admin/users/new', function ($params) use ($c, $auth) {
});

$app->post('/admin/users/new', function ($params) use ($c, $auth) {
});

$app->get('/admin/users/{id}', function ($params) use ($c, $auth) {
});

$app->get('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
});

$app->post('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
});

$app->post('/admin/users/delete/{id}', function ($params) use ($c, $auth) {
});
