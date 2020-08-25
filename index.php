<?php
include "vendor/autoload.php";

use LzoMedia\TravelMint\TravelMintClient;
use Illuminate\Database\Capsule\Manager;

$capsule = new Manager();

$capsule->addConnection([

    "driver" => "mysql",

    "host" =>"127.0.0.1",

    "database" => "hotels",

    "username" => "root",

    "password" => ""

]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();
$capsule->bootEloquent();
$capsule->bootEloquent();

//Manager::schema()->create('hotels', function ($table) {
//
//    $table->collation = 'utf8_general_ci';
//
//    $table->increments('id');
//
//    $table->string('title');
//    $table->string('phone');
//    $table->string('price');
//    $table->text('image');
//    $table->text('street');
//    $table->text('city');
//    $table->text('region');
//    $table->text('country');
//    $table->text('latitude');
//    $table->text('longitude');
//    $table->text('hours');
//    $table->text('payments');
//    $table->text('description');
//
//});
//



$factory = new TravelMintClient();

$data = $factory->extract(1,2);

foreach ($data as $hotel){

    $save = new \LzoMedia\TravelMint\Models\Hotel();


    print_r($hotel->getTitle());

    die;

    $save->title = $hotel->getTitle();


    $save->phone = $hotel->getPhone();
    $save->image = $hotel->getImage();
    $save->price = $hotel->getPrice();
    $save->street = $hotel->getStreet();
    $save->city = $hotel->getCity();
    $save->region = $hotel->getRegion();
    $save->country = $hotel->getCountry();
    $save->latitude = $hotel->getLatitude();
    $save->longitude = $hotel->getLongitude();
    $save->hours = $hotel->getHours();
    $save->payments = $hotel->getPayments();
    $save->description = $hotel->getDescription();

    $save->save();

}

die;
