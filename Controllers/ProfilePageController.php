<?php

class ProfilePageController {

	public function displayProfilePage() {

		require BASEPATH . '/Models/Faker.php';
		
		$data = (new Faker())->getData();
		$loader = new Twig_Loader_Filesystem(BASEPATH . '/Views/');
		$twig = new Twig_Environment($loader);

		echo $twig->render('profilePage.php', $data);
	
	}

}