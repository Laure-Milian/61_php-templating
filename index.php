<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Templating</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>
	<?php require __DIR__ . '/vendor/autoload.php';
	$faker = Faker\Factory::create();

	$data = [
		'company' => $faker->company,
		'catchPhrase' => $faker->catchPhrase,
		'url' => $faker->url,
		'color' => $faker->colorName,
		'price' => $faker->randomDigitNotNull,
		'userName' => $faker->name,
		'job' => $faker->jobTitle,
		'email' => $faker->email,
		'telephone' =>  $faker->phoneNumber,
		'address' => $faker->address,
		'productAdjective' => $faker->word,
		'productName' => $faker->word,
		'productMaterial' => $faker->word,
		'companyImg' => $faker->imageUrl($width = 400, $height = 300),
		'profileImg' => $faker->imageUrl($width = 50, $height = 50, 'cats')
	];

	$loader = new Twig_Loader_Filesystem(__DIR__);
	$twig = new Twig_Environment($loader);
	echo $twig->render('profilePage.php', $data);
		?>

	</body>
	</html>