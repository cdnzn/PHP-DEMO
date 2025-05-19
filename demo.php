<?php

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;

$slugify = new Slugify();
echo $slugify->slugify("This is the new title.") . "\n";

$uuid = Uuid::uuid4();
echo $uuid->toString();

$faker = Faker\Factory::create();
echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->phoneNumber() . "\n";
echo $faker->text() . "\n";
