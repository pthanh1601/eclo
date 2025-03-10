<?php
$app->router("/test1/home", 'GET', function ($vars) use ($app) {
	echo $app->render('templates/home.php', $vars);
});
