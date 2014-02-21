<?php

$app->get('/admin', function() use($app) {
    return $app->render('admin/index.twig');
});

$app->get('/admin/reasons', function() use($app) {
    return $app->render('admin/reasons/index.twig', array(
        'reasons' => Model::factory('Reason')->find_many()
    ));
});

$app->get('/admin/reasons/new', function() use($app) {
    return $app->render('admin/reasons/form.twig', array(
        'reason' => Model::factory('Reason')->create()->as_array()
    ));
});

$app->post('/admin/reasons', function() use($app) {
    $reason = Model::factory('Reason')->create($app->request()->params());

    $reason->save();
    $app->redirect('/admin/reasons');
});

$app->get('/admin/reasons/:id/edit', function($id) use($app) {
    if ($reason = Model::factory('Reason')->find_one($id)) {
        return $app->render('admin/reasons/form.twig', array(
            'reason' => $reason->as_array()
        ));
    } else {
        $app->notFound();
    }
});

$app->put('/admin/reasons/:id', function($id) use($app) {
    if ($reason = Model::factory('Reason')->find_one($id)) {

        // To get rid of the _METHOD param
        $params = $app->request()->params();
        array_pop($params);

        $reason->update($params);

        if ($reason->save()) {
            $app->redirect('/admin/reasons');
        } else {
            return $app->render('admin/reason_form.html', array(
                'reason' => $reason->as_array()
            ));
        }
    } else {
        $app->notFound();
    }
});
