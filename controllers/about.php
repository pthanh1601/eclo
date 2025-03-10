<?php
$app->router("/test1/about", 'GET', function ($vars) {
	$hello = 'about ECLO';
	echo $hello;
});
$app->router("/test1/about/{id}", 'GET', function ($vars) {
	$hello = 'about ECLO' . $vars['id'];
	echo $hello;
});
