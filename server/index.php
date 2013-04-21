<?php
ob_start();
include_once('./epiphany/Epi.php');
Epi::setPath('base', './epiphany');
Epi::setPath('view', './views');
Epi::setSetting('exceptions', 'true');

Epi::init('database', 'route', 'session', 'template');
EpiDatabase::employ('mysql', 'cpp', 'localhost', 'cpp', 'Yt4TYzYvshxpaJhc');

require_once('controllers/INCLUDEFILE.php');
require_once('settings.php');

getRoute()->get('/', array('Site', 'MainPage'));
getRoute()->get('/education', array('Site', 'Education'));
getRoute()->get('/tracker', array('Site', 'Tracker'));
getRoute()->get('/output', array('Site', 'Output'));
getRoute()->get('/weather', array('Site', 'Weather'));

getRoute()->get('/flock', array('Site', 'Flock'));
getRoute()->get('/budget', array('Site', 'Budget'));

getRoute()->post('/tracker/eggslaid', array('FormSubmit', 'eggslaid'));
getRoute()->post('/tracker/salesupdate', array('FormSubmit', 'salesupdate'));
getRoute()->post('/tracker/expenseupdate', array('FormSubmit', 'expenseupdate'));

//Catch all for 404s
getRoute()->get('.*', array('Errors', '_404'));

getRoute()->run();


ob_end_flush();

