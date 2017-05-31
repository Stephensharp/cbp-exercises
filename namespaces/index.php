<?php

require_once 'page.php';
require_once 'request.php';

require_once 'client_request.php';
require_once 'libraries\articles\article.php';
require_once 'libraries\articles\page.php';

request::dump();


// render the client's request
$client_request = new request();
echo $client_request->getText();

// prepare an article containing pages and render it
$article = new article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->render();