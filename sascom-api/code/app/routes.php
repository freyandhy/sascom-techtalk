<?php

$app->get('/', 'PageController:index');

$app->get('/api/books', 'BookController:getAll');
$app->get('/api/books/limit/{limit}/{order}', 'BookController:getLimit');