<?php

$app->get('/admin', function() use($app) {
    return $app->render('admin/index.twig');
});

$app->get('/admin/reasons', function() use($app) {
    return $app->render('admin/reasons/index.twig', array(
        'reasons' => Reason::find()
    ));
});

$app->get('/admin/reasons/new', function() use($app) {
    return $app->render('admin/reasons/form.twig', array(
        'reason' => new Reason()
    ));
});

$app->post('/admin/reasons', function() use($app) {
    $reason = new Reason($app->request()->params());
    $reason->save();
    $app->redirect('/admin/reasons');
});

$app->get('/admin/reasons/:id/edit', function($id) use($app) {
    if ($reason = Reason::byId($id)) {
        return $app->render('admin/reasons/form.twig', array(
            'reason' => $reason
        ));
    } else {
        $app->notFound();
    }
});

$app->put('/admin/reasons/:id', function($id) use($app) {
    if ($reason = Reason::byId($id)) {

        // To get rid of the _METHOD param
        $params = $app->request()->params();
        array_pop($params);

        $reason->load($params);
        $reason->save();
        $app->redirect('/admin/reasons');
    } else {
        $app->notFound();
    }
});

$app->delete('/admin/reasons/:id', function($id) use($app) {
    if ($reason = Reason::byId($id)) {
        $reason->delete();
        $app->redirect('/admin/reasons');
    } else {
        $app->notFound();
    }
});
