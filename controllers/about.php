<?php
$app->router("/eclo/about", 'GET', function ($vars) {
	$hello = 'about ECLO';
	echo $hello;
});
$app->router("/eclo/about/{id}", 'GET', function ($vars) {
	$hello = 'about ECLO' . $vars['id'];
	echo $hello;
});
