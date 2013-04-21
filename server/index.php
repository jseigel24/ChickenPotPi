<?php
ob_start();
include_once('./epiphany/Epi.php');
Epi::setPath('base', './epiphany');
Epi::setPath('view', './views');
Epi::setSetting('exceptions', 'true');

Epi::init('database', 'route', 'session', 'template');
EpiDatabase::employ('mysql', '[USERNAME]', '[SERVERNAME]', '[DATABASENAME]', '[PASSWORD]');

require_once('controllers/INCLUDEFILE.php');
require_once('settings.php');

getRoute()->get('/', array('Site', 'MainPage'));
getRoute()->get('/education', array('Site', 'Education'));
getRoute()->get('/tracker', array('Site', 'Tracker'));
getRoute()->get('/weather', array('Site', 'Weather'));

getRoute()->post('/tracker/eggslaid', array('FormSubmit', 'eggslaid'));
getRoute()->post('/tracker/salesupdate', array('FormSubmit', 'salesupdate'));
getRoute()->post('/tracker/expenseupdate', array('FormSubmit', 'expenseupdate'));

/**
// API Calls
getRoute()->get('/api/authorize', array('Api', 'authorize_get'));
getRoute()->post('/api/authorize', array('Api', 'authorize_post'));

//Budget Stuff
getRoute()->get('/api/budget', array('ApiBudget', 'all'));
getRoute()->get('/api/budget/balance', array('ApiBudget', 'balance_get'));
getRoute()->get('/api/budget/sales', array('ApiBudget', 'sales_get'));
getRoute()->post('/api/budget/sales', array('ApiBudget', 'sales_post'));
getRoute()->get('/api/budget/sales/(\d+)', array('ApiBudget', 'sales_getone'));
getRoute()->put('/api/budget/sales/(\d+)', array('ApiBudget', 'sales_update'));
getRoute()->delete('/api/budget/sales/(\d+)', array('ApiBudget', 'sales_delete'));

//Egg Stuff
getRoute()->get('/api/eggs/total', array('ApiEggsBirds', 'totaleggs'));
getRoute()->get('/api/birds/total', array('ApiEggsBirds', 'totalbirds'));
getRoute()->get('/api/eggs/fertilized', array('ApiEggsBirds', 'eggsfertilized'));
getRoute()->get('/api/eggs/unfertilized', array('ApiEggsBirds', 'eggsunfertilized'));
getRoute()->post('/api/eggs/fertilized', array('ApiEggsBirds', 'update_fertilized'));
getRoute()->post('/api/eggs/unfertilized', array('ApiEggsBirds', 'update_unfertilized'));

//Feed Data
getRoute()->get('/api/feed/total', array('ApiFeed', 'total'));
getRoute()->get('/api/feed/isfed', array('ApiFeed', 'isfed'));
getRoute()->post('/api/feed/isfed', array('ApiFeed', 'isfed_update'));
getRoute()->get('/api/feed/last', array('ApiFeed', 'lastfeed'));
**/
//Catch all for 404s
getRoute()->get('.*', array('Errors', '_404'));

getRoute()->run();


ob_end_flush();

