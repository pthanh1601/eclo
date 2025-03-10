<?php
$app->router("/eclo/home", 'GET', function ($vars) use ($app) {
	echo $app->render('templates/home.php', $vars);
});
