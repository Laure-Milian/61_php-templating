<?php

class Faker {

	private $data;

	public function __construct() {
		$faker = Faker\Factory::create();
		$this->data = [
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

	}

	public function getData() {
		return $this->data;
	}

}