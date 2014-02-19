<?php

$app->get('/admin', function() use($app) {
    return $app->render('admin/index.html');
});
