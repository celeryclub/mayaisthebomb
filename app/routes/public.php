<?php

$app->get('/', function() use($app) {
  return $app->render('index.twig', array(
    'reasons' => Reason::find()->order('number desc')
  ));
});
