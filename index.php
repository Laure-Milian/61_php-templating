<?php

	define('BASEPATH', __DIR__);

	require BASEPATH . '/vendor/autoload.php';
	require BASEPATH . '/Controllers/ProfilePageController.php';

	if (!isset($_GET['page'])) {
		(new ProfilePageController())->displayProfilePage();
	}
